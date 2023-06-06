<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';
        $Barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'Barangs' => $Barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        $satuans = Satuan::all();
        return view('Barang.create', compact('pageTitle','satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':Attribute sudah digunakan.',
        ];

        $validator = Validator::make($request->all(), [
            'KodeBarang' => 'required|unique:barangs,kode_barang',
            'NamaBarang' => 'required',
            'DeskripsiBarang' => 'required',
            'HargaBarang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $Barang = New Barang;
        $Barang->kode_barang = $request->KodeBarang;
        $Barang->nama_barang = $request->NamaBarang;
        $Barang->deskripsi_barang = $request->DeskripsiBarang;
        $Barang->harga_barang = $request->HargaBarang;
        $Barang->satuan_id = $request->satuan_id;
        $Barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';
        $Barang = Barang::find($id);

        return view('barang.show', compact('pageTitle', 'Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Barang Edit';
        $Barang = Barang::find($id);
        $satuans = Satuan::all();

        return view('barang.edit', compact('pageTitle', 'Barang', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':Attribute sudah digunakan.',
        ];

        $validator = Validator::make($request->all(), [
            'KodeBarang' => 'required|unique:barangs,kode_barang',
            'NamaBarang' => 'required',
            'DeskripsiBarang' => 'required',
            'HargaBarang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $Barang = Barang::find($id);
        $Barang->kode_barang = $request->KodeBarang;
        $Barang->nama_barang = $request->NamaBarang;
        $Barang->deskripsi_barang = $request->DeskripsiBarang;
        $Barang->harga_barang = $request->HargaBarang;
        $Barang->satuan_id = $request->satuan_id;
        $Barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('barangs.index');
    }
}
