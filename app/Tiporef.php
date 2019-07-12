<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiporef extends Model
{
     protected $table = 'tiporef';
    protected $primaryKey = 'idTipo';
    protected $fillable = array('nomeTipo');
	
	public $timestamp =false;
	
	public function tipoRef()
    {
         return $this->hasMany('App\Refeicoes');
    }
}
