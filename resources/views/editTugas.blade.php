@extends('templateFinal')

@section('judulHalaman')

@endsection

@section('cssTamabahan')

@endsection

@section('jsTambahan')

@endsection

@section('konten')

@foreach($tugas as $p)
<form action="http://localhost:8000/belajar_laravel/public/tugas/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" id="id" name="id" value="{{ $p->id }}">
  {{--cuma atribut ini yang gak kebaca pas di input HELPPPP--}}
    <div class="form-group">
         <label for="kodePegawai">ID Pegawai</label>
         <input class="form-control" type="number" id="kodePegawai" value="{{ $p->kodePegawai }}" name="kodePegawai" required="required" placeholder="ID pegawai">
   </div>

   <div class="form-group">
         <label for="tanggal">Tanggal Tugas</label>
         <input class="form-control" type="text" id="tanggal" value="{{ $p->tanggal }}" name="tanggal" required="required" placeholder="Tanggal Tugas">
         <small id="tanggal" class="form-text text-muted">yyyy-mm-dd hh:mm:ss</small>
     </div>
     <div class="form-group">
         <label for="namaTugas">Nama Tugas</label>
         <input class="form-control" type="text" id="tugas" value="{{ $p->namaTugas }}" name="tugas" required="required" placeholder="Nama Tugas">
     </div>
     <div class="form-group">
         <label for="status">Status Tugas</label>
         <select class="form-control" id="status" value="{{ $p->status }}" name="status" required="required">
             <option>N</option>
             <option>Y</option>
           </select>
           <small id="status" class="form-text text-muted">telah selesai (Y), belum selesai (N) </small>

     </div>
     <button type="submit" class="btn btn-primary">simpan tugas</button>
   </form>

	@endforeach


@endsection
