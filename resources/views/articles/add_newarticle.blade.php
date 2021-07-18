@extends('layouts.layout')
@section('mohtava')
    <div>
        <form action="/articles/succesfull" method="POST" enctype="multipart/form-data" style="font-size: 16px">
            @csrf
         <center>  
		  <div>
                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold "> : عنوان مقاله</label>
				<br>
            <center>    <input style="width: 250px;display: block" type="text" name="title" required /> 
			</center>
           </div> <br> </br>
		   
            <div>
             <label style= " font-family: Bnazanin ; color: #8B0000 ;font-weight: bold" > :تصویر مقاله</label> <br> <center> <input style="width: 200px;display: block"type="file" name="picture" /> </center>
            </div> <br>
			
			<label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold " > :دسته بندی مطلب</label> <br>
			
              @foreach ($lessons as $lesson)
            <label style= " font-family: Bnazanin ; color: #006400 ; font-weight: bold " >  {{$lesson->name}}  </label> <input type="radio" id="lesson" name="lesson" value="{{$lesson->id}}" required/> <br>
                @endforeach

<br> </br>

            <div>
                <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold" > :محل تایپ مقاله</label>
       <center>         <textarea style=" font-family: Bnazanin ; display: block;width: 1000px;height: 600px;" type="text" name="text" maxlength = "10000" required placeholder = "محل نوشتن مقاله" ; dir ="rtl" ></textarea> </center>
            </div>
            <div>
				
                <input class="btn btn-success" style="width: 100px;margin-top:30px;" type="submit" value="ثبت">
				<br> </br>
            </div>
        </form>
    </div> </center>
@endsection
