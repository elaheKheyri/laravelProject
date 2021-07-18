@extends('layouts.layout')
@section('mohtava')



    @foreach ($articles->where('mode','release') as $article)

        <hr style="background-image: url(images/model2.png) ; border: 0;height: 40px; background-position:center;" />
            <div class="post-preview">
                <a href="/articles/{{ $article->id }}">
				<br>
                    <center>
                        <h2 style = "; font-weight: bold ;  font-family: Bnazanin" class="post-title"> {{ $article->title }} </h2> </a>
                  <p  style = "; font-weight: bold ;  font-family: Bnazanin" class="post-meta"> نویسنده : {{ $article->user->name }} </p>
                </center>
        </div>


    @endforeach

@endsection
