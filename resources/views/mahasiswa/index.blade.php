@extends('template')

@section('judulHalaman')
<title>Mahasiswa</title>
@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

    {{--judul--}}
    <div class="container" style="text-align: center">
        <h3 style="text-align: center">Mahasiswa | Kode soal UAS 05</h3><br>
    </div>


    {{--tabel mahasiswa--}}
    <div class="container">

        <table class="table table-hover">
            <tr>
                <th>NRP</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>IPK</th>
            </tr>
            @foreach($mahasiswa as $p)
            <tr>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->Nama }}</td>
                <td>{{ $p->Jurusan }}</td>
                <td>{{ $p->IPK }}</td>
                <td>
                    <a href="http://localhost:8000/belajar_laravel/public/mahasiswa/edit/{{ $p->NRP }}">Edit</a>
                    |
                    <a href="http://localhost:8000/belajar_laravel/public/mahasiswa/view/{{ $p->NRP }}">view</a>
                </td>
            </tr>
            @endforeach
        </table>

        <br/>
        <div class="row">
            <div class="col text-center">
                Halaman : {{ $mahasiswa->currentPage() }} <br/>
                Jumlah Data : {{ $mahasiswa->total() }} <br/>
                Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>


                 {{ $mahasiswa->links() }}
            </div>
        </div>

    </div>
@endsection
