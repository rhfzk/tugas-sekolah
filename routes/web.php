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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Muhammad Rhifa Zarkasih',
        'lahir'=>'Bandung, 10 Desember 2003',
        'hobi'=>'Belajar',
        'jk'=>'Laki-laki',
        'agama'=>'Islam',
        'alamat'=>'Komplek Permata Biru',
        'telp'=>'087796477699',
        'email'=>'m.rhifa@gmail.com',

    ];
    return view('biodata',$data);
});
