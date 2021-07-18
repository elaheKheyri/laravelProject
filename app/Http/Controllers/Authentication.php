<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user ;
use Illuminate\Support\Facades\Hash;
class Authentication extends Controller
{
 public function add_new_user()
 {
	return view('Authentication.add_new_user');
 }


 public function add_new_user_succesfull(Request $request)
 {

if($request->password != $request->password2)
{
	$result = " !یه مشکلی وجود داره " ;
	 return view('articles.recieve_new_article' , ['result'=>$result]);
}

user::create(['name' => $request->name,'email' => $request->Email,'password' => Hash::make($request->password), 'role'=>$request->option]);
$result = " !کاربر مورد نظر شما با موفقیت ثبت شد" ;
  return view('articles.recieve_new_article' , ['result'=>$result]);

 }



}
