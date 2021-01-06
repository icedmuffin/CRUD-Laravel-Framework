<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="http://localhost:8000/belajar_laravel/public/pegawai/store" method="post">
        {{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
        Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">


        <select id="jabatan" name="jabatan" class="form-control" >
            @foreach($jabatan as $p)
                <option value="{{ $p->jabatan }} ">{{ $p->jabatan  }}</option>
             @endforeach
          </select>
	</form>

</body>
</html>
