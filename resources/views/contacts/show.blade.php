@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<center><div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-body text-success">
        <center>
        <p>Nama  : {{$usaha['nama'] }}</p>
        <p>E-mail  : {{$usaha['email'] }}</p>
        <p>Message  : {{$usaha['pesan'] }}</p>
        </center>
    </div>
</center>
</div>
@endsection
