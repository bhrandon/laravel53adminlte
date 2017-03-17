@extends('vendor.adminlte.layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form action="" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{$product->name or old('name')}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

