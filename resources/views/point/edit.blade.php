@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-plus" ></span>edit point ,,{{$point->point_name}}"</div>

                <div class="panel-body">
                    {{-- <form class="form-horizontal" method="POST" action="{{ route('point.store') }}">
                        {{ csrf_field() }} --}}
                            {!! Form::model($point,['method' => 'PATCH','action' => ['PointController@update', $point->id]]) !!}

                            <!-- point_name form input-->

                            <div class=form-group>
                            {!! form::label('point_name','Point name:') !!}
                            {!! form::text('point_name',null,['class' => 'form-control']) !!}
                            </div>

                            <!-- point_city form input-->

                            <div class=form-group>
                            {!! form::label('point_city','Point city:') !!}
                            {!! form::text('point_city',null,['class' => 'form-control']) !!}
                            </div>

                            <!-- point_address form input-->

                            <div class=form-group>
                            {!! form::label('point_address','Point address:') !!}
                            {!! form::text('point_address',null,['class' => 'form-control']) !!}
                            </div>
                            <!-- point_telephone form input-->

                            <div class=form-group>
                            {!! form::label('point_telephone','Point telephone:') !!}
                            {!! form::text('point_telephone',null,['class' => 'form-control']) !!}
                            </div>
                            <!-- point_opening_hours form input-->

                            <div class=form-group>
                            {!! form::label('point_opening_hours','Point opening hours:') !!}
                            {!! form::text('point_opening_hours',null,['class' => 'form-control']) !!}
                            </div>
                            <!-- point_closing_hours form input-->

                            <div class=form-group>
                            {!! form::label('point_closing_hours','Point closing hours:') !!}
                            {!! form::text('point_closing_hours',null,['class' => 'form-control']) !!}
                            </div>

                        {!! Form::submit('ok', ['class' => 'btn-primary form-control' ]) !!} 
                        {!! Form::close() !!}  
                        {{-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Finish edit
                                </button>
                            </div>
                        </div>
                    </form> --}}
                                 </div>
            </div>
        </div>
    </div>
</div>

@stop
