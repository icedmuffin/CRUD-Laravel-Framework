
@extends('template')

@section('judulHalaman')
<title>tambah pegawai</title>
@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')


<div class="container" style="width: 60%; margin-top:5%">

    <h3 style="text-align: center">Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
    <br>
    <br>

	<form action="http://localhost:8000/belajar_laravel/public/pegawai/store" method="post">
        @csrf

        <div class="form-group">
            <label for="nama">nama</label>
            <input class="form-control" type="text" id="nama" name="nama" required="required" placeholder="nama">
        </div>

        <div class="form-group">
            <label for="jabatan">jabatan</label>
            <select id="jabatan" name="jabatan" class="form-control" >
                @foreach($jabatan as $p)
                <option value="{{ $p->jabatan }} ">{{ $p->jabatan  }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="umur">umur</label>
            <input class="form-control" type="text" id="umur" name="umur" required="required" placeholder="umur">
        </div>

        <div class="form-group">
            <label for="alamat">alamat</label>
            <textarea class="form-control" row="2" type="text" id="alamat" name="alamat" required="required" placeholder="alamat"></textarea>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>

    </form>

    </div>
    @endsection
