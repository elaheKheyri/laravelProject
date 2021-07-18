@extends('layouts.layout')
@section('mohtava')

<div>
        <form action="/add_new_user/succesfull" method="POST" enctype="multipart/form-data" style="font-size: 16px">
            @csrf
         <center>  
		  <div>
                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : نام کاربر</label>
				<input style="width: 250px;display: block" type="text" name="name" required /> 
				
				 <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : ایمیل</label>
				 <input style="width: 250px;display: block" type="Email" name="Email" required />
				 
				  <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : گذرواژه</label>
				<input style="width: 250px;display: block" type="password" name="password" required /> 
				 
				  <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> :تکرار گذرواژه</label>
				<input style="width: 250px;display: block" type="password" name="password2" required />
			
				<label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> :نقش </label> 
				<br> </br>
					
				<label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold ">معلم </label> 
	            <input type="radio" id="role" name="option" value="admin"/> 
					 &nbsp; &nbsp;
				<label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold ">دانش اموز </label> 
				<input type="radio" id="role" name="option" value="user"/> <br>
				
				
                <input class="btn btn-success" style="width: 100px;margin-top:30px;" type="submit" value="ثبت"/>
				<br> </br>
            </div>
        </form>
				
				
				<br>





@endsection