@extends('layouts.app')
@section('content')
<title>new market</title>
						<h2 class="text-center">F<span class="dwa_zera">00</span>dstr 2.0 app!</h2>

       <div class="container-fluid">
                 <div class="row w-p-section1">
                    <div class="col-12 text-center">
						  <a  class=" white-text" href="{{ url('point') }}">
						<img src="{{ asset('img/11.jpg') }}" class="img-rounded image" alt="Add point">
					</a>
					</div>
				</div>

				 <div class="row">
                    <div class="col-12 text-center w-p-section2">
						  <a  href="point/9">
						<img src="{{ asset('img/22.jpg') }}" class="img-rounded" alt="Add point">
					</a>
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
                            <a class="navbar-brand"  href="{{ url('other/about') }}">
                            About
                            </a>
                         </li>
                           <li>
                            <a class="navbar-brand"  href="{{ url('other/contact') }}">
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
