@extends('adminlte::page')

@section('content_header')
    <div class="d-inline-block">
        <h1>Lots</h1>
    </div>
    <div class="d-inline-block float-right">
        <a href="{{route('lots.create')}}" type="button" class="btn btn-block btn-secondary">
            Add lot
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Lot list</h2>
                </div>
                <div class="card-body table-responsive p-0">
                    <div class="mt-3 ml-3" style="width: 95%">
                        <table id="myTable" class="table table-striped m-3">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Categories</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lots as $lot)
                                <tr>
                                    <td>{{$lot->name}}</td>
                                    <td>{{$lot->description}}</td>
                                    <td>Categories</td>
                                    <td class="text-center d-inline-flex">
                                        <a href="{{route('lots.show', $lot->id)}}">
                                            <i class="ml-3 far fa-eye"></i>
                                        </a>
                                        <a href="{{route('lots.edit', $lot->id)}}">
                                            <i class="ml-3 fas text-success fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{route('lots.destroy', $lot->id)}}"
                                              method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="border-0 bg-transparent ml-3">
                                                <i class="text-danger fas fa-trash" role="button"></i>
                                            </button>
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

@stop
