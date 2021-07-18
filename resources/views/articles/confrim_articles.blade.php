

	
@extends('layouts.layout')
@section('mohtava')	    


		@foreach($articles as $article)
		<tr>
	<center> <td style ="border: 10px solid !important "> <a style = "color: #8B0000" href= "/articles/{{$article->id}}"> {{$article->title}} </a> <br> </br>{{$article->text}} </center>
		<br>
	</tr> <hr style="    display: block; margin-top: 0.5em; margin-bottom: 0.5em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px;">
		@endforeach
  
   

@endsection 