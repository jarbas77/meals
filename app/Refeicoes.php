<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicoes extends Model
{
    protected $table = 'refecoes';
    protected $primaryKey = 'idRef';
    protected $fillable = array('refNome','refData');
	public $timestamp =true;
	
	public function idTipo(){
		return $this->belongsTo('App\Tiporef');
		}
	
}
