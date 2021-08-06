@extends('layouts.app')

@section('title', 'History')

@section('content')
<center><div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
        <center>
        <p>Nama Sekolah  : {{$history['nama'] }}</p>
        <p>Tahun Ajaran  : {{$history['tahun'] }}</p>
        </center>
    </div>
</center>
</div>
@endsection
