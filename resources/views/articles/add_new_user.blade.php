@extends('layouts.layout')
@section('mohtava')

<div>
        <form action="/add_new_article/succesfull" method="POST" enctype="multipart/form-data" style="font-size: 16px">
            @csrf
         <center>  
		  <div>
                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : نام کاربر</label>
				<input style="width: 250px;display: block" type="text" name="name" required /> 
				 <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : ایمیل</label>
				 <input style="width: 250px;display: block" type="Email" name="Email" required /> 
				 
				
				<br>





@endsection