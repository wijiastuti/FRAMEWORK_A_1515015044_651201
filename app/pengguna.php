<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
  protected $table = 'pengguna';
  protected $fillable = ['username','password']; 

  public function mahasiswa(){
  	return $this->hasone(Mahasiswa::class);
  }
  public function dosen(){
  	return $this->hasone(Dosen::class);

}
