<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Borrowerdetail;
use App\Models\Member;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Borrower::with('member')->orderBy('id', 'desc')->get();
        return view('peminjaman.index', compact('data'));
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
        return $request;
        Borrower::create([
            'id_anggota' => $request->id_anggota,
            'no_transaksi' => $request->no_transaksi
        ]);

        foreach ($request->id_buku as $key) {
            Borrowerdetail::create([
                'id_peminjam' => $request->id,
                'id_buku' => $request->id_buku[$key],
                'tgl_peminjaman' => $request->tgl_peminjaman[$key],
                'tgl_pengembalian' => $request->tgl_pengembalian[$key],
                'keterangan' => $request->keterangan[$key],
            ]);
        }

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
