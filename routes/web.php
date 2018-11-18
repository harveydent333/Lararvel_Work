<?php

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin',['uses'=>'mainController@admin'])->name('admin');
Route::post('store',['uses'=>'mainController@store'])->name('store');
Route::delete('/{id}/delete',['uses'=>'mainController@delete'])->name('delete');
Route::get('{id}/show',['uses'=>'mainController@show'])->name('show');
Route::get('{id}/edit',['uses'=>'mainController@edit'])->name('edit');
Route::put('{id}/update',['uses'=>'mainController@update'])->name('update');
});
Route::get('/','mainController@index' )->name('welcome');
Route::get('uploaded/{has_user}/{has_file}','mainController@upload')->name('upload');
Route::post('storeFile','mainController@storeFile')->name('storeFile');
Route::post('tests','mainController@tests');

Route::get('/create_user','createUsersController@create_user')->name('user.create');
Route::get('{id}/show_user','createUsersController@show_user')->name('user.show');
Route::get('{id}/edit_user','createUsersController@edit_user')->name('user.edit');
Route::delete('/{id}/delete_user','createUsersController@delete_user')->name('user.delete');
Route::post('/store_user','createUsersController@store_user')->name('user.store');
Route::put('{id}/update_pass','createUsersController@update_pass')->name('update_pass');
 Route::put('{id}/updateProfil','createUsersController@updateProfil')->name('updateProfil');
