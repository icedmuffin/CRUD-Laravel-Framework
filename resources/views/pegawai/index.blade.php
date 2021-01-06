
@extends('template')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

    {{--search dan tambah--}}
    <div class="container" style="text-align: center">

        {{--tambah--}}
        <p style="padding: 3%">
            <h3 style="text-align: center">tabel Data Pegawai</h3><br>
            <a href="http://localhost:8000/belajar_laravel/public/pegawai/tambah"> + Tambah Pegawai Baru </a>
        </p>

         {{--search--}}
        <form action="http://localhost:8000/belajar_laravel/public/pegawai/cari" method="get" >
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="cari" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Cari">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

    </div>


    {{--tabel pegawai--}}
    <div class="container">

        <table class="table table-hover">
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
                    |
                    <a href="http://localhost:8000/belajar_laravel/public/pegawai/detail/{{ $p->pegawai_id }}">Detail</a>
                </td>
            </tr>
            @endforeach
        </table>

        <br/>
        <div class="row">
            <div class="col text-center">
                Halaman : {{ $pegawai->currentPage() }} <br/>
                Jumlah Data : {{ $pegawai->total() }} <br/>
                Data Per Halaman : {{ $pegawai->perPage() }} <br/>


                 {{ $pegawai->links() }}
            </div>
        </div>

    </div>
@endsection
