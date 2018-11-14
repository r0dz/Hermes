<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuiteController extends Controller
{
    public function create()
    {
        $planos = \App\PlanoDeTeste::all();
        return view('create-suite',compact('planos'));
    }
  
    public function store(Request $request)
    {
        $suite = new \App\SuiteDeTeste;
        $suite->nome=$request->get('nome');
        $suite->detalhes=$request->get('detalhes');
        $suite->plano_id=$request->get('plano_id');
        $suite->save();
        
        return redirect('suites')->with('success', 'Suite criada!');
    }
  
    public function index()
    {
        $suites = \App\SuiteDeTeste::all();
        return view('index-suite',compact('suites'));
    }
  
    public function edit($id)
    {
        $planos = \App\PlanoDeTeste::all();
        $suite = \App\SuiteDeTeste::find($id);
        return view('edit-suite',compact('planos','suite','id'));
    }
  
    public function update(Request $request, $id)
    {
        $suite = \App\SuiteDeTeste::find($id);
        $suite->nome=$request->get('nome');
        $suite->detalhes=$request->get('detalhes');
        $suite->plano_id=$request->get('plano_id');
        $suite->save();
        
        return redirect('suites');
    }
  
    public function destroy($id)
    {
        $suite = \App\SuiteDeTeste::find($id);
        $suite->delete();
        return redirect('suites')->with('success','Suite deletada!');
    }
}
