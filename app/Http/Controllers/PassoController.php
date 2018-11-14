<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PassoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $casos = \App\CasoDeTeste::all();
        return view('create-passo',compact('casos'));
    }
  
    public function store(Request $request)
    {
        $passo = new \App\Passo;
        $passo->passos=$request->get('passos');
        $passo->resultado_esperado=$request->get('resultado_esperado');
        $passo->execucao=$request->get('execucao');
        $passo->caso_id=$request->get('caso_id');
        $passo->save();
        
        return redirect('passos')->with('success', 'Passo criado!');
    }
  
    public function index()
    {
        $passos = \App\Passo::all();
        return view('index-passo',compact('passos'));
    }
  
    public function edit($id)
    {
        $casos = \App\CasoDeTeste::all();
        $passo = \App\Passo::find($id);
        return view('edit-passo',compact('casos','passo','id'));
    }
  
    public function update(Request $request, $id)
    {
        $passo = \App\Passo::find($id);
        $passo->passos=$request->get('passos');
        $passo->resultado_esperado=$request->get('resultado_esperado');
        $passo->execucao=$request->get('execucao');
        $passo->caso_id=$request->get('caso_id');
        $passo->save();
        
        return redirect('passos');
    }
  
    public function destroy($id)
    {
        $passo = \App\Passo::find($id);
        $passo->delete();
        return redirect('passos')->with('success','Passo deletado!');
    }
}
