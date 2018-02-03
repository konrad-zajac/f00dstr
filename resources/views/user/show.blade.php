@extends('layouts.app')
@section('content')

 <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <table class="table table-hover">
                        <tr>
                            <td>id</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    
                        <tr>
                            <td> importance of price</td>
                            <td>{{$user->importance_of_price}}</td>
                        </tr>
                        <tr>
                            <td> importance of taste</td>
                            <td>{{$user->importance_of_taste}}</td>
                        </tr>
                        <tr>
                            <td> importance of music</td>
                            <td>{{$user->importance_of_music}}</td>
                        </tr>
                        <tr>
                            <td> importance of decor</td>
                            <td>{{$user->importance_of_decor}}</td>
                        </tr>
                        <tr>
                            <td> importance of variety</td>
                            <td>{{$user->importance_of_variety}}</td>
                        </tr>
                        <tr>
                            <td>grand total</td>
                            <td>{{ ($user->importance_of_price + $user->importance_of_taste + $user->importance_of_music + $user->importance_of_decor + $user->importance_of_variety) / 5}} </td>
                        </tr>

                    </table>
               <div class="container">

                 <div class="row">
                    <div class="col-12 text-center">

                        <div class="col-2">
                            <a href="{{ route('user.edit', ['id' => $user->id]) }}">
                                <button type="button" class="btn btn-primary pull-left">Edit</button>
                            </a>
                        </div>

                        <div class="col-2">
                                {{ Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger pull-right','style' => 'inline-block','type' => 'button')) }}
                                {{ Form::close() }}
                        </div>   

                    </div>
                 </div>
            </div>
@stop