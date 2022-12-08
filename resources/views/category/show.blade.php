@extends('adminlte::page')

@section('content_header')
    <div class="d-inline-block">
        <h1>Category {{$category->name}}</h1>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td><b>Name</b></td>
                            <td>{{$category->name}}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
