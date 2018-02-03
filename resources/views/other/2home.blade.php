@extends('layouts.app')
@section('content')
<title>new market</title>
       <div class="container-fluid">
                 <div class="row">
                    <div class="col-12 text-center">
						<h2 class="text-center">F<span class="dwa_zera">00</span>dstr 2.0 app!</h2>
						<table  class="text-center">
							<thead>
								<tr>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="{{ asset('img/11.jpg') }}" class="img-rounded wp-img1" alt="Add point"></td>
								</tr>
								<tr>
									<td><img src="{{ asset('img/22.jpg') }}" class="img-rounded wp-img1 " alt="Add point"></td>
								</tr>

							</tbody>
						</table>
												  <a  class="brows-btn white-text" href="{{ url('point') }}">

						<img src="{{ asset('img/tomato.jpg') }}" class="img-rounded w-p-img1" alt="Add point">

						<button class="btn btn-primary  brows-btn">                              
						Index
					</button>
					</a>
				</div>
			</div>

			<div  class="container-fluid">
                 <div class="row">
                    <div class="col-12 text-center">
						<img src="{{ asset('img/1.jpg') }}" class="img-rounded  w-p-img2" alt="Add point">

						<a  class="add-btn " href="{{ url('point') }}">
						<button class="btn btn-primary  brows-btn">                              
						Index
					</button>
					</a>

					</div>
				</div>
			</div>

		
	
</div>


  







    @stop