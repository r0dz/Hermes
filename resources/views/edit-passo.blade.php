@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Passo</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{action('PassoController@update', $id)}}">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Passos</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="passos">{{$passo->passos}}</textarea>
                            </div>
                        </div>
                      
                         <div class="form-group">
                            <label class="col-md-4 control-label">Resultado Esperado</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="resultado_esperado">{{$passo->resultado_esperado}}"</textarea>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de Execução</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="execucao">
                                 <option value="Manual">Manual</option>
                                 <option value="Automática">Automática</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Caso</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="caso_id">
                                @foreach($casos as $caso)
                                 <option value="{{$caso['id']}}">{{$caso['titulo']}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Editar Passo
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
