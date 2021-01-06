@extends('template')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

<div class="container" style="width: 60%">


    @foreach($tugas as $p)
    <h3 style="text-align: center">Edit Pegawai - {{$p -> kodePegawai}} </h3><br>

    <form action="http://localhost:8000/belajar_laravel/public/tugas/update" method="post">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $p->id }}">

        <div class="form-group">
            <label for="tanggal">Tanggal Tugas</label>
            <input class="form-control" type="text" id="tanggal" value="{{ $p->tanggal }}" name="tanggal" required="required" placeholder="Tanggal Tugas">
            <small id="tanggal" class="form-text text-muted">yyyy-mm-dd hh:mm:ss</small>
        </div>
        <div class="form-group">
            <label for="namaTugas">Nama Tugas</label>
            <input class="form-control" type="text" id="tugas" value="{{ $p->namaTugas }}" name="tugas" required="required" placeholder="Nama Tugas">
        </div>
        <div class="form-group">
            <label for="status">Status Tugas</label>
            <select class="form-control" id="status" value="{{ $p->status }}" name="status" required="required">
                <option>N</option>
                <option>Y</option>
            </select>
            <small id="status" class="form-text text-muted">telah selesai (Y), belum selesai (N) </small>

        </div>
        <div class="row">
            <div class="col" style="text-align: center">
                <button type="submit" class="btn btn-primary">simpan tugas</button>
            </div>
        </div>

    </form>

	@endforeach


</div>

    @endsection
