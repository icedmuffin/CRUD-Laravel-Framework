<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    //mekanisme halaman awal
    public function index()
    {
        // mengambil data dari table home
        $tugas = DB::table('tugas')->paginate(10);
        $pegawai = DB::table('pegawai')->get();
        // mengirim data tugas ke view home
        return view('tugas.index', ['tugas' => $tugas, 'pegawai' => $pegawai]);
    }

    //updated
    // method untuk menampilkan view form tambah tugas
    public function tambah()
    {

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // memanggil view tambah
        return view('tugas.tambah', ['pegawai' => $pegawai]);
    }

    //updated
    // method untuk insert data ke table tugas
    public function simpan(Request $request)
    {

        // insert data baru ke table tugas
        DB::table('tugas')->insert([

            'kodePegawai' => $request->kodePegawai,
            'tanggal' => $request->tanggal,
            'namaTugas' => $request->tugas,
            'status' => $request->status
        ]);

        // alihkan halaman ke halaman
        return redirect('/tugas');
    }





    // method untuk edit data tugas
    public function edit($id)
    {

        // mengambil data tugas berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('id', $id)->get();
        // passing data tugas yang didapat ke view editTugas.blade.php


        return view('tugas.edit', ['tugas' => $tugas]);
    }

    // update data tugas
    public function update(Request $request)
    {
        // update data tugas
        DB::table('tugas')->where('id', $request->id)->update([
            'tanggal' => $request->tanggal,
            'namaTugas' => $request->tugas,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman home
        return redirect('/tugas');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data tugas berdasarkan id yang dipilih
        DB::table('tugas')->where('id', $id)->delete();

        // alihkan halaman ke halaman home
        return redirect('/tugas');
    }

    public function cari(Request $request)
    {

        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table tugas sesuai pencarian data
        $hasil = DB::table('tugas')
            ->where('namaTugas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('tugas.index', ['tugas' => $hasil]);
    }
}
