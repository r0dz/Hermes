@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Caso de Teste</div>
                <div class="panel-body">
                    <a href="{{ url('/casos/create') }}" class="btn btn-primary">Criar Caso</a>
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Objetivo</th>
                        <th>Status</th>
                        <th>Prioridade</th>
                        <th>Suite ID</th>
                        <th colspan="2">Ações</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($casos as $caso)
                      <tr>
                        <td>{{$caso['id']}}</td>
                        <td>{{$caso['titulo']}}</td>
                        <td>{{$caso['objetivo']}}</td>
                        <td>{{$caso['status']}}</td>
                        <td>{{$caso['prioridade']}}</td>
                        <td>{{$caso['suite_id']}}</td>

                        <td><a href="{{action('CasoController@edit', $caso['id'])}}" class="btn btn-warning">Editar</a></td>
                        <td>
                          <form action="{{action('CasoController@destroy', $caso['id'])}}" method="post">
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
