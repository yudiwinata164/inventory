<?php

namespace App\Http\Controllers;

use App\DataBarang;
use Illuminate\Http\Request;
use App\KategoriBarang;
use App\Mutasi;

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
    
    /**
     * mutasiForm
     *
     * @return void
     */
    public function mutasiForm($stockbarang)
    {
        $data["stockbarang"] = DataBarang::where("status", "Dalam Gudang")->find($stockbarang);
        $data["title"]       = "Mutasi Stock Barang";
        $data["text"]        = "Submit";

        if ($data["stockbarang"]) {
            return view("inventory.stock_barang.form-mutasi", $data);
        }else{
            return abort(404);
        }
    }

    public function mutasi($stockbarang, Request $request)
    {
        $rules = [
                'kode_barang'           => 'required',
                'serial_number'         => 'required|unique:data_barangs',
                'password_anydesk'      => '',
                'password_teamviewer'   => '',
                'tanggal_distribusi'    => 'required',
                'nama_unit' => 'required',
                'nama_user' => 'required',
                'pic'       => 'required',
        ];
        
        $validate_data = $request->validate($rules);
        $validate_data['status'] = 'Digunakan';
        $request_stockbarang = [
            "kode_barang"           => $validate_data['kode_barang'],
            "serial_number"         => $validate_data['serial_number'],
            "password_anydesk"      => $validate_data['password_anydesk'],
            "password_teamviewer"   => $validate_data['password_teamviewer'],
            "tanggal_distribusi"    => $validate_data['tanggal_distribusi'],
            "status"                => $validate_data['status'],
        ];
        $request_mutasi = [
            "nama_unit"         => $validate_data['nama_unit'],
            "nama_user"         => $validate_data['nama_user'],
            "pic"               => $validate_data['pic'],
            "tanggal_mutasi"    => $validate_data['tanggal_distribusi'],
            "databarang_kode"   => $validate_data['kode_barang'],
        ];

        DataBarang::where("id", $stockbarang)->update($request_stockbarang);
        Mutasi::create($request_mutasi);

        return redirect(route('stockbarang.index'))->with('sukses', 'Satu data telah berhasil dimutasi.');
    }

    /**
     * detail
     *
     * @param  mixed $id
     * @return void
     */
    public function detail($id)
    {
        $data["stockbarang"] = DataBarang::where("status", "Dalam Gudang")->find($id);
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
            'ram'           => '',
            'prosesor'      => '',
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
            'ram'           => '',
            'prosesor'      => '',
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
