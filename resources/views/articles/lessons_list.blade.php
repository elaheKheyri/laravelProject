@extends('layouts.layout')
@section('mohtava')



        @foreach ($lessons as $lesson)
			<center>
          <hr style="background-image: url(images/model2.png) ; border: 0;height: 40px; background-position:center;" />
            <div class="post-preview">
                <a href="/lessons/{{ $lesson->id }}">
				<br/>

                        <h2 style= " font-family: Bnazanin " class="post-title"> {{ $lesson->name }} </h2> </a>
  
        </div>
		
		<div>
		</center>
		            @auth
		            @if (Auth::user()->role == 'admin')
				 <form action="/delete_lesson/succesfull" method="POST" onsubmit="return My_Function();" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="custId" name="custId" value="{{ $lesson->id }}">
					<br/>
                    <label style= " font-family: Bnazanin ; color: #000000 ; font-weight: bold ">ایا میخواهید این موضوع را حذف کنید ؟</label>
					<br/>
					<input class="btn btn-success" style="width: 80px;margin-top:20px;" type="submit" value="حذف"> </input>

                    <script>
                        function My_Function() {
                            var txt;
                            var r = confirm("آیا مطمئن هستید میخواهید این موضوع حذف شود ؟");
							
							if(r==true)
							{
								return true;
							}else{
								return false;
							}
							
                        }

                    </script>
					</form>
					
					@endauth
@endif						
@endforeach
         @auth
		            @if (Auth::user()->role == 'admin')
<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 4px;"/>

							<center>
					<p dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-meta">
                        در صورت تمایل به اضافه کردن موضوع جدید
                            <a dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" href="/add_new/lesson">کلیک کنید  </a>
							</center>
										@endauth
@endif	




					
					

 @endsection
