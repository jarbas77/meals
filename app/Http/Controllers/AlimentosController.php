<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Alimentos;

class AlimentosController extends Controller
{
     public function index(){
		$alimentos = Alimentos::all();
		return response()->json($alimentos,201);
	}
	
	public function show($id){
		$alimentos = Alimentos::find($id);
		return response()->json($alimentos,201);
	}
	
	public function store(Request $request){
		$alimentos = Alimentos::create($request->all());
		return response()->json($alimentos,201);
	}
	
	public function update(Request $request){
		$alimentos = Alimentos::findOrFail($request->input('idAlim'));
		$alimentos = $alimentos->update($request->all());
		return response()->json($alimentos,200);
	}
	
	public function delete(Request $request, $id){
		$alimentos = Alimentos::findOrFail($id);
		$alimentos->delete();
		return response()->json(null,204);
	}
}

