<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CasoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $suites = \App\SuiteDeTeste::all();
        return view('create-caso',compact('suites'));
    }
  
    public function store(Request $request)
    {
        $caso = new \App\CasoDeTeste;
        $caso->titulo=$request->get('titulo');
        $caso->objetivo=$request->get('objetivo');
        $caso->pre_condicoes=$request->get('pre_condicoes');
        $caso->status=$request->get('status');
        $caso->prioridade=$request->get('prioridade');
        $caso->tipo_execucao=$request->get('tipo_execucao');
        $caso->tempo_estimado=$request->get('tempo_estimado');
        $caso->suite_id=$request->get('suite_id');
        $caso->save();
        
        return redirect('casos')->with('success', 'Caso criado!');
    }
  
    public function index()
    {
        $casos = \App\CasoDeTeste::all();
        return view('index-caso',compact('casos'));
    }
  
    public function edit($id)
    {
        $suites = \App\SuiteDeTeste::all();
        $caso = \App\CasoDeTeste::find($id);
        return view('edit-caso',compact('suites','caso','id'));
    }
  
    public function update(Request $request, $id)
    {
        $caso = \App\CasoDeTeste::find($id);
        $caso->titulo=$request->get('titulo');
        $caso->objetivo=$request->get('objetivo');
        $caso->pre_condicoes=$request->get('pre_condicoes');
        $caso->status=$request->get('status');
        $caso->prioridade=$request->get('prioridade');
        $caso->tipo_execucao=$request->get('tipo_execucao');
        $caso->tempo_estimado=$request->get('tempo_estimado');
        $caso->suite_id=$request->get('suite_id');
        $caso->save();
        
        return redirect('casos');
    }
  
    public function destroy($id)
    {
        $caso = \App\CasoDeTeste::find($id);
        $caso->delete();
        return redirect('casos')->with('success','Caso deletado!');
    }
}
