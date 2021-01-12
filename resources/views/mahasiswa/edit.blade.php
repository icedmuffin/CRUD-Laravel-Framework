@extends('template')

@section('judulHalaman')
<title>edit</title>
@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

<div class="container" style="max-width: 60%">


	<h3>Edit Mahasiswa</h3>

	<a href="http://localhost:8000/belajar_laravel/public/mahasiswa"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $p)
	<form action="http://localhost:8000/belajar_laravel/public/mahasiswa/update" method="post">
        @csrf

        <input type="hidden" name="NRP" value="{{ $p->NRP}}">

        <div class="form-group">
            <label for="NRP">NRP</label>
            <input class="form-control" id="NRP" type="text" required="required" name="NRP" value="{{ $p->NRP }}">
        </div>

        <div class="form-group">
            <label for="Nama">Nama Mahasiswa</label>
            <input class="form-control" id="Nama" type="text" required="required" name="Nama" value="{{ $p->Nama }}">
        </div>

        <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input class="form-control" type="text" required="required" id="Jurusan" name="Jurusan" value="{{ $p->Jurusan }}">
        </div>

        <div class="form-group">
            <label for="IPK">Jurusan</label>
            <input class="form-control" type="text" required="required" id="IPK" name="IPK" value="{{ $p->IPK }}">
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>



	</form>
    @endforeach

</div>

@endsection
