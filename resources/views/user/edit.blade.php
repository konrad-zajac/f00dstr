@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-plus" ></span>edit user ,,{{$user->name}}"</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                        {{ csrf_field() }}

                        {{-- 1 --}}
                        <div class="form-group">
                            <label for="user_name" class="col-md-4 control-label"> Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>

                                </div>
                        </div>
                        {{-- 2 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"> email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required>
                                

                                </div>
                        </div>
                        {{-- 2 --}}
                        <div class="form-group">
                            <label for="importance_of_price" class="col-md-4 control-label"> importance of price</label>

                            <div class="col-md-6">
                                <input id="importance_of_price" type="text" class="form-control" name="importance_of_price" value="{{$user->importance_of_price}}" required>
                                

                                </div>
                        </div>
                        <div class="form-group">
                            <label for="importance_of_taste" class="col-md-4 control-label"> importance of taste</label>

                            <div class="col-md-6">
                                <input id="importance_of_taste" type="text" class="form-control" name="importance_of_taste" value="{{$user->importance_of_taste}}" required>
                                

                                </div>
                        </div>
                        <div class="form-group">
                            <label for="importance_of_music" class="col-md-4 control-label"> importance of music</label>

                            <div class="col-md-6">
                                <input id="importance_of_music" type="text" class="form-control" name="importance_of_music" value="{{$user->importance_of_music}}" required>
                                

                                </div>
                        </div>
                        <div class="form-group">
                            <label for="importance_of_variety" class="col-md-4 control-label"> importance of variety</label>

                            <div class="col-md-6">
                                <input id="importance_of_variety" type="text" class="form-control" name="importance_of_variety" value="{{$user->importance_of_variety}}" required>
                                

                                </div>
                        </div>
                        <div class="form-group">
                            <label for="importance_of_decor" class="col-md-4 control-label"> importance of decor</label>

                            <div class="col-md-6">
                                <input id="importance_of_decor" type="text" class="form-control" name="importance_of_decor" value="{{$user->importance_of_decor}}" required>
                                

                                </div>
                        </div>

                      
                   
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Finish edit
                                </button>
                            </div>
                        </div>
                    </form>
                                 </div>
            </div>
        </div>
    </div>
</div>

@stop
