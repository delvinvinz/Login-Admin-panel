<?php

namespace App\Http\Controllers;

use App\Models\PengambilanKue;
use Illuminate\Http\Request;

class PengambilanKueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengambilankue = PengambilanKue::latest()->paginate(1);
        return view('pengambilankue.index', compact('pengambilankue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengambilankue.createpengambilankue');
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
    public function edit(PengambilanKue $pengambilanKue)
    {
        return view('pengambilankue.editpengambilankue', compact('pengambilanKue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
