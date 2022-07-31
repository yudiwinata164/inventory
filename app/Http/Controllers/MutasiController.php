<?php

namespace App\Http\Controllers;

use App\DataBarang;
use App\Mutasi;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data["databarang"] = DataBarang::where('status', 'Digunakan')->find($id);
        $data["mutasi"] = Mutasi::all()->where('databarang_kode', $data["databarang"]->kode_barang);
        $data["title"] = "Mutasi Data Barang";
        if ($data["databarang"]) {
            return view("inventory.data_barang.mutasi.mutasi", $data);
        }else{
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data["databarang"] = DataBarang::find($id);
        $data["title"] = "Tambah Mutasi";
        $data["text"] = "Tambah";
        
        return view("inventory.data_barang.mutasi.form-input", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $databarang = DataBarang::find($id);

        $ValidateData = $request->validate([
            'tanggal_mutasi'=> 'required',
            'nama_user'     => 'required',
            'nama_unit'     => 'required',
            'pic'           => 'required',
        ]);
        $ValidateData["databarang_kode"] = $databarang->kode_barang;

        Mutasi::create($ValidateData);
        return redirect(route('mutasi.index', $id))->with('sukses', 'Satu data telah berhasil ditambahkan.');
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
    public function edit($id, $mutasi)
    {
        $data["databarang"] = DataBarang::find($id);
        $data["mutasi"] = Mutasi::find($mutasi);
        $data["title"] = "Edit Mutasi";
        $data["text"] = "Edit";
        
        return view("inventory.data_barang.mutasi.form-input", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $mutasi)
    {
        $databarang = DataBarang::find($id);

        $ValidateData = $request->validate([
            'tanggal_mutasi'=> 'required',
            'nama_user'     => 'required',
            'nama_unit'     => 'required',
            'pic'           => 'required',
        ]);

        Mutasi::where("id", $mutasi)->update($ValidateData);
        return redirect(route('mutasi.index', $id))->with('sukses', 'Satu data telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Mutasi::destroy($request->mutasi);
        return redirect(route('mutasi.index', $request->id))->with('sukses', 'Satu data telah dihapus.');
    }
}
