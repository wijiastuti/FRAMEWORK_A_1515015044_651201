<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
 {
 	return "halaman mahasiswa fkti";

    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'wiji astuti';
    	$mahasiswa->nim = '1515015044';
    	$mahasiswa->pengguna_id='1';
    	$mahasiswa->save();
    	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}
