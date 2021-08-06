@extends('layouts.app')

@section('title', 'Profils')

@section('content')

<form action="/profils" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama')}}">
  @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="formFileSm">Gambar</label>
    <input type="file" class="form-control form-control-sm" name="gambar" id="formFileSm" value="{{ old('gambar')}}">
    @error('gambar')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
    <input type="text" class="form-control" name="ttl" id="exampleInputPassword1" value="{{ old('ttl')}}">
    @error('ttl')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
  <label for="exampleDataList" class="form-label">Jenis Kelamin</label>
  <input class="form-control" list="datalistOptions2" id="exampleDataList" placeholder="" value="{{ old('jk')}}" name="jk">
  <datalist id="datalistOptions2">
    <option value="Laki">
    <option value="Perempuan">
  </datalist>
    @error('jk')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleDataList" class="form-label">Agama</label>
  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." value="{{ old('agama')}}" name="agama">
  <datalist id="datalistOptions">
    <option value="Islam">
    <option value="Kristen">
    <option value="Budha">
  </datalist>
    @error('agama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <textarea type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat')}}">
    </textarea>
    @error('alamat')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection