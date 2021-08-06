@extends('layouts.app')

@section('title', 'History')

@section('content')

  <form action="/historys/{{ $history['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Tahun Ajaran</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="tahun" aria-describedby="emailHelp" value="{{ old('tahun') ? old('tahun') : $history['tahun'] }}">
    @error('tahun')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Sekolah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $history['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection