@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Suite de Teste</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{action('SuiteController@update', $id)}}">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" value="{{$suite->nome}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Detalhes</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="detalhes" value="{{$suite->detalhes}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Plano</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="plano_id">
                                @foreach($planos as $plano)
                                 <option value="{{$plano['id']}}">{{$plano['nome']}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Editar Suite
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
