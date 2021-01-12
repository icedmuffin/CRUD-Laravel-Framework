<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mahasiswaController extends Controller
{

    public function index()
    {
        // ambil data
        $mahasiswa = DB::table('mahasiswa')->paginate(10);

        //return
        return view('/mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        //ambil data
        $mahasiswa = DB::table('mahasiswa')->where('NRP', $id)->get();

        //return
        return view('/mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }


    public function update(Request $request)
    {
        // update data
        DB::table('mahasiswa')->where('NRP', $request->NRP)->update([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IKP' => $request->IPK
        ]);

        //return
        return redirect('/mahasiswa');
    }

    public function view($id)
    {
        $mahasiswa =  DB::table('mahasiswa')->where('NRP', $id)->get();
        // memanggil view tambah
        return view('/mahasiswa.view', ['mahasiswa' => $mahasiswa]);
    }
}
