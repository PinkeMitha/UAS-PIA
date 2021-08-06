@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class ="card">
    <div class ="card-body">
        <h3>Nama  : {{$profil['nama'] }}</h3>
        <h3>Tempat, Tanggal Lahir  : {{$profil['ttl']}}</h3>
        <h3>Jenis Kelamin  : {{$profil['jk']}}</h3>
        <h3>Agama  : {{$profil['agama']}}</h3>
        <h3>Alamat  : {{$profil['alamat']}}</h3>
    </div>
</div>
@endsection