@extends('layouts.app')

@section('title', 'Pengalaman Kerja')

@section('content')
<a href="/usahas/create" class="card-link">Tambah usaha</a>
<div class="container" >
    <div class="row justify-content-center">
@foreach ($usahas as $usaha)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
 <h5><a href="/usahas/{{ $usaha['id']}}" class="card-title"><center>{{ $usaha['pt'] }}</h5></center></a>
    <table class="table">
    <tbody>
    <tr>
    <td>Bagian </td>
    <td>:</td>
    <td>{{ $usaha['bagian'] }}</td>
    </tr>
    <tr>
    <td>Tahun </td>
    <td>:</td>
    <td>{{ $usaha['tahun'] }}</td>
    </tr>
    </tbody>
    </table>
    <div class="row justify-content-center">
    <a href="/usahas/{{$usaha['id']}}/edit" class="btn btn-success">Edit</a>
    <form action="/usahas/{{ $usaha['id']}}" method="POST">
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
    {{$usahas->links()}}
</div>
@endsection