@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-plus" ></span>Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="importance_of_price" class="col-md-4 control-label">importance of price</label>

                            <div class="col-md-6">

                                <input
                                        name="importance_of_price" type="range" min="1" max="6" step="1" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="importance_of_taste" class="col-md-4 control-label">importance of taste</label>

                            <div class="col-md-6">

                                <input
                                        name="importance_of_taste" type="range" min="1" max="6" step="1" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="importance_of_music" class="col-md-4 control-label">importance of music</label>

                            <div class="col-md-6">

                                <input
                                        name="importance_of_music" type="range" min="1" max="6" step="1" >
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="importance_of_decor" class="col-md-4 control-label">importance of decor</label>

                            <div class="col-md-6">

                                <input
                                        name="importance_of_decor" type="range" min="1" max="6" step="1" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="importance_of_variety" class="col-md-4 control-label">importance of variety</label>

                            <div class="col-md-6">

                                <input
                                        name="importance_of_variety" type="range" min="1" max="6" step="1" >
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
@endsection
