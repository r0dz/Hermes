@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Passo</div>
                <div class="panel-body">
                    <a href="{{ url('/passos/create') }}" class="btn btn-primary">Criar Passo</a>
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Passos</th>
                        <th>Resultado Esperado</th>
                        <th>Tipo de Execução</th>
                        <th>Caso ID</th>
                        <th colspan="2">Ações</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($passos as $passo)
                      <tr>
                        <td>{{$passo['id']}}</td>
                        <td>{{$passo['passos']}}</td>
                        <td>{{$passo['resultado_esperado']}}</td>
                        <td>{{$passo['execucao']}}</td>
                        <td>{{$passo['caso_id']}}</td>

                        <td><a href="{{action('PassoController@edit', $passo['id'])}}" class="btn btn-warning">Editar</a></td>
                        <td>
                          <form action="{{action('PassoController@destroy', $passo['id'])}}" method="post">
                            {!! csrf_field() !!}
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
