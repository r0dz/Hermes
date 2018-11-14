<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlanoController extends Controller
{
    public function create()
    {
        return view('create-plano');
    }
  
    public function store(Request $request)
    {
        $plano = new \App\PlanoDeTeste;
        $plano->nome=$request->get('nome');
        $plano->descricao=$request->get('descricao');
        $plano->publico=$request->has('publico')?1:0;
        $plano->ativo=$request->has('ativo')?1:0;
        $plano->save();
        
        return redirect('planos')->with('success', 'Plano criado!');
    }
  
    public function index()
    {
        $planos = \App\PlanoDeTeste::all();
        return view('index-plano',compact('planos'));
    }
  
    public function edit($id)
    {
        $plano = \App\PlanoDeTeste::find($id);
        return view('edit-plano',compact('plano','id'));
    }
  
    public function update(Request $request, $id)
    {
        $plano = \App\PlanoDeTeste::find($id);
        $plano->nome=$request->get('nome');
        $plano->descricao=$request->get('descricao');
        $plano->publico=$request->has('publico')?1:0;
        $plano->ativo=$request->has('ativo')?1:0;
        $plano->save();
        return redirect('planos');
    }
  
    public function destroy($id)
    {
        $plano = \App\PlanoDeTeste::find($id);
        $plano->delete();
        return redirect('planos')->with('success','Plano deletado!');
    }
}
