<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
 {
 	return "halaman dosen";

    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Phony';
    	$dosen->nip = '9038924324';
    	$dosen->alamat = 'sembarang';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "data dengan dosen {$dosen->nama} telah disimpan";
    }
}
