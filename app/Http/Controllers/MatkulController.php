<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function home()
    {
        return view('index', [
            "data_matkul" => Matkul::all()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function post_create(Request $req)
    {
        $req->validate([
            'input_matkul' => 'required|max:10',
            'sks_matkul' => 'required|integer'
        ]);
        Matkul::create([
            'nama' => $req->input_matkul,
            'sks' => $req->sks_matkul
        ]);

        return redirect('/');
    }

    public function edit_slug($id)
    {
        return view('edit', [
            "data" => Matkul::find($id)
        ]);
    }

    public function edit(Request $req)
    {
        $req->validate([
            'input_matkul' => 'required|max:10',
            'sks_matkul' => 'required|integer'
        ]);

        Matkul::find($req->id_hidden)->update([
            "nama" => $req->input_matkul,
            "sks" => $req->sks_matkul
        ]);

        return redirect('/');
    }

    public function delete(Request $req)
    {
        Matkul::find($req->id)->delete();

        return redirect('/');
    }
}
