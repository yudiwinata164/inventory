<?php

namespace App\Http\Controllers;

use App\DataBarang;
use Illuminate\Http\Request;
use App\KategoriBarang;

class StockBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["stockbarang"] = DataBarang::all()->where("status", "Dalam Gudang");
        $data["title"] = "Stock Barang";

        return view("inventory.stock_barang.stockbarang", $data);
    }

    public function aktif($stockbarang)
    {
        $databarang = DataBarang::find($stockbarang);
        $databarang->status = 'Digunakan';
 
        $databarang->save();
        return redirect(route('stockbarang.index'))->with('sukses', 'Satu data telah dipindahkan ke data barang aktif.');
    }

    /**
     * detail
     *
     * @param  mixed $id
     * @return void
     */
    public function detail($id)
    {
        $data["stockbarang"] = DataBarang::find($id);
        $data["title"] = "Detail Stock Barang";

        if ($data["stockbarang"]) {
            return view("inventory.stock_barang.detail", $data);
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
        $data["kategoribarang"] = KategoriBarang::all();
        $data["title"] = "Tambah Stock Barang";
        $data["text"] = "Tambah";
        
        return view("inventory.stock_barang.form-input", $data);
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
            'nama_barang'   => 'required',
            'kategori'      => 'required',
            'seri_perangkat'=> 'required|unique:data_barangs',
            'ram'           => 'required',
            'prosesor'      => 'required',
            'tanggal_terima'=> 'required',
        ]);
        $ValidateData['status'] = 'Dalam Gudang';

        DataBarang::create($ValidateData);
        return redirect(route('stockbarang.index'))->with('sukses', 'Satu data telah berhasil ditambahkan.');
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
     * @param  int  $stockbarang
     * @return \Illuminate\Http\Response
     */
    public function edit($stockbarang)
    {
        $data["stockbarang"]    = DataBarang::find($stockbarang);
        $data["kategoribarang"] = KategoriBarang::all();
        $data["title"]          = "Edit Stock Barang";
        $data["text"]           = "Edit";
        
        return view("inventory.stock_barang.form-input", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $stockbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stockbarang)
    {
        $databarang = DataBarang::find($stockbarang);

        $rules = [
            'nama_barang'   => 'required',
            'kategori'      => 'required',
            'ram'           => 'required',
            'prosesor'      => 'required',
            'tanggal_terima'=> 'required',
        ];

        if ($request->seri_perangkat != $databarang->seri_perangkat) {
            $rules['seri_perangkat'] = 'required|unique:data_barangs';
        }

        $ValidateData = $request->validate($rules);

        DataBarang::where('id', $stockbarang)->update($ValidateData);
        return redirect(route('stockbarang.index'))->with('sukses', 'Satu data telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $stockbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($stockbarang)
    {
        DataBarang::destroy($stockbarang);
        return redirect(route('stockbarang.index'))->with('sukses', 'Satu data telah dihapus.');
    }
}
