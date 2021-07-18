<?php


use Illuminate\Support\Facades\Route;

Route::get('/search','articles@search')->name('search');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





Route::get('/lastarticles', 'articles@get_lastarticles');
Route::get('/dashboard/newarticle','articles@add_newarticle')->middleware('auth');
Route::post('/articles/succesfull','articles@recieve_new_article');


Route::get('/lessons','articles@lessons_list');
Route::get('/lessons/{id}','articles@articles_lesson');
Route::post('/delete_lesson/succesfull' ,'articles@delete_lesson_succesfull')->middleware(['auth','admin']);
Route::get('/add_new/lesson' ,'articles@add_newlesson')->middleware(['auth','admin']);
Route::post('/add_new/lesson/succesfull' ,'articles@add_newlesson_succesfull')->middleware(['auth','admin']);


Route::get('/articles/{id}','articles@get_article');
Route::get('/dashboard/confrimarticles','articles@confrim_articles')->middleware(['auth','admin']);
Route::post('/confrim_articles/succesfull' , 'articles@confrim_articles_succesfull')->middleware(['auth','admin']); 
Route::get('/dashboard/yourearticles/{id}','articles@youres_articles')->middleware('auth');
Route::post('/comment/send/{id}' ,'articles@send_comment')->middleware('auth');

Route::get('/get_bestarticles' , 'articles@get_bestarticles') ;

Route::get('/add_new_user', 'Authentication@add_new_user')->middleware(['auth','admin']);
Route::post('/add_new_user/succesfull','Authentication@add_new_user_succesfull')->middleware(['auth','admin']);



Route::get('/edit_personalpage', 'others@personal_page')->middleware(['auth','admin']);

Route::get('/about_us', 'others@about_us');
Route::post('/edit/about_us' ,'others@edit_about_us')->middleware(['auth','admin']);

Route::get('/contact', 'others@contact');
Route::post('/edit/contact','others@edit_contact')->middleware(['auth','admin']);

Route::get('/winers', 'others@winers');
Route::post('/edit/winers','others@edit_winers')->middleware(['auth','admin']);

Route::get('/notife', 'others@notife');
Route::post('/edit/notife','others@edit_notife')->middleware(['auth','admin']);



require __DIR__.'/auth.php';