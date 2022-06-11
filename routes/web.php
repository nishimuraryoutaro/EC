<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestControllet;
use App\Http\Controllers\LifeCycleTestControllet;
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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user,dashboard');
})->middleware(['auth:users'])->name('dashboard');


Route::get('/component-test1', [ComponentTestControllet::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTestControllet::class, 'showComponent2']);
Route::get('/servicecontainertest', [LifeCycleTestControllet::class, 'showServiceContainertest']);

require __DIR__.'/auth.php';
