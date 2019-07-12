<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiporef;

class TiporefController extends Controller
{
	//GET
    public function index(){
		$tiporef = Tiporef::all();
		return response()->json($tiporef,201);
	}
	//GET id - add
	public function show($id){
		$tiporef = Tiporef::find($id);
		return response()->json($tiporef,201);
	}
	//POST - add 
	public function store(Request $request){
		$tiporef = Tiporef::create($request->all());
		return response()->json($tiporef,201);
	}
	
	//PUT - Update
	public function update(Request $request, $id){
		$tiporef = Tiporef::findOrFail($request->input('idTipo'));
		$tiporef = $tiporef->update($request->all());
		return response()->json($tiporef,200);
	}
	//DELETE - delete
	public function delete(Request $request, $id){
		$tiporef = Tiporef::findOrFail($id);
		$tiporef->delete();
		return response()->json(null,204);
	}
}
