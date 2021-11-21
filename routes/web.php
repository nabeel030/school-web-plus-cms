<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','BlogViewController@home_page')->name('index');

Auth::routes();


Route::get('/migrate', function () {
   \Illuminate\Support\Facades\Artisan::call('migrate');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/site-settings','SettingController@edit')->name('setting');
  Route::post('/update-settings/{id}','SettingController@update')->name('update.setting');
  Route::resource('/slider','SliderController');
  Route::get('/slider/delete/{id}','SliderController@delete')->name('slider.delete');
  Route::get('/slider/edit-image/{id}', 'SliderController@edit')->name('slider.edit');
  Route::post('/slider/update-image/{id}', 'SliderController@update')->name('slider.update');
  Route::resource('/services','ServiceController');
  Route::get('/services/delete/{id}', 'ServiceController@delete')->name('services.delete');
  Route::get('/services/edit/{id}', 'ServiceController@edit')->name('edit.service');
  Route::post('/services/update/{id}', 'ServiceController@modify')->name('update.service');
  Route::get('/about/edit', 'AboutController@edit')->name('about.edit');
  Route::post('/about/update/{id}', 'AboutController@update')->name('about.update');
  Route::get('/teachers','TeacherController@index')->name('teacher.index');
  Route::get('/teachers/new-teacher','TeacherController@create')->name('teacher.create');
  Route::post('/teachers/new-teacher/adding','TeacherController@store')->name('teacher.store');
  Route::get('/teacher/edit/{id}', 'TeacherController@edit')->name('teacher.edit');
  Route::get('/teacher/delete/{id}', 'TeacherController@delete')->name('teacher.delete');
  Route::post('/teacher/update/{id}', 'TeacherController@update')->name('teacher.update');
  Route::get('/parents-review/index', 'ParentController@index')->name('parent.index');
  Route::get('/parents/new-review', 'ParentController@create')->name('parent.create');
  Route::post('/parents/save-review', 'ParentController@store')->name('parent.store');
  Route::get('/parents/edit-review/{id}', 'ParentController@edit')->name('parent.edit');
  Route::post('/parents/update-review/{id}', 'ParentController@update')->name('parent.update');
  Route::get('/parents/delete-review/{id}', 'ParentController@delete')->name('parent.delete');
  Route::get('/gallery/images', 'GalleryController@index')->name('gallery.index');
  Route::get('/gallery/new-image', 'GalleryController@create')->name('gallery.create');
  Route::post('/gallery/image-store', 'GalleryController@store')->name('gallery.store');
  Route::get('/galler/image/delete/{id}','GalleryController@delete')->name('gallery.delete');
  Route::get('/classes/index', 'CourseController@index')->name('course.index');
  Route::get('/classes/create-new-class', 'CourseController@create')->name('course.create');
  Route::post('/classes/store', 'CourseController@store')->name('course.store');
  Route::get('/classes/edit-class/{id}', 'CourseController@edit')->name('course.edit');
  Route::post('/classes/update-class/{id}', 'CourseController@update')->name('course.update');
  Route::get('/classes/delete-class/{id}', 'CourseController@delete')->name('course.delete');

  Route::get('/blog/category/index', 'CategoryController@index')->name('category.index');
  Route::get('/blog/category/create', 'CategoryController@create')->name('category.create');
  Route::post('/blog/category/store', 'CategoryController@store')->name('category.store');
  Route::get('/blog/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
  Route::post('/blog/category/update/{id}', 'CategoryController@update')->name('category.update');
  Route::get('/blog/category/delete/{id}', 'CategoryController@delete')->name('category.delete');

  Route::get('/blog/post/index', 'PostController@index')->name('post.index');
  Route::get('/blog/post/create', 'PostController@create')->name('post.create');
  Route::post('/blog/post/store', 'PostController@store')->name('post.store');
  Route::get('/blog/post/edit/{id}', 'PostController@edit')->name('post.edit');
  Route::post('/blog/post/update/{id}', 'PostController@update')->name('post.update');
  Route::get('/blog/post/delete/{id}', 'PostController@delete')->name('post.delete');

  Route::get('/blog/tag/index', 'TagController@index')->name('tag.index');
  Route::get('/blog/tag/create', 'TagController@create')->name('tag.create');
  Route::post('/blog/tag/store', 'TagController@store')->name('tag.store');
  Route::get('/blog/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
  Route::post('/blog/tag/update/{id}', 'TagController@update')->name('tag.update');
  Route::get('/blog/tag/delete/{id}', 'TagController@delete')->name('tag.delete');

  Route::get('/brochure/create','BrochureController@create')->name('brochure.create');
  Route::post('/brochure/store', 'BrochureController@store')->name('brochure.store');
  Route::get('/brochure/index', 'BrochureController@index')->name('brochure.index');
  Route::get('/brochure/activate/{id}','BrochureController@switchActivation')->name('brochure.enable');
  Route::get('/brochure/deactivate/{id}','BrochureController@deactivate')->name('brochure.disable');
  Route::get('/brochure/delete/{id}', 'BrochureController@delete')->name('brochure.delete');

  Route::get('/news/create', 'NewsController@create')->name('news.create');
  Route::post('/news/store', 'NewsController@store')->name('news.store');
  Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
  Route::post('/news/update/{id}', 'NewsController@update')->name('news.update');
  Route::get('/news/delete/{id}', 'NewsController@delete')->name('news.delete');
  Route::get('/news', 'NewsController@index')->name('news.index');

});


Route::get('/about','BlogViewController@about')->name('about');
Route::get('/certified-teachers','BlogViewController@certified_teachers')->name('teachers');
Route::get('/blog', 'BlogViewController@posts')->name('blog');
Route::get('/contact','BlogViewController@contact')->name('contact');
Route::post('/contact-form/store', 'ContactFormController@store')->name('contact.form');
Route::get('/gallery','BlogViewController@gallery')->name('gallery');
Route::get('/classes','BlogViewController@classes')->name('classes');
Route::get('/blog/category/{name?}/post/{slug}', 'BlogViewController@singlePost')->name('single.post');
Route::get('/blog/category-id/{id}/{name}/posts', 'BlogViewController@categoryPage')->name('category.page');
Route::get('/blog/tag-id/{id}/{name?}/posts', 'BlogViewController@tagPage')->name('tag.page');
Route::get('/career','BlogViewController@career')->name('career');
Route::post('/career/store/cv', 'CareerController@store')->name('career.cv');
