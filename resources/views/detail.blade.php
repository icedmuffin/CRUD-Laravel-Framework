@extends('template')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

<div class="container" style="width: 60%">

    @foreach ($pegawai as $p)

    <h1 style="text-align: center">Detail Pegawai ID - {{$p->pegawai_id}}</h1>
<p style="padding-bottom: 3%; padding-top:5%">
    Nama : {{$p -> pegawai_nama}} <br>
    jabatan :  {{$p -> pegawai_jabatan}}<br>
    umur : {{ $p -> pegawai_umur}}<br>
</p>
    @endforeach


    <table class="table table-hover">
        <thead>
            <tr>

                <th>Tanggal</th>
                <th>Tugas</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tugas as $p)
            <tbody>
                <tr>

                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->namaTugas }}</td>
                    <td>{{ $p->status }}</td>

                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
        @endsection
