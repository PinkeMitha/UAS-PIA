@extends('layouts.app')

@section('title', 'Contact')

@section('content')

  <form action="/contacts/{{ $contact['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $contact['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') ? old('email') : $contact['email'] }}">
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Message</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="pesan" aria-describedby="emailHelp" value="{{ old('pesan') ? old('pesan') : $contact['pesan'] }}">
    @error('pesan')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection