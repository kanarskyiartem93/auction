@extends('adminlte::page')
@section('content_header')
    <div class="d-inline-block">
        <h1>Employees</h1>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add employee</h3>
                </div>
                <form action="{{route('lots.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            @error('name')<i class="text-gray far fa-times-circle"></i>@enderror
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name"
                                   placeholder="Enter name"
                                   onkeyup="countChars('inputName','restriction');">
                            @error('name')
                            <div class="text-danger text-left">
                                {{$message}}
                            </div>
                            @enderror
                            <p style="display:block; text-align:right" class="text-secondary" id="restriction">0/256</p>
                        </div>

                        <div class="form-group">
                            @error('position_id')<i class="text-gray far fa-times-circle"></i>@enderror
                            <label for="inputPosition">Position</label>
                            <select name="position_id" class="form-control">
                                @foreach($positions as $position)
                                    <option
                                        value="{{$position->id}}"
                                        {{$position->id == old('position_id'? 'selected' :'')}}
                                    >{{$position->name}}</option>
                                @endforeach
                            </select>
                            @error('position')
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
