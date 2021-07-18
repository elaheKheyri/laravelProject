@extends('layouts.layout')
@section('mohtava')


		<center>
<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 3px;"/>

						            @auth
		                         @if (Auth::user()->role == 'admin')
					               <div>
				                  <form action="/add_new/lesson/succesfull" method="POST" onsubmit="return My_Function();" enctype="multipart/form-data">
								    @csrf
                                  <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : اسم موضوع</label>
				                    <input style="width: 250px;display: block" type="text" name="name" required /> 
									 <input class="btn btn-success" style="width: 100px;margin-top:30px;" type="submit" value="ثبت">

					</div>
					@endauth
@endif

						</div>
		      		</center>
	

                </form>
				


@endsection