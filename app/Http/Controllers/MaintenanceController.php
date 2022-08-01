<?php

namespace App\Http\Controllers;

use App\DataBarang;
use App\JenisMaintenance;
use App\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data["databarang"] = DataBarang::where('status', 'Digunakan')->find($id);
        $data["title"] = "Maintenance Data Barang";
        if ($data["databarang"]) {
            return view("inventory.data_barang.maintenance.maintenance", $data);
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
        $data['databarang']         = DataBarang::find($id);
        $data['jenis_maintenance']  = JenisMaintenance::all();
        $data["title"]              = "Tambah Maintenance";
        $data["text"]               = "Tambah";
        
        return view("inventory.data_barang.maintenance.form-input", $data);
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
            'tanggal'           => 'required',
            'jenis_maintenance' => 'required',
            'pic'               => 'required',
            'user'              => 'required',
            'unit'              => 'required',
            'service'           => 'required',
            'estimasi'          => 'required',
        ]);
        $ValidateData['databarang_id'] = $request->id;

        Maintenance::create($ValidateData);
        return redirect(route('maintenance.index', $request->id))->with('sukses', 'Satu data telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $maintenance)
    {
        $data['maintenance']        = Maintenance::find($maintenance);
        $data['jenis_maintenance']  = JenisMaintenance::all();
        $data["title"]              = "Edit Maintenance";
        $data["text"]               = "Edit";
        
        return view("inventory.data_barang.maintenance.form-input", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ValidateData = $request->validate([
            'tanggal'           => 'required',
            'jenis_maintenance' => 'required',
            'pic'               => 'required',
            'user'              => 'required',
            'unit'              => 'required',
            'service'           => 'required',
            'estimasi'          => 'required',
        ]);

        Maintenance::where('id', $request->maintenance)->update($ValidateData);
        return redirect(route('maintenance.index', $request->id))->with('sukses', 'Satu data telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Maintenance::destroy($request->maintenance);
        return redirect(route('maintenance.index', $request->id))->with('sukses', 'Satu data telah dihapus.');
    }
}
