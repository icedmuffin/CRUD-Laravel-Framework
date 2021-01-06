<h3>Data Pegawai</h3>


<a href="http://localhost:8000/belajar_laravel/public/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br/>
<p>Cari Data Pegawai :</p>
<form action="http://localhost:8000/belajar_laravel/public/pegawai/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>
<br/>


<option value="{{ $n->pegawai_id }}"
    @if($t->tugas_idpegawai==$n->pegawai_id) selected="selected"
    @endif>{{ $n->pegawai_nama }}
</option>



// mengambil data tugas berdasarkan id yang dipilih
$tugas = DB::table('tugas')->where('kodePegawai', $id)->get();

// passing data tugas yang didapat ke view editTugas.blade.php
return view('tugas.edit', ['kodePegawai' => $tugas]);
