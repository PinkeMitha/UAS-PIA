@extends('layouts.app')

@section('title', 'History')

@section('content')
<a href="/historys/create" class="card-link">Tambah history</a>

<div class="container" >
    <div class="row justify-content-center">
@foreach ($historys as $history)
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
 <h5><a href="/historys/{{ $history['id']}}" class="card-title"><center>{{ $history['nama'] }}</h5></center></a>
    <table class="table">
    <tbody>
    <tr>
    <td>Tahun Ajaran</td>
    <td>:</td>
    <td>{{ $history['tahun'] }}</td>
    </tr>
    </tbody>
    </table>
    <div class="row justify-content-center">
    <a href="/historys/{{$history['id']}}/edit" class="btn btn-success">Edit</a>
    <form action="/historys/{{ $history['id']}}" method="POST">
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
    {{$historys->links()}}
</div>
@endsection