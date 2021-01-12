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


	<h3>Edit Agen</h3>

	<a href="http://localhost:8000/belajar_laravel/public/egen"> Kembali</a>

	<br/>
	<br/>

	@foreach($agen as $p)
	<form action="http://localhost:8000/belajar_laravel/public/agen/update" method="post">
        @csrf

        <input type="hidden" name="kodeagen" value="{{ $p->kodeagen }}">

        <div class="form-group">
            <label for="namaagen">Nama Agen</label>
            <input class="form-control" id="namaagen" type="text" required="required" name="namaagen" value="{{ $p->namaagen }}">
        </div>

        <div class="form-group">
            <label for="jumlahagen">Jumlah Agen</label>
            <input class="form-control" type="number" required="required" id="jumlahagen" name="jumlahagen" value="{{ $p->jumlahagen }}">
        </div>

        <div class="form-group">
            <label for="tersedia">Tersedia</label>
            <select id="tersedia" name="tersedia" class="form-control" >
                    <option value="y">yes</option>
                    <option value="n">no</option>
              </select>
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
