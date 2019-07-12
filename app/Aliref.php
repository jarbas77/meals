<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliref extends Model
{
    protected $table = 'aliref';
    protected $primaryKey = 'idRef';
    protected $fillable = array('qtd');
	public $timestamp =true;
	
	public function idRef(){
		return $this->belongsTo('App\Refeicoes');
		}
	public function idAlimento(){
		return $this->belongsTo('App\Alimentos');
		}
}
