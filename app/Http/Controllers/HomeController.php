<?php

namespace App\Http\Controllers;

use App\DataBarang;
use App\Maintenance;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data['databarang'] = DataBarang::where('status', 'Digunakan')->count();
        $data['maintenance'] = Maintenance::count();
        $data['stockbarang'] = DataBarang::where('status', 'Dalam Gudang')->count();
        $data['title'] = "Dashboard";
        return view('inventory.home', $data);
    }
}
