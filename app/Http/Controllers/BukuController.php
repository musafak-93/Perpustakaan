<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\Models\Buku::all();
        return view('buku.index', ['data_buku' => $data_buku]);
    }

    public function indexx()
    {
        $data_buku = \App\Models\Buku::all();
        return view('welcome', ['data_buku' => $data_buku]);
    }

    public function create(Request $request)
    {
        \App\Models\Buku::create($request->all());
        return redirect('/buku')->with('sukses', 'data berhasil di input');
    }

    public function edit($id)
    {
        $data_buku = \App\Models\Buku::find($id);
        return view('buku.edit',['buku' => $data_buku]);
    }

    public function update(Request $request, $id)
    {
        $data_buku = \App\Models\Buku::find($id);
        $data_buku->update($request->all());
        return redirect('buku')->with('Sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data_buku = \App\Models\Buku::find($id);
        $data_buku->delete();
        return redirect('buku')->with('Sukses', 'Data berhasil dihapus');
    }

    public function exportPdf()
    {
        $data_buku = \App\Models\Buku::all();
        $pdf = PDF::loadView('export.bukupdf',['buku' => $data_buku]);
        return $pdf->download('buku.pdf');
    }
}
