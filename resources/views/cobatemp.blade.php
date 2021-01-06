
@@extends('content')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="http://localhost:8000/belajar_laravel/public/tugas/tambah"> + Tambah Pegawai Baru</a>

    <br/>
    <p>Cari Data Pegawai :</p>
	<form action="http://localhost:8000/belajar_laravel/public/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="http://localhost:8000/belajar_laravel/public/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="http://localhost:8000/belajar_laravel/public/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


	{{ $pegawai->links() }}

