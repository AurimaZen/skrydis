<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FlyLocationDateController;
use App\Http\Controllers\SkrydisController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

require __DIR__ . '/auth.php';
Route::get('/', [TodoController::class, 'testas']);

Route::get('/object', function () {
    return \App\Models\TodoItem::query()->first();
});
Route::get('/string', function () {
    return "TodoController labas";
});
Route::get('/array', function () {
    return ["itemas" => ["kitas" => "ats"]];
});


Route::get('/contacts', [ContactController::class, 'formView']);
Route::get('/contact/{contactMessage}', [ContactController::class, 'show'])->where('contactMessage', '[0-9]+');
Route::get('/contact/{name}', [ContactController::class, 'showByEmail'])->where('name', '[a-zA-Z]+');
Route::get('/contact/{name}/test/{test}', [ContactController::class, 'duParametrai']);


Route::get('/', [ProductController::class, 'showProduct'])->name('productForm');

Route::get('/thankyou/{product}/show', [ProductController::class, 'showThankyouStuff'])->name('thankyou');

Route::resource('/skrydis', SkrydisController::class,);

Route::get('/couponForm', [SkrydisController::class, 'registerCoupon'])->name('couponForm');

Route::resource('/flylocationdate', FlylocationDateController::class);


Route::get('/customerregistration', [SkrydisController::class, 'registrationForm'])->name('registration.form');
Route::post('/{skrydi}', [SkrydisController::class, 'skrydisUpdate'])->name('registration.update');


Route::get('/todo', [TodoController::class, 'list'])->name('todo.list');
Route::get('/todo{todoItem}/done', [TodoController::class, 'done'])->name('todo.done');
Route::get('/todo{todoItem}/edit', [TodoController::class, 'edit'])->name('todo.edit');
//Route::put('/todo/{todoItem}', [TodoController::class, 'update'])->name('todo.update');

