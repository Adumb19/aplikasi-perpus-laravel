<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Member;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = Member::orderBy('id', 'desc')->get();
        return view('peminjaman.index', compact('member'));
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

        $kode_transaksi = $huruf . date('dmY') . sprintf("%03s", $urutan);

        $buku = Book::orderBy('id','desc')->get();
        
        return view('peminjaman.create', compact('data', 'kode_transaksi', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Borrower::create([
            'nama_anggota' => $request->nama_anggota,
            'no_transaksi' => $request->no_transaksi
        ]);

        return redirect()->to('level');
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
