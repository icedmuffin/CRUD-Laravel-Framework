@extends('template')

@section('judulHalaman')
<title>Tambah Agen</title>
@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')


<div class="container" style="width: 60%; margin-top:5%">

    <h3 style="text-align: center">Data Agen</h3>

	<a href="http://localhost:8000/belajar_laravel/public/agen"> Kembali</a>
    <br>
    <br>

	<form action="http://localhost:8000/belajar_laravel/public/agen/store" method="post">
        @csrf

        <div class="form-group">
            <label for="namaagen">Nama Agen</label>
            <input class="form-control" type="text" id="namaagen" name="namaagen" required="required" placeholder="Nama Agen">
        </div>

        <div class="form-group">
            <label for="jumlahagen">Jumlah Agen</label>
            <input class="form-control" type="number" id="jumlahagen" name="jumlahagen" required="required" placeholder="Jumlah Agen">
        </div>

        <div class="form-group">
            <label for="tersedia">tersedia</label>
            <Select class="form-control" id="tersedia" name="tersedia" required="required">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </Select>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>

    </form>

    </div>
    @endsection
