<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class agenController extends Controller
{

    public function index()
    {
        // ambil data
        $agen = DB::table('agen')->paginate(10);

        //return
        return view('/agen.index', ['agen' => $agen]);
    }

    //
    public function tambah()
    {
        return view('agen.tambah');
    }


    public function store(Request $request)
    {
        //simpan
        DB::table('agen')->insert([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => $request->tersedia
        ]);

        //return
        return redirect('/agen');
    }

    public function edit($id)
    {
        //ambil data
        $agen = DB::table('agen')->where('kodeagen', $id)->get();

        //return
        return view('agen.edit', ['agen' => $agen]);
    }


    public function update(Request $request)
    {
        // update data
        DB::table('agen')->where('kodeagen', $request->kodeagen)->update([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => $request->tersedia
        ]);

        //return
        return redirect('/agen');
    }


    public function hapus($id)
    {
        //hapus data
        DB::table('agen')->where('kodeagen', $id)->delete();

        //return
        return redirect('/agen');
    }

    public function cari(Request $request)
    {
        //tangkap data
        $cari = $request->cari;

        //ambil data
        $agen = DB::table('agen')
            ->where('namaagen', 'like', "%" . $cari . "%")
            ->paginate();

        //return
        return view('agen.index', ['agen' => $agen]);
    }
}
