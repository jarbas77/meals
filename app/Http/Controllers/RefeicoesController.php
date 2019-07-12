<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Refeicoes;

class RefeicoesController extends Controller
{
    public function index(){
		$refeicoes = Refeicoes::all();
		return response()->json($refeicoes,201);
	}
	
	public function show($id){
		$refeicoes = Refeicoes::find($id);
		return response()->json($refeicoes,201);
	}
	
	public function store(Request $request){
		$refeicoes = Refeicoes::create($request->all());
		return response()->json($refeicoes,201);
	}
	
	public function update(Request $request, $id){
		$refeicoes = Refeicoes::findOrFail($id);
		$refeicoes = $refeicoes->update($request->all());
		return response()->json($refeicoes,200);
	}
	
	public function delete(Request $request, $id){
		$refeicoes = Refeicoes::findOrFail($id);
		$refeicoes->delete();
		return response()->json(null,204);
	}
}
