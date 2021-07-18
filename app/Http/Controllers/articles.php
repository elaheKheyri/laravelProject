<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article ;
use App\Models\lesson ;
use App\Models\user ;
use App\Models\comment ;
use Illuminate\support\facades\Auth ;
use Illuminate\View\ViewName;

class articles extends Controller
{

		public function search(Request $request){
			$searchData= $request->data;
			$articles=article::where('title','like','%'.$searchData.'%')->get();
			return view('articles.lastarticles' ,['articles'=>$articles]);
		}

        public function get_lastarticles()
		
		{
			$articless = article::all() ;
		    return view('articles.lastarticles' ,['articles'=>$articless]) ;	
		}

		
        public function get_article($id)
		{
			$article= article::find($id) ;
			$temp = $article->view_counter ;
		    article::find($id)-> update (['view_counter'=>$temp+ 1 ]) ;
			return view('articles.get_1article' , ['article'=>$article]) ;
		}
		


        public function add_newarticle()
		
		{
			$lessons = lesson::all() ;
			
			return view('articles.add_newarticle' , ['lessons'=>$lessons]);
		}
		
	    public function recieve_new_article(Request $request)
		
		{
		$request-> validate
		([
		'title'=>'required | string ' ,
		'text'=> 'required | string ']) ;
	    $image = $request->file('picture');
        $url = $image->getClientOriginalName();
        $url = strtotime(date('Y-m-d-H:isa')) . $url;
        $image->move('img/post/', $url);
		$user_id = Auth::user()->id ;
		article::create(['text'=>$request->text,'title'=>$request->title ,'picture'=>$url,'lesson_id'=>$request->lesson,'user_id'=>$user_id] ); 
		$resultt = " مقاله شما ثبت و پس از تایید مدیر نمایش داده خواهد شد " ;
        return view('articles.recieve_new_article' , ['result'=>$resultt]);
		}



		public function confrim_articles()
		{
		$articles = article::where('mode','waiting') ->get();
		return view('articles.confrim_articles' , ['articles'=>$articles]);
		}
		
		
	    public function confrim_articles_succesfull(Request $request)
		{
		$result = $request->result ; 
        $custId = $request->custId;
		$article= article::find($custId) ;
		if($result=="confrim")
			article:: where('id',$custId)-> update (['mode'=>'release']) ;
		else
		{
			comment::where('article_id',$custId)->delete();
			article :: where('id',$custId)->delete();
		}
			
        $resultt = " بروزرسانی انجام شد " ;
		 return view('articles.recieve_new_article' , ['result'=>$resultt]);

		}
		
		 public function youres_articles($id)
			 {
				 $articles = article:: where('user_id',$id)->get() ;
				 return  view('articles.youre_articles' , ['articles'=>$articles]);
			 }


  public function send_comment(Request $request , $id)
  {
	 $name= Auth::user()->name ;

   comment::create(['text'=>$request->text,'name'=>$name ,'article_id'=>$id] ); 
   $article= article::find($id) ;
	      return back() ;

  }
  

  public function get_bestarticles()
  {
    $articles = article::where('mode','release')->orderBy('view_counter', 'DESC')->take(5)->get();
	return view('articles.lastarticles' ,['articles'=>$articles]);
  }
  
  
  		public function lessons_list()
		{
			$lessons = lesson::all() ;
			return view('articles.lessons_list' , ['lessons'=>$lessons]);
		}
		
		
		
 public function  articles_lesson($id)
 {
	 $articles = lesson::find($id)->articles->where('mode','release') ;
	 return view('articles.lastarticles' ,['articles'=>$articles]) ;
 }
 

public function delete_lesson_succesfull(Request $request)
{ 
	$custId = $request->custId;
	foreach(article::where('lesson_id',$custId)->get() as $article)
	{
		comment::where('article_id',$article->id)->delete();
		$article->delete();
	}
	lesson::where('id',$custId)->delete();
		        $resultt = " بروزرسانی انجام شد " ;
		 return view('articles.recieve_new_article' , ['result'=>$resultt]);
}


public function add_newlesson()
{
	return view('articles.add_new_lesson');
}


public function add_newlesson_succesfull(Request $request)
{
	lesson::create(['name'=>$request->name] ); 
	        $resultt = " بروزرسانی انجام شد " ;
		 return view('articles.recieve_new_article' , ['result'=>$resultt]);
}



}
