@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Rate</div>
                        <div class="panel-body">
                            {!! Form::open(['url' => 'rating/store']) !!}

                            <!-- Name form input-->
                            
                            <div class='form-group'>
                            {!! form::label('Name','Name') !!}
                            {!! form::text('Name',null,['class' => 'form-control']) !!}
                            </div>

                            <!-- Rating of taste form radiobutton-->
                            
                            <div class='form-group'>
								{!! form::label('Rating of taste','Rating of taste') !!}
								{!! form::radio('Rating of taste',1,['class' => 'form-control']) !!}
								{!! form::radio('Rating of taste',2,['class' => 'form-control']) !!}
								{!! form::radio('Rating of taste',3,['class' => 'form-control']) !!}
								{!! form::radio('Rating of taste',4,['class' => 'form-control']) !!}
								{!! form::radio('Rating of taste',5,['class' => 'form-control']) !!}
								{!! form::radio('Rating of taste',6,['class' => 'form-control']) !!}
                            </div>
                            <!-- Rating of price form radiobutton-->
                            
                            <div class='form-group'>
								{!! form::label('Rating of price','Rating of price') !!}
								{!! form::radio('Rating of price',1,['class' => 'form-control']) !!}
								{!! form::radio('Rating of price',2,['class' => 'form-control']) !!}
								{!! form::radio('Rating of price',3,['class' => 'form-control']) !!}
								{!! form::radio('Rating of price',4,['class' => 'form-control']) !!}
								{!! form::radio('Rating of price',5,['class' => 'form-control']) !!}
								{!! form::radio('Rating of price',6,['class' => 'form-control']) !!}
                            </div>
                            
                            <!-- Rating of music form radiobutton-->
                            
                            <div class='form-group'>
								{!! form::label('Rating of music','Rating of music') !!}
								{!! form::radio('Rating of music',1,['class' => 'form-control']) !!}
								{!! form::radio('Rating of music',2,['class' => 'form-control']) !!}
								{!! form::radio('Rating of music',3,['class' => 'form-control']) !!}
								{!! form::radio('Rating of music',4,['class' => 'form-control']) !!}
								{!! form::radio('Rating of music',5,['class' => 'form-control']) !!}
								{!! form::radio('Rating of music',6,['class' => 'form-control']) !!}
                            </div>
                            
                            <!-- Rating of decor form radiobutton-->
                            
                            <div class='form-group'>
								{!! form::label('Rating of decor','Rating of decor') !!}
								{!! form::radio('Rating of decor',1,['class' => 'form-control']) !!}
								{!! form::radio('Rating of decor',2,['class' => 'form-control']) !!}
								{!! form::radio('Rating of decor',3,['class' => 'form-control']) !!}
								{!! form::radio('Rating of decor',4,['class' => 'form-control']) !!}
								{!! form::radio('Rating of decor',5,['class' => 'form-control']) !!}
								{!! form::radio('Rating of decor',6,['class' => 'form-control']) !!}
                            </div>
                            
                            <!-- Rating of variety form radiobutton-->
                            
                            <div class='form-group'>
								{!! form::label('Rating of variety','Rating of variety') !!}
								{!! form::radio('Rating of variety',1,['class' => 'form-control']) !!}
								{!! form::radio('Rating of variety',2,['class' => 'form-control']) !!}
								{!! form::radio('Rating of variety',3,['class' => 'form-control']) !!}
								{!! form::radio('Rating of variety',4,['class' => 'form-control']) !!}
								{!! form::radio('Rating of variety',5,['class' => 'form-control']) !!}
								{!! form::radio('Rating of variety',6,['class' => 'form-control']) !!}
                            </div>
                            
                            
                            {!! Form::submit('send', ['class' => 'btn-primary form-control' ]) !!}
                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Rate a point </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('point.store') }}">
                                {{ csrf_field() }}

                                {{-- 1 --}}
                                <div class="form-group">
                                    <label for="point_name" class="col-md-4 control-label"> Name of the point to rate</label>

                                    <div class="col-md-6">
                                        <div name="point_to_rate_name" class="dropdown">
                                            <button class="form-control btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  required>Select point
                                                <span class="caret">
                                                <ul class="dropdown-menu">
                                                @foreach($points as $point)
                                                <li>
                                                    <a href="" value="point_to_rate_name" class="text-center">{{$point->point_name}}</a>
                                                </li>
                                                @endforeach
                                            </ul></span></button>
                                    
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rating_of_price" class="col-md-4 control-label">rating of price</label>

                                    <div class="col-md-6">

                                        <input
                                                name="rating_of_price" type="range" min="1" max="6" step="1" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rating_of_taste" class="col-md-4 control-label">rating of taste</label>

                                    <div class="col-md-6">

                                        <input
                                                name="rating_of_taste" type="range" min="1" max="6" step="1" >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="rating_of_music" class="col-md-4 control-label">rating of music</label>

                                    <div class="col-md-6">

                                        <input
                                                name="rating_of_music" type="range" min="1" max="6" step="1" >
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="rating_of_decor" class="col-md-4 control-label">rating of decor</label>

                                    <div class="col-md-6">

                                        <input
                                                name="rating_of_decor" type="range" min="1" max="6" step="1" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rating_of_variety" class="col-md-4 control-label">rating of variety</label>

                                    <div class="col-md-6">

                                        <input
                                                name="rating_of_variety" type="range" min="1" max="6" step="1" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
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


