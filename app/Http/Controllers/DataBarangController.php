<?php

namespace App\Http\Controllers;

use App\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["databarang"] = DataBarang::all()->where("status", "Digunakan");
        $data["title"] = "Data Barang";

        return view("inventory.data_barang.databarang", $data);
    }
    
    /**
     * form detail data barang
     *
     * @param  mixed $id
     * @return void
     */
    public function detail($id)
    {
        $data["databarang"] = DataBarang::find($id);
        $data["title"] = "Detail Barang";

        if ($data["databarang"]) {
            return view("inventory.data_barang.detail", $data);
        }else{
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["title"] = "Tambah Data Barang";
        $data["text"]  = "Tambah";
        
        return view("inventory.data_barang.form-input", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'tanggal_terima'  => 'required',
            'nama_barang'     => 'required',
            'kode_barang'     => 'required|unique:data_barangs',
            'ip_sistem'       => 'required',
            'spesifikasi'     => 'required',
            'vendor'          => 'required',
        ]);
        $ValidateData['status'] = 'Digunakan';

        DataBarang::create($ValidateData);
        return redirect(route('databarang.index'))->with('sukses', 'Satu data telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["title"] = "Edit Data Barang";
        $data["text"]  = "Edit";
        
        return view("inventory.data_barang.form-input", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataBarang::destroy($id);
        return redirect(route('databarang.index'))->with('sukses', 'Satu data telah dihapus.');
    }
}
