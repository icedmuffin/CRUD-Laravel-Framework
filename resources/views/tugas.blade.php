@extends('templateFinal')

@section('judulHalaman')
<title>
    Home Page
</title>
@endsection

@section('cssTambahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')



    {{--seach--}}
    <div class="container" style="text-align: center">
        <p style="padding: 3%">
            <h3 style="text-align: center">tabel Tugas Pegawai</h3><br>
            <a href="http://localhost:8000/belajar_laravel/public/tugas/tambah"> + Tambah tugas Baru </a>
        </p>
        <form action="http://localhost:8000/belajar_laravel/public/tugas/cari" method="post" >
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="cari" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Cari Tugas">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

    </div>


    {{--seach--}}

    {{-- form menggunakan boostrap
    <form action="http://localhost:8000/belajar_laravel/public/tugas/cari" method="GET">
    <input type="text" id="cari" placeholder="Cari tugas" value="{{ old('cari') }}">
    <button type="submit" class="btn btn-primary">Cari</button>
    </form>
--}}


	<br>
    <div class="container">


        {{--nanti ganti ke tugas--}}

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Tanggal</th>
                    <th>Tugas</th>
                    <th>Status</th>
                </tr>
            </thead>
          <tbody>
	    	@foreach($tugas as $p)
          <tbody>
               <tr>
		    	    <td>{{ $p->kodePegawai }}</td>
		    	    <td>{{ $p->tanggal }}</td>
		    	    <td>{{ $p->namaTugas }}</td>
		    	    <td>{{ $p->status }}</td>
		    	    <td>
			    	    <a href="http://localhost:8000/belajar_laravel/public/tugas/edit/{{ $p->id }}">Edit</a>
			    	    |
			    	    <a href="http://localhost:8000/belajar_laravel/public/tugas/hapus/{{ $p->id }}">Hapus</a>
			        </td>
              </tr>
            </tbody>
	    	@endforeach
	    </table>

        <br>
        <p style="text-align: center">
	    Halaman : {{ $tugas->currentPage() }} <br>
	    Jumlah Data : {{ $tugas->total() }} <br>
	    Data Per Halaman : {{ $tugas->perPage() }} <br>


	    {{ $tugas->links() }}

        </p>
        {{--nanti ganti ke tugas--}}
    </div>
@endsection
