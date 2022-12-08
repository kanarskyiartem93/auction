@extends('adminlte::page')
@section('content_header')
    <div class="d-inline-block">
        <h1>Categories</h1>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Update category</h3>
                </div>
                <form action="{{route('categories.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            @error('name')<i class="text-gray far fa-times-circle"></i> @enderror
                            <label for="inputNameCategory">Name</label>
                            <input type="text" class="form-control" id="inputNameCategory" name="name"
                                   placeholder="Enter name of category" value="{{$category->name}}">
                            @error('name')
                            <div class="text-danger text-left" >
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="col-4 btn btn-secondary border border-secondary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
