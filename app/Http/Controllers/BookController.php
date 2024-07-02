<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::orderBy('id', 'desc')->get();

        return view('book.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect()->to('book');
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
        $edit = Book::find($id);

        return view('book.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Book::where('id', $id)->update([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'qty' => $request->qty,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
        ]);

        return redirect()->to('book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::where('id', $id)->delete();

        return redirect()->to('book');
    }
}
