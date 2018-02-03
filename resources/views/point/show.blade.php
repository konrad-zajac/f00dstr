@extends('layouts.app')
@section('content')
<div class="container-fluid text-center"><h1>{{$point->point_name}}</h1></div>
        
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <table class="table table-hover">
                        <tr>
                            <td>id</td>
                            <td>{{$point->point_id}}</td>
                        </tr>
                        <tr>
                            <td>city</td>
                            <td>{{$point->point_city}}</td>
                        </tr>
                        <tr>
                            <td>address</td>
                            <td>{{$point->point_address}}</td>
                        </tr>
                        <tr>
                            <td>telephone</td>
                            <td>{{$point->point_telephone}}</td>
                        </tr>
                        <tr>
                            <td>point opening hours</td>
                            <td>{{$point->point_opening_hours}}</td>
                        </tr>
                        <tr>
                            <td>point closing hours</td>
                            <td>{{$point->point_closing_hours}}</td>
                        </tr>
                        <tr>
                            <td>total score of price</td>
                            <td>{{$point->point_price_result}}</td>
                        </tr>
                        <tr>
                            <td>total score of taste</td>
                            <td>{{$point->point_taste_result}}</td>
                        </tr>
                        <tr>
                            <td>total score of music</td>
                            <td>{{$point->point_music_result}}</td>
                        </tr>
                        <tr>
                            <td>total score of decor</td>
                            <td>{{$point->point_decor_result}}</td>
                        </tr>
                        <tr>
                            <td>total score of variety</td>
                            <td>{{$point->point_variety_result}}</td>
                        </tr>
                        <tr>
                            <td>grand total</td>
                            <td>TO DO</td>
                        </tr>

                    </table>                        
                </div>
        </div>
    </div>
            <div class="container">

                 <div class="row">
                    <div class="col-12 text-center">

                        <div class="col-2">
                            <a href="{{ route('point.edit', ['id' => $point->point_id]) }}">
                                <button type="button" class="btn btn-primary pull-left">Edit</button>
                            </a>
                        </div>

                        <div class="col-2">
                                {{ Form::open(['route' => ['point.destroy', $point->point_id], 'method' => 'delete']) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger pull-right','style' => 'inline-block','type' => 'button')) }}
                                {{ Form::close() }}
                        </div>   

                    </div>
                 </div>
            </div>

@stop
