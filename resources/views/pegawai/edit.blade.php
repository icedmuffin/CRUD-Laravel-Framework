
@extends('template')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

<div class="container" style="max-width: 60%">


	<h3>Edit Pegawai</h3>

	<a href="http://localhost:8000/belajar_laravel/public/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="http://localhost:8000/belajar_laravel/public/pegawai/update" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="form-group">
            <label for="nama">nama</label>
            <input class="form-control" id="nama" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>


        <div class="form-group">
            <label for="jabatan">jabatan</label>
            <select id="jabatan" name="jabatan" class="form-control" >
                @foreach($jabatan as $j)
                    <option value="{{ $j->jabatan }} "> {{ $j->jabatan }}</option>
                @endforeach
              </select>
        </div>

        <div class="form-group">
            <label for="umur">umur</label>
            <input class="form-control" type="number" required="required" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
        </div>

        <div class="form-group">
            <label for="alamat">alamat</label>
            <textarea class="form-control" row="2" type="text" required="required" id="alamat" name="alamat">{{ $p->pegawai_alamat }}</textarea>
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
