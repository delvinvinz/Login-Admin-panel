<?php

namespace App\Http\Controllers;

use App\Models\LaporanPembayaranKue;
use Illuminate\Http\Request;

class LaporanPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporanpembayarankue = LaporanPembayaranKue::latest()->paginate(1);
        return view('laporanpembayarankue.index', compact('laporanpembayarankue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function edit(laporanpembayarankue $laporanpembayarankue)
    {
        return view('laporanpembayarankue.editpembayarankue', compact('laporanpembayarankue'));
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
