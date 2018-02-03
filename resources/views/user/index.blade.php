@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="container">
            <table class="table table-hover list-group tabela">
                <thead>
                    <tr class="krotka">
                        <th class="tc">id</th>
                        <th class="tc">name</th>
                        <th class="tc">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="krotka tc">
                        <td>
                            <a href="{{ route('user.show', $user) }}">
                                                         </a> {{$user->id}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{--{{ $users->links() }}--}} {{--
            <h2 class="text-center"> {{$user->count()}} users total</h2>--}} {{--
        </div>--}}
    </div>
</div>
</div>
@stop 
@section('footer')
<div class="footer navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div style="float: left;" class="col-6">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="{{ url('other/about') }}">
                            About
                            </a>
                        </li>
                        <li>
                            <a class="navbar-brand" href="{{ url('other/contact') }}">
                            Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6" style="float: right;">
                    <ul>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop