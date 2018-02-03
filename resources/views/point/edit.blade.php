@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-plus" ></span>edit point ,,{{$point->point_name}}"</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('point.store') }}">
                        {{ csrf_field() }}

                        {{-- 1 --}}
                        <div class="form-group">
                            <label for="point_name" class="col-md-4 control-label"> Name</label>

                            <div class="col-md-6">
                                <input id="point_name" type="text" class="form-control" name="point_name" value="{{$point->point_name}}" required>

                                </div>
                        </div>
                        {{-- 2 --}}
                        <div class="form-group">
                            <label for="point_city" class="col-md-4 control-label"> city</label>

                            <div class="col-md-6">
                                <input id="point_city" type="text" class="form-control" name="point_city" value="{{$point->point_city}}" required>
                                

                                </div>
                        </div>
                        {{-- 3 --}}
                        <div class="form-group">
                            <label for="point_address" class="col-md-4 control-label"> address</label>

                            <div class="col-md-6">
                                <input id="point_address" type="text" class="form-control" name="point_address" value="{{$point->point_address}}" required>

                                </div>
                        </div>
                        {{-- 4 --}}
                        <div class="form-group">
                            <label for="point_telephone" class="col-md-4 control-label"> telephone</label>

                            <div class="col-md-6">
                                <input id="point_telephone" type="text" class="form-control" name="point_telephone" value="{{$point->point_telephone}}" required>

                                </div>
                        </div>
                        {{-- 5 --}}
                        <div class="form-group">
                            <label for="point_opening_hours" class="col-md-4 control-label"> opening_hours</label>

                            <div class="col-md-6">
                                <input id="point_opening_hours" type="text" class="form-control" name="point_opening_hours" value="{{$point->point_opening_hours}}" required>

                                </div>
                        </div>
                        {{-- 6 --}}
                        <div class="form-group">
                            <label for="point_closing_hours" class="col-md-4 control-label"> closing_hours</label>

                            <div class="col-md-6">
                                <input id="point_closing_hours" type="text" class="form-control" name="point_closing_hours" value="{{$point->point_closing_hours}}" required>

                                </div>
                        </div>
                        {{-- 7 --}}
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
