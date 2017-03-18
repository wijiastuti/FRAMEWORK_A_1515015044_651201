<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;
;
class RuanganController extends Controller
{
    public function awal (){
    	return "hello Mahasiswa FKTI";
	}
	public function tambah(){
		return $this->simpan();
	}
	 public function simpan()
    {
    	$ruangan = new Ruangan();
     	$ruangan->title = 'ruang 406';
    	$ruangan->save();
    	return "data dengan title {$ruangan->title} telah disimpan";
    }
}
