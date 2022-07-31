<?php

namespace App\Http\Controllers;

use App\DataBarang;
use App\KategoriBarang;
use App\Mutasi;
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
        $data["databarang"] = DataBarang::where("status", "Digunakan")->find($id);
        $data["mutasi"] = Mutasi::where("databarang_kode", @$data["databarang"]->kode_barang)->latest("created_at", "desc")->first();
        // dd($data["mutasi"]);
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
        $data["kategoribarang"] = KategoriBarang::all();
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
        $rules = [
            'kode_barang'           => 'required|unique:data_barangs',
            'nama_barang'           => 'required',
            'kategori'              => 'required',
            'seri_perangkat'        => 'required|unique:data_barangs',
            'serial_number'         => 'required|unique:data_barangs',
            'prosesor'              => '',
            'ram'                   => '',
            'password_anydesk'      => '',
            'password_teamviewer'   => '',
            'tanggal_terima'        => 'required',
            'tanggal_distribusi'    => 'required',
            'nama_unit'     => 'required',
            'nama_user'     => 'required',
            'pic'           => 'required',
        ];
        $ValidateData = $request->validate($rules);
        $ValidateData['status'] = 'Digunakan';
        $request_stockbarang = [
            "kode_barang"           => $ValidateData['kode_barang'],
            "nama_barang"           => $ValidateData['nama_barang'],
            "kategori"              => $ValidateData['kategori'],
            "seri_perangkat"        => $ValidateData['seri_perangkat'],
            "serial_number"         => $ValidateData['serial_number'],
            "prosesor"              => $ValidateData['prosesor'],
            "ram"                   => $ValidateData['ram'],
            "password_anydesk"      => $ValidateData['password_anydesk'],
            "password_teamviewer"   => $ValidateData['password_teamviewer'],
            "tanggal_terima"        => $ValidateData['tanggal_terima'],
            "tanggal_distribusi"    => $ValidateData['tanggal_distribusi'],
            "status"                => $ValidateData['status'],
        ];
        $request_mutasi = [
            "nama_unit"     => $ValidateData['nama_unit'],
            "nama_user"     => $ValidateData['nama_user'],
            "pic"           => $ValidateData['pic'],
            "databarang_kode" => $ValidateData['kode_barang'],
        ];

        Mutasi::create($request_mutasi);
        DataBarang::create($request_stockbarang);
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
        $data["kategoribarang"] = KategoriBarang::all();
        $data["databarang"]     = DataBarang::find($id);
        $data["mutasi"]         = Mutasi::where("databarang_kode", $data["databarang"]->kode_barang)->latest("created_at", "asc")->first();
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
        $databarang = DataBarang::find($id);
        $rules = [
            'nama_barang'           => 'required',
            'kategori'              => 'required',
            'prosesor'              => '',
            'ram'                   => '',
            'password_anydesk'      => '',
            'password_teamviewer'   => '',
            'tanggal_terima'        => 'required',
            'tanggal_distribusi'    => 'required',
        ];
        
        if ($request->kode_barang != $databarang->kode_barang) {
            $rules['kode_barang'] = 'required|unique:data_barangs';
        }
        if ($request->seri_perangkat != $databarang->seri_perangkat) {
            $rules['seri_perangkat'] = 'required|unique:data_barangs';
        }
        if ($request->serial_number != $databarang->serial_number) {
            $rules['serial_number'] = 'required|unique:data_barangs';
        }
        
        $ValidateData = $request->validate($rules);
        
        DataBarang::where("id", $id)->update($ValidateData);
        return redirect(route('databarang.index'))->with('sukses', 'Satu data telah berhasil diubah.');
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
