@extends('layouts.layout')
@section('mohtava')


    <center>
        <div>
            <a href="/articles/{{ $article->id }}">
                <h2 style=" font-family: Bnazanin ; color: #8B0000  "> {{ $article->title }} </h2>
            </a>
            <p style=" font-family: Bnazanin ; color: #000000 ">{{ $article->text }} </p>


            <img src="/img/post/{{ $article->picture }}" width="350" height="300" />

            <p style="color: #808000 ; font-size: 0.999rem; font-family: Bnazanin; "> نویسنده ی این مقاله : <a
                    style=" font-family: Bnazanin ; color: #000000" , "href=" #!"> {{ $article->user->name }} </a> </p>


        </div>

        @auth
		<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 2px;"/>
            @if (Auth::user()->role == 'admin' && $article->mode == 'waiting')
				<br/>
                <form action="/confrim_articles/succesfull" method="POST" enctype="multipart/form-data">
                    @csrf
					   <label style= " font-family: Bnazanin ; color: #000000 ; font-weight: bold "> ایا این مقاله را برای انتشار تایید میکنید ؟ </label> <br/>
                   <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold ">  تایید <input type="radio" id="تایید" name="result" value="confrim"> <br/> </label>
                   <label style= " font-family: Bnazanin ; color: #8B0000 ; font-weight: bold ">   رد <input type="radio" id="رد" name="result" value="reduse"> </td> </label>
				   <br/>
                    <input type="hidden" id="custId" name="custId" value="{{ $article->id }}">
                    <input class="btn btn-success" style="width: 80px;margin-top:20px;" type="submit" value="ثبت">
					<br/>
                </form>
            @endif


<br/>
            @if (Auth::user()->role == 'admin' || Auth::user()->id == $article->user_id)
				<br/>

<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 2px;"/>
                <form action="/confrim_articles/succesfull" method="POST" onsubmit="return My_Function();" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="custId" name="custId" value="{{ $article->id }}">
					<br/>
                    <label style= " font-family: Bnazanin ; color: #000000 ; font-weight: bold "> ایا میخواهید این مقاله را حذف کنید ؟ </label>
					<br/>
					<input class="btn btn-success" style="width: 80px;margin-top:20px;" type="submit" value="حذف"> </input>

                    <script>
                        function My_Function() {
                            var txt;
                            var r = confirm("ایا مطمئن هستید که میخواهید این مقاله پاک شود ؟ !");
							
							if(r==true)
							{
								return true;
							}else{
								return false;
							}
							
                        }

                    </script>
                </form>
            @endif
            <br> </br>
<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 3px;"/>

            <label style="color: #8B0000 ;  font-family: Bnazanin ; font-weight: bold "> درج نظر </label>
            <br> </br>
            <form method="post" action="/comment/send/{{ $article->id }}">
                @csrf
                  <br> متن نظر <textarea
                    style="display: block;width: 500px;height: 300px;" type="text" name="text" maxlength="10000"></textarea>
                <input class="btn btn-success" style="width: 100px;margin-top:30px;" type="submit" value="ثبت">
            </form>
        @endauth

    </center>

<br/>

<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 4px;"/>

    <?php $comments = $article->comments; ?>
    <center>
        <label style="color: #8B0000 ; font-weight: bold ;  font-family: Bnazanin"> نظرات </label>      
     </center> 
<div>	 
        @foreach ($comments as $comment)
        <p dir="rtl" , align="right" ; style="color: #006400 ; font-weight: bold ;  font-family: Bnazanin "> &nbsp; &nbsp;
            {{ $comment->name }} گفته : </p>
        <p dir="rtl" , align="right" ; style="color: #006400 ; font-weight: bold ;  font-family: Bnazanin">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $comment->text }} </p>
<hr style= " display: block; margin-top: 0.5em; margin-bottom: 0.5em;margin-left: auto; margin-right: auto; border-style: inset;border-width: 2px;"/>
</div>

        @endforeach

        </body>

    @endsection
