@extends('layouts.layout')
@section('mohtava')



<center>  
                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : اعلام لیست برندگان</label>
				<br> </br>
				
				@if($post->text!= "nothing")
			    <p style = " font-family: Bnazanin ; color: #000000 " >{{$post->text}} </p>
			    @endif
						 <hr>


			  @auth
			  		@if (Auth::user()->role=='admin')
			  <form action="/edit/winers" method="POST" enctype="multipart/form-data" style="font-size: 16px">
              @csrf

                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold" > : ویرایش یا اعلام لیست برندگان</label>

			  <textarea style=" font-family: Bnazanin ; display: block;width: 500px;height: 300px;" type="text" name="text" maxlength = "10000" placeholder = "محل نوشتن متن جدید" ; dir ="rtl" ></textarea> 
			  <input class="btn btn-success" style="width: 100px;margin-top:30px;" type="submit" value="ثبت">
				<br> </br>
				@endif
				 @endauth


			</center>






@endsection