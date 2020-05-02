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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas/', function () {
    // get data from db

    $pizzas  = [
        ['type' => 'Ghanaian', 'base' => 'Cheese', 'price' => 16],
        ['type' => 'Nigerian', 'base' => 'Mushroom', 'price' => 26],
        ['type' => 'Chinese', 'base' => 'Frog', 'price' => 10]
    ];

    return view(
        'pizzas',
        [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
        ]);
});

Route::get('/pizzas/{id}', function ($id) {
//    make a database query based on the id
    return view('details', ['id' => $id]);
});
