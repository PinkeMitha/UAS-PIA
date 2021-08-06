@extends('layouts.app')

@section('title', 'usaha')

@section('content')
<center><div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
        <center>
        <p>Nama Perusahaan  : {{$usaha['pt'] }}</p>
        <p>Bagian  : {{$usaha['bagian'] }}</p>
        <p>Tahun  : {{$usaha['tahun'] }}</p>
        </center>
    </div>
</center>
</div>
@endsection
