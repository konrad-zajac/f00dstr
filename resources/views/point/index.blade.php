@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
                                  <div class="container">

                <table class="table table-hover list-group tabela">
                    <thead>
                     
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>city</th>
                        <th>address</th>
                        <th>rate</th>
                        <th>grand total</th>
            
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($points as $point)
                       <tr class="krotka">
                            {{-- 1 --}}
                            <td>
                                {{$point->id}}
                            </td>
                            {{-- 2 --}}
                            <td>
                                {{-- <a href="{{ route('point.show', ['id' => $point->id]) }}"> --}}
                                {{-- <a href="{{ action('PointController@show',[$point->id]) }}"> --}}
                                <a href="{{ url('/point',$point->id) }}">
                                </a>
                                  {{$point->point_name}}
                            </td>
                            {{-- 3 --}}
                            <td>
                                {{$point->point_city}}
                            </td>
                            {{-- 4 --}}
                            <td>
                                {{$point->point_address}}
                            </td>


                             {{-- @ --}}
                            <td>
                                           <button type="button" class="btn btn-primary pull-left">Rate</button>
                            </td>
                             {{-- @ --}}
                            <td>
                            TO DO - GRAND TOTAL
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{--{{ $points->links() }}--}}
                {{--<h2  class="text-center"> {{$point->count()}} users total</h2>--}}
                {{--</div>--}}
            </div>
        </div>
                </div>

@stop
