<h3>Data Pegawai</h3>


<a href="http://localhost:8000/belajar_laravel/public/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br/>
<p>Cari Data Pegawai :</p>
<form action="http://localhost:8000/belajar_laravel/public/pegawai/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>
<br/>
