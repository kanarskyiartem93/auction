@extends('adminlte::page')
@section('content_header')
    <div class="d-inline-block">
        <h1>Lots</h1>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add Lot</h3>
                </div>
                <form action="{{route('lots.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            @error('name')<i class="text-gray far fa-times-circle"></i>@enderror
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name"
                                   placeholder="Enter name">
                            @error('name')
                            <div class="text-danger text-left">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            @error('description')<i class="text-gray far fa-times-circle"></i>@enderror
                            <label for="inputName">Description</label>
                            <input type="text" class="form-control" id="inputName" name="description"
                                   placeholder="Enter description">
                            @error('description')
                            <div class="text-danger text-left">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            @error('categories')<i class="text-gray far fa-times-circle"></i>@enderror
                            <label for="inputPosition">Categories</label>

                            <select name="categories[]" multiple="multiple" class="form-control select2 col-10">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('categories')
                            <div class="text-danger text-left">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button type="reset"
                                class="col-4 btn border border-secondary">Cancel
                        </button>
                        <button type="submit" class="col-4 btn btn-secondary border border-secondary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $('.select2').select2()
    </script>
@stop
