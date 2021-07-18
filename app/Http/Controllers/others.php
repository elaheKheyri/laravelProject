<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\post ;

class others extends Controller
{
		
		
		public function personal_page()
	    {
	     return view('others.personal_page') ;
		}



        public function about_us()
		{
			$post = post::where('title','about') ->first();
			return view('others.about_us' , ['post'=>$post] ) ;
		}
		
		public function edit_about_us(Request $request)
		{
	    $post = post::where('title','about') ->first();
		post::where('title','about')->delete() ;
		post::create(['text'=>$request->text,'title'=>'about']); 
        return back() ;
			
		}
		
		public function contact()
		{
		   $post = post::where('title','contact') ->first();
		   return view('others.contact' , ['post'=>$post] ) ;
		}
		
		public function edit_contact(Request $request)
		{
		post::where('title','contact')->delete() ;
		post::create(['text'=>$request->text,'title'=>'contact']); 
        return back() ;

		}
		
		
		public function winers()
		{
		   $post = post::where('title','winers') ->first();
		   return view('others.winers' , ['post'=>$post] ) ;
		}
		
		
		public function  edit_winers(Request $request)
		{
		post::where('title','winers')->delete() ;
		post::create(['text'=>$request->text,'title'=>'winers']); 
        return back() ;
		}
		
	  public function notife()
	    {
		   $post = post::where('title','notife') ->first();
		   return view('others.notife' , ['post'=>$post] ) ;
	     }
	  
	  public function  edit_notife(Request $request)
		{
		post::where('title','notife')->delete() ;
		post::create(['text'=>$request->text,'title'=>'notife']); 
        return back() ;
		}

}
