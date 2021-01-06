
@extends('template')

@section('judulHalaman')
<title>tambah tugas</title>
@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')



	<a href="/tugas"> Kembali</a>
    <h3 style="text-align: center">Data Tugas Pegawai</h3>

    <div class="container" style="padding : 0 10% 10% 10%">

        <form action="http://localhost:8000/belajar_laravel/public/tugas/simpan" method="post">
            @csrf

            <div class="form-group">
                <label for="tanggal">pegawai </label>
                <select id="kodePegawai" name="kodePegawai" class="form-control" >
                    @foreach($pegawai as $n)
                        <option value="{{ $n->pegawai_id}} ">{{ $n->pegawai_nama  }} | {{$n->pegawai_id}}</option>
                     @endforeach
                </select>
                <br/>
            </div>


            <div class="form-group">
                <label for="tanggal">Tanggal Tugas</label>
                <input class="form-control" type="datetime-local" id="tanggal" name="tanggal" required="required" placeholder="Tanggal Tugas">
                <small id="tanggal" class="form-text text-muted">yyyy-mm-dd hh:mm:ss</small>
            </div>
            <div class="form-group">
                <label for="namaTugas">Nama Tugas</label>
                <input class="form-control" type="text" id="tugas" name="tugas" required="required" placeholder="Nama Tugas">
            </div>
            <div class="form-group">
                <label for="status">Status Tugas</label>
                <select class="form-control" id="status" name="status" required="required">
                    <option>N</option>
                    <option>Y</option>
                </select>
                <small id="status" class="form-text text-muted">telah selesai (Y), belum selesai (N) </small>

            </div>
            <button type="submit" class="btn btn-primary">simpan tugas</button>
        </form>
    </div>

        @endsection
