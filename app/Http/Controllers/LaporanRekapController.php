<?php

namespace App\Http\Controllers;

use App\Models\LaporanRekapTransaksi;
use Illuminate\Http\Request;

class LaporanRekapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporanrekaptransaksi = LaporanRekapTransaksi::latest()->paginate(1);
        return view('laporanrekaptransaksi.index', compact('laporanrekaptransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(LaporanRekapTransaksi $laporanrekaptransaksi)
    {
        return view('laporanrekaptransaksi.showrekapkue', compact('laporanrekaptransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
