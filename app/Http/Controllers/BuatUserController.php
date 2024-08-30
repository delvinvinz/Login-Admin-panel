<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BuatUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buatuser = User::latest()->paginate(1);
        return view('buatuser.index', compact('buatuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buatuser.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $buatuser)
    {
        return view('buatuser.edituser', compact('buatuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
