@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plano de Teste</div>
                <div class="panel-body">
                    <a href="{{ url('/planos/create') }}" class="btn btn-primary">Criar Plano</a>
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Público</th>
                        <th>Ativo</th>
                        <th colspan="2">Ações</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($planos as $plano)
                      <tr>
                        <td>{{$plano['id']}}</td>
                        <td>{{$plano['nome']}}</td>
                        <td>{{$plano['descricao']}}</td>
                        <td>{{$plano['publico']}}</td>
                        <td>{{$plano['ativo']}}</td>

                        <td><a href="{{action('PlanoController@edit', $plano['id'])}}" class="btn btn-warning">Editar</a></td>
                        <td>
                          <form action="{{action('PlanoController@destroy', $plano['id'])}}" method="post">
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
