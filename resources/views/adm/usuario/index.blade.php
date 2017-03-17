@extends('vendor.adminlte.layouts.app')

@section('main-content')

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-body">
                   <button type="submit" class="btn btn-success">ADICIONAR</button>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>PAPEL</th>
                                <th>PERMISSÕES</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->role_label}}</td>
                                <td>{{$usuario->per_label}}</td>

                                <td>

                                    <a href="#">Editar</a>


                                    <a href="#">Deletar</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   {!! $usuarios->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
