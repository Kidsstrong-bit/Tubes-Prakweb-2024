<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku created successfully.');
    }


    public function show($id)
    {
        $buku = Buku::find($id);
        return view('buku.show', compact('buku'));
    }


    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
        ]);

        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku updated successfully.');
    }
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku deleted successfully.');
    }
}
