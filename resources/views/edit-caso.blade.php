@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Caso de Teste</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{action('CasoController@update', $id)}}">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="titulo" value="{{$caso->titulo}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Objetivo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="objetivo" value="{{$caso->objetivo}}">
                            </div>
                        </div>
                      
                         <div class="form-group">
                            <label class="col-md-4 control-label">Pré-Condições</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="pre_condicoes">{{$caso->pre_condicoes}}</textarea>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="status" value="{{$caso->status}}">
                                 <option value="Draft">Draft</option>
                                 <option value="Rework">Rework</option>
                                 <option value="Obsolete">Obsolete</option>
                                 <option value="Final">Final</option>
                              </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Prioridade</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="prioridade" value="{{$caso->prioridade}}">
                                 <option value="Baixa">Baixa</option>
                                 <option value="Média">Média</option>
                                 <option value="Alta">Alta</option>
                              </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de Execução</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="tipo_execucao" value="{{$caso->tipo_execucao}}">
                                 <option value="Manual">Manual</option>
                                 <option value="Automática">Automática</option>
                              </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tempo Estimado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tempo_estimado" value="{{$caso->tempo_estimado}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Suite</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="suite_id">
                                @foreach($suites as $suite)
                                 <option value="{{$suite['id']}}">{{$suite['nome']}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Editar Caso
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
