@extends('adminlte::page')

@section('content_header')
    <div class="d-inline-block">
        <h1>Categories</h1>
    </div>
    <div class="d-inline-block float-right">
        <a href="{{route('categories.create')}}" type="button" class="btn btn-block btn-secondary">
            Add category
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Category list</h2>
                </div>
                <div class="card-body table-responsive p-0">
                    <div class="mt-3 ml-3" style="width: 95%">
                        <table id="myTable" class="table table-striped m-3">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td class="text-center d-inline-flex">
                                        <a href="{{route('categories.show', $category->id)}}">
                                            <i class="ml-3 far fa-eye"></i>
                                        </a>
                                        <a href="{{route('categories.edit', $category->id)}}">
                                            <i class="ml-3 fas text-success fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{route('categories.destroy', $category->id)}}"
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
