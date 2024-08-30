<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   public function index(Request $request)
   {
       $data = User::latest()->paginate(5);
       return view('users.index',compact('data'));
   }

   public function create()
   {
       $roles = Role::pluck('name','name')->all();
       return view('users.create',compact('roles'));
   }

   public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles' => 'required'
    ]);

    $input = $validatedData; // Gunakan data yang telah divalidasi
    $input['password'] = Hash::make($input['password']);

    $user = User::create($input);
    $user->assignRole($validatedData['roles']);

    return redirect()->route('users.index')
                    ->with('success', 'User created successfully');
}



   public function show($id)
   {
       $user = User::find($id);
       return view('users.show',compact('user'));
   }

   public function edit($id)
   {
       $user = User::find($id);
       $roles = Role::pluck('name','name')->all();
       $userRole = $user->roles->pluck('name','name')->all();

       return view('users.edit',compact('user','roles','userRole'));
   }

   public function update(Request $request, $id)
   {
       // Validasi input
       $validatedData = $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users,email,' . $id,
           'password' => 'nullable|same:confirm-password',
           'roles' => 'required'
       ]);

       // Ambil data yang sudah divalidasi
       $input = $validatedData;

       // Jika password tidak diisi, hapus dari input
       if (!empty($input['password'])) {
           $input['password'] = Hash::make($input['password']);
       } else {
           $input = Arr::except($input, ['password']);
       }

       // Temukan pengguna berdasarkan ID
       $user = User::findOrFail($id);
       $user->update($input);

       // Hapus role lama dan tetapkan role baru
       DB::table('model_has_roles')->where('model_id', $id)->delete();
       $user->assignRole($validatedData['roles']);

       return redirect()->route('users.index')
                        ->with('success', 'User updated successfully');
   }
   public function destroy($id)
   {
       User::find($id)->delete();
       return redirect()->route('users.index')
                       ->with('success','User deleted successfully');
   }
}
