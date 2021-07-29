<?php

namespace App\Http\Controllers;

use App\Restoran;
use App\Pemesanan;
use App\DetilPemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\PegawaiController;

class PegawaiRestoranController extends Controller {

    public function index(){
        if(!PegawaiController::getPegawai()){
            return redirect('pegawai/login');
        }
        $pegawai = PegawaiController::getPegawai();
        $restoran = Restoran::all();
        return view('pegawai.restoran.index', compact('restoran', 'pegawai'));
    }

    public function edit($id){
    }

    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
}
