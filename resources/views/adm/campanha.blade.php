@extends('vendor.adminlte.layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    @can('view_campanha')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Data Inicio</th>
                                <th>Data Fim</th>
                                <th>Ativo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campanhas as $campanha)
                            <tr>
                                <td>{{$campanha->id}}</td>
                                <td>{{$campanha->nome}}</td>
                                <td>{{$campanha->descricao}}</td>
                                <td>{{$campanha->data_inicio}}</td>
                                <td>{{$campanha->data_fim}}</td>
                                <td>{{$campanha->ativo}}</td>
                                
                                <td>
                                    @can('edit_campanha')
                                        <a href="#">Editar</a>
                                    @endcan
                                    @can('delete_campanha')
                                        <a href="#">Deletar</a></td>
                                    @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

