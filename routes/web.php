<?php
Route::get('/', 'SifreController@show');
Route::get('/administrator/login','Auth\AdministratorController@checkAuthAdministrator')->name('login');