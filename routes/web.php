<?php

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

Route::get('/', function () {
    $persons = \App\Person::paginate(5);

    return \App\Http\Resources\PersonResource::collection($persons);
});

Route::get('{id}', function ($id) {
    $person = \App\Person::find($id);

    return \App\Http\Resources\PersonResource::make($person);
});
