<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Phim;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/
Route::get('movie','Phim_FE@filmKind');
Route::get('single-movie/{movieId}', 'Phim_FE@chitietphim'); 
Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('/phim', 'Controller_Phim');
    Route::resource('/theloai', 'Controller_theloai'); 
    Route::resource('/comment', 'CommentController'); 
    Route::get('/contacts', 'ContactFormController@index')->name('contacts.index'); 
    Route::resource('/combo', 'ComboController'); 
    Route::resource('/book_combo', 'Book_ComboController'); 
    Route::resource('/theater', 'TheaterController'); 
    Route::resource('/room', 'RoomController'); 
    Route::resource('/contact_Ad', 'Contact_AdController'); 
  

    }); 
   
  
    Route::get('/admin',function () {
        return view('admin.layout.index');
    });
    Route::get('/',function () {
        return view('front_end.page.home');
    });
    Route::get('/movie',function () {
        return view('front_end.page.movie');
    });
    
    Route::get('/news',function () {
        return view('front_end.page.news');
    });
    Route::get('/news-single',function () {
        return view('front_end.page.news-single');
    });
    Route::get('/single-movie',function () {
        return view('front_end.page.single-movie');
    });
    
    Route::get('/ticket-cinema',function () {
        return view('front_end.page.ticket-cinema');
    });
    Route::get('/tick-box',function () {
        return view('front_end.page.tick-box');
    });
    Route::post('comment/{movieId}', 'Phim_FE@comment');
    // admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('phimtheotheloai/{movieId}', 'Phim_FE@phimtheotheloai');
Route::get('/search','Phim_FE@search');
Route::get('/contacts', function(){
    return view('front_end.page.contact');
});
route::post("/contacts","GuimailController@store");
Route::post('/gui','GuimailController@guimaillienhe');

// quản lsi danh mục tin tức
Route::get('/add-category-new','CategoryNew@add_category_new');
Route::get('/all-category-new','CategoryNew@all_category_new');
Route::get('/edit-category-new/{category_id}','CategoryNew@edit_category_new');
Route::get('/delete-category-new','CategoryNew@all_category_new');
Route::post('/update-category-new/{category_id}','CategoryNew@update_category_new');
Route::post('/save-category-new','CategoryNew@save_category_new');
Route::get('/delete-category-new/{category_id}','CategoryNew@delete_category_new');
Route::get('/dashboard','DashboardController@index');
// quản lí tin tức
Route::get('/add-new','NewController@add_new');
Route::get('/all-new','NewController@all_new');
Route::get('/delete-new/{new_id}','NewController@delete_new');
Route::get('/edit-new/{new_id}','NewController@edit_new');
Route::post('/save-new','NewController@save_new');
Route::post('/update-new/{new_id}','NewController@update_new');

// hiển thị tin tức
Route::get('news-single/{new_id}', 'NewController@news_single'); 
// Route::post('comment/{new_id}', 'NewController@comment');

//Banner
Route::get('/manage-banner', 'BannerController@manage_banner'); 
Route::get('/add-banner', 'BannerController@add_banner'); 
Route::post('/save-banner','BannerController@save_banner');
Route::get('/delete-banner/{banner_id}','BannerController@delete_banner');
Route::get('/edit-banner/{banner_id}','BannerController@edit_banner');
Route::post('/update-banner/{banner_id}','BannerController@update_banner');

//User
Route::get('/manage-user', 'UserController@manage_user'); 
Route::get('/delete-user/{id}','UserController@delete_user');






