<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
   public function awal()
 {
 	return "jadwal matakuliah ku ini loh";

    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->title = 'Basis Data';
    	$matakuliah->keterangan = 'Selamat Anda Berhasil';
    	$matakuliah->save();
    	return "data dengan matakuliah {$matakuliah->title} telah disimpan";
    }
}
