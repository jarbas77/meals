<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentos extends Model
{
    protected $table = 'alimentos';
    protected $primaryKey = 'idAlim';
    protected $fillable = array('alNome','alValEnergetico','alGordura','alAcucar','alProteina');
	public $timestamp =true;
	

}
