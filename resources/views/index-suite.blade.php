@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Suite de Teste</div>
                <div class="panel-body">
                    <a href="{{ url('/suites/create') }}" class="btn btn-primary">Criar Suite</a>
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Detalhes</th>
                        <th>Plano ID</th>
                        <th colspan="2">Ações</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($suites as $suite)
                      <tr>
                        <td>{{$suite['id']}}</td>
                        <td>{{$suite['nome']}}</td>
                        <td>{{$suite['detalhes']}}</td>
                        <td>{{$suite['plano_id']}}</td>

                        <td><a href="{{action('SuiteController@edit', $suite['id'])}}" class="btn btn-warning">Editar</a></td>
                        <td>
                          <form action="{{action('SuiteController@destroy', $suite['id'])}}" method="post">
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
