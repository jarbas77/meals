<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aliref;

class AlirefController extends Controller
{
    public function index(){
		$aliref = Aliref::all();
		return response()->json($aliref,201);
	}
	
	public function show($id){
		$aliref = Aliref::find($id);
		return response()->json($aliref,201);
	}
	
	public function store(Request $request){
		$aliref = Aliref::create($request->all());
		return response()->json($aliref,201);
	}
	
	public function update(Request $request, $id){
		$aliref = Aliref::findOrFail($request->input('idRef');
		$aliref = $aliref->update($request->all());
		return response()->json($aliref,200);
	}
	
	public function delete(Request $request, $id){
		$aliref = Aliref::findOrFail($id);
		$aliref->delete();
		return response()->json(null,204);
	}
}
