<?php

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/admin',['uses'=>'MainController@admin'])->name('admin');
  Route::post('store',['uses'=>'MainController@store'])->name('store');
  Route::delete('/{id}/delete',['uses'=>'MainController@delete'])->name('delete');
  Route::get('{id}/show',['uses'=>'MainController@show'])->name('show');
  Route::get('{id}/edit',['uses'=>'MainController@edit'])->name('edit');
  Route::put('{id}/update',['uses'=>'MainController@update'])->name('update');
});
Route::get('/','MainController@index' )->name('welcome');
Route::get('uploaded/{has_user}/{has_file}','MainController@upload')->name('upload');
Route::post('storeFile','MainController@storeFile')->name('storeFile');
Route::post('tests','MainController@tests');
Route::get('/create_user','CreateUsersController@createUser')->name('user.create');
Route::get('{id}/show_user','CreateUsersController@showUser')->name('user.show');
Route::get('{id}/edit_user','CreateUsersController@editUser')->name('user.edit');
Route::delete('/{id}/delete_user','CreateUsersController@deleteUser')->name('user.delete');
Route::post('/store_user','CreateUsersController@storeUser')->name('user.store');
Route::put('{id}/update_pass','CreateUsersController@updatePass')->name('update_pass');
Route::put('{id}/updateProfil','CreateUsersController@updateProfil')->name('updateProfil');
