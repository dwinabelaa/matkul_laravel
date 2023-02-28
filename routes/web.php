<?php

use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;
use \App\Models\Matkul;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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

Route::get('/', [MatkulController::class, 'home']);

Route::get('/create', [MatkulController::class, 'create']);

Route::post('/create', [MatkulController::class, 'post_create']);

Route::get('/edit/{id}', [MatkulController::class, 'edit_slug']);

Route::put('/edit', [MatkulController::class, 'edit']);

Route::delete('/delete', [MatkulController::class, 'delete']);
