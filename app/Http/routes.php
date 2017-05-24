<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use EloquentORM\User;

Route::get('/create', function () {
    $user = User::create([
    	'name' => 'Noelia Silva',
    	'email' => 'noesilva7@ghotmail.com',
    	'password' => bcrypt('noesilva'),
    	'gender' => 'm',
    	'biography' => 'Consultora autodidacta'
    ]);

    return 'Usuario guardado';
});

Route::get('/update-user', function () {
    $user = User::find(3);
    $user->gender = 'f';
    $user->biography = 'Consultora autodidacta';
    $user->save();

    return 'Usuario actualizado';
});
