<?php

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

Route::get('/', function () {
    return view('index', [
        "data_matkul" => Matkul::all()
    ]);
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function (Request $req) {
    $req->validate([
        'input_matkul' => 'required|max:10',
        'sks_matkul' => 'required|integer'
    ]);
    Matkul::create([
        'nama' => $req->input_matkul,
        'sks' => $req->sks_matkul
    ]);

    return redirect('/');
});

Route::get('/edit/{id}', function ($id) {
    return view('edit', [
        "data" => Matkul::find($id)
    ]);
});

Route::put('/edit', function (Request $req) {
    $req->validate([
        'input_matkul' => 'required|max:10',
        'sks_matkul' => 'required|integer'
    ]);

    Matkul::find($req->id_hidden)->update([
        "nama" => $req->input_matkul,
        "sks" => $req->sks_matkul
    ]);

    return redirect('/');
});

Route::delete('/delete', function (Request $req) {
    Matkul::find($req->id)->delete();

    return redirect('/');
});
