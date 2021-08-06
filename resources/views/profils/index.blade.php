@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<a href="/profils/create" class="card-link">Tambah profil</a>
<div class="container" >
    <div class="row justify-content-center">
@foreach ($profils as $profil)
<div class="col-md-4">
<div class="card" style="width: 20rem;">
  <img src="{{ url('foto') }}/{{ $profil['gambar'] }}" class="card-img-top" alt="...">
  <div class="card-body">
 <h5><a href="/profils/{{ $profil['id']}}" class="card-title"><center>{{ $profil['nama'] }}</h5></center></a>
    <table class="table">
    <tbody>
    <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>:</td>
    <td>{{ $profil['ttl'] }}</td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>{{ $profil['jk'] }}</td>
    </tr>
    <tr>
    <td>Agama</td>
    <td>:</td>
    <td>{{ $profil['agama'] }}</td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>{{ $profil['alamat'] }}</td>
    </tr>
    </tbody>
    </table>
    <div class="row justify-content-center">
    <a href="/profils/{{$profil['id']}}/edit" class="btn btn-success">Edit</a>
    <form action="/profils/{{ $profil['id']}}" method="POST">
      @csrf
      @method('DELETE')
    <button class="btn btn-primary">Hapus</button>
    </form>
</div>
  </div>
</div>
</div>
@endforeach
<div>
    {{$profils->links()}}
</div>
@endsection