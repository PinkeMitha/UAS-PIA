@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<h1 align="center"><img src="/foto/cm.jpg" width="1120" height="500"></h1>
<br>
<a href="/contacts/create" class="card-link">Masukan</a>
<h5><center>Hubungin Kami Untuk Informasi Lebih Lanjut</center></h5>
<br>
<dl class="row">
  <dt class="col-sm-3">Alamat</dt>
  <dd class="col-sm-9">Perumnas, Cirebon, Jawa Barat</dd>
  <dt class="col-sm-3">Telp</dt>
  <dd class="col-sm-9">08739865409</dd>
  <dt class="col-sm-3">E-mail</dt>
  <dd class="col-sm-9">Pinkemita27@gmail.com</dd>
<div class="container" >
    <div class="row justify-content-center">
@foreach ($contacts as $contact)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
 <h5><a href="/contacts/{{ $contact['id']}}" class="card-title"><center>{{ $contact['nama'] }}</h5></center></a>
    <table class="table">
    <tbody>
    <tr>
    <td>E-mail </td>
    <td>:</td>
    <td>{{ $contact['email'] }}</td>
    </tr>
    <tr>
    <td>Message</td>
    <td>:</td>
    <td>{{ $contact['pesan'] }}</td>
    </tr>
    </tbody>
    </table>
    <div class="row justify-content-center">
    <a href="/contacts/{{$contact['id']}}/edit" class="btn btn-success">Edit</a>
    <form action="/contacts/{{ $contact['id']}}" method="POST">
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
    {{$contacts->links()}}
</div>
@endsection