@extends('layouts.app')

@section('title', 'Pengalaman Kerja')

@section('content')

<form action="/usahas" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Tahun</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="tahun" aria-describedby="emailHelp" value="{{ old('tahun')}}">
  @error('tahun')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Perusahaan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pt" aria-describedby="emailHelp" value="{{ old('pt')}}">
  @error('pt')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bagian</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="bagian" aria-describedby="emailHelp" value="{{ old('bagian')}}">
  @error('bagian')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection