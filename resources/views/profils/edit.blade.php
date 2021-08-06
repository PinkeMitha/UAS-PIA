@extends('layouts.app')

@section('title', 'Profil')

@section('content')

  <form action="/profils/{{ $profil['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $profil['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
    <input type="text" class="form-control" name="ttl" id="exampleInputPassword1" value="{{ old('ttl') ? old('ttl') : $profil['ttl'] }}">
    @error('ttl')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
  <label for="exampleDataList" class="form-label">Jenis Kelamin</label>
  <input class="form-control" list="datalistOptions2" id="exampleDataList" placeholder="" value="{{ old('jk') ? old('jk') : $profil['jk'] }}" name="jk">
  <datalist id="datalistOptions2">
    <option value="Laki-Laki">
    <option value="Perempuan">
  </datalist>
    @error('jk')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleDataList" class="form-label">Agama</label>
  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." value="{{ old('agama') ? old('agama') : $profil['agama'] }}" name="agama">
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
    <textarea class="form-control" type="text" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $profil['alamat'] }}">
    @error('alamat')
    </textarea>
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection