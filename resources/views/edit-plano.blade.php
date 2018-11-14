@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Plano de Teste</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{action('PlanoController@update', $id)}}">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" value="{{$plano->nome}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Descrição</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="descricao" value="{{$plano->descricao}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="publico" value="{{$plano->publico}}"> Público
                                    </label>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ativo" value="{{$plano->ativo}}"> Ativo
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Editar Plano
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
