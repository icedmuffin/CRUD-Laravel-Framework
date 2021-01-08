@extends('template')

@section('judulHalaman')
<title>Agen</title>
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
            <h3 style="text-align: center">tabel Data Agen</h3><br>
            <a href="http://localhost:8000/belajar_laravel/public/agen/tambah"> + Tambah Agen Baru </a>
        </p>

         {{--search--}}
        <form action="http://localhost:8000/belajar_laravel/public/agen/cari" method="get" >
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="cari" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Cari">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

    </div>


    {{--tabel agen--}}
    <div class="container">

        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama Agen</th>
                <th>Jumlah</th>
                <th>Tersedia</th>
            </tr>
            @foreach($agen as $p)
            <tr>
                <td>{{ $p->kodeagen }}</td>
                <td>{{ $p->namaagen }}</td>
                <td>{{ $p->jumlahagen }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="http://localhost:8000/belajar_laravel/public/agen/edit/{{ $p->kodeagen }}">Edit</a>
                    |
                    <a href="http://localhost:8000/belajar_laravel/public/agen/hapus/{{ $p->kodeagen }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

        <br/>
        <div class="row">
            <div class="col text-center">
                Halaman : {{ $agen->currentPage() }} <br/>
                Jumlah Data : {{ $agen->total() }} <br/>
                Data Per Halaman : {{ $agen->perPage() }} <br/>


                 {{ $agen->links() }}
            </div>
        </div>

    </div>
@endsection
