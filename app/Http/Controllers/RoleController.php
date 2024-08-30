<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Routing\Controllers\Middleware;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:role-list|role-create|role-edit|role-delete', only: ['index', 'store']),
            new Middleware('permission:role-create', only: ['create', 'store']),
            new Middleware('permission:role-edit', only: ['edit', 'update']),
            new Middleware('permission:role-delete', only: ['destroy']),
        ];
    }
    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('roles.create', compact('permission'));
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles,name',
            'permission' => 'required|array',
        ]);

        // Validasi permissions
        $validPermissions = Permission::whereIn('id', $validatedData['permission'])
            ->where('guard_name', 'web')
            ->pluck('id')
            ->toArray();

        if (count($validPermissions) !== count($validatedData['permission'])) {
            return back()->withErrors(['permission' => 'Some permissions are invalid or do not exist.']);
        }

        $role = Role::create(['name' => $validatedData['name']]);
        $role->syncPermissions($validPermissions);

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }


    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();
        return view('roles.show', compact('role', 'rolePermissions'));
    }
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'permission' => 'required|array',
        ]);

        $role = Role::findOrFail($id);

        // Validasi permissions
        $validPermissions = Permission::whereIn('id', $validatedData['permission'])
            ->where('guard_name', 'web')
            ->pluck('id')
            ->toArray();

        if (count($validPermissions) !== count($validatedData['permission'])) {
            return back()->withErrors(['permission' => 'Some permissions are invalid or do not exist.']);
        }

        $role->name = $validatedData['name'];
        $role->save();

        $role->syncPermissions($validPermissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }


    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
