@extends('template')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

<div class="container" style="width: 60%">
    <a href="http://localhost:8000/belajar_laravel/public/mahasiswa"> Kembali</a>
    @foreach ($mahasiswa as $p)

    <h1 style="text-align: center">Mahasiswa</h1>
<p style="padding-bottom: 3%; padding-top:5%;text-align : center">

    NRP : {{$p -> NRP }} <br>
    Nama : {{$p -> Nama }} <br>
    jabatan :  {{$p -> Jurusan}}<br>
    umur : {{ $p -> IPK}}<br>
</p>
    @endforeach


</div>
        @endsection
