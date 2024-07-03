<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Borrower::with('member')->orderBy('id', 'desc')->get();

        $kode_transaksi = Borrower::orderBy('id', 'desc')->first();
        $huruf = "TR";
        $urutan = $kode_transaksi->id;

        $kode_transaksi = $huruf . date('dmY') . sprintf($urutan);
        
        return view('peminjaman.create', compact('data', 'kode_transaksi'));
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
