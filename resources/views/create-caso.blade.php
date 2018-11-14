@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Caso de Teste</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('casos') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="titulo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Objetivo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="objetivo">
                            </div>
                        </div>
                      
                         <div class="form-group">
                            <label class="col-md-4 control-label">Pré-Condições</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="pre_condicoes"></textarea>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="status">
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
                               <select class="form-control" name="prioridade">
                                 <option value="Baixa">Baixa</option>
                                 <option value="Média">Média</option>
                                 <option value="Alta">Alta</option>
                              </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de Execução</label>
                            
                            <div class="col-md-6">
                               <select class="form-control" name="tipo_execucao">
                                 <option value="Manual">Manual</option>
                                 <option value="Automática">Automática</option>
                              </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tempo Estimado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tempo_estimado">
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
                                    <i class="fa fa-btn fa-user"></i>Criar Caso
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
