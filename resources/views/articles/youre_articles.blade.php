

@extends('layouts.layout')
@section('mohtava')



		@foreach($articles as $article)

                    <hr class="my-4" />
   
                    <div>
                    <center>  <a style = "color: #8B0000 ; font-size: 0.999rem; font-family: Bnazanin " href="/articles/{{$article->id}}"> <h2 >  {{$article->title}} </h2> </a>
                        <p>{{$article->text}} </p> 
						
							<label style= "color: #808000 ; font-size: 1rem; font-family: Bnazanin; ">  :وضعیت مقاله  </label>	
							
						@if ($article->mode =='waiting')
					       <h4> در انتظار تایید </h4>
			
					   @else
						     <h4> منتشر شده </h4>
						@endif
						</center>
						<br>

			
                    </div>
		

				@endforeach

@endsection
