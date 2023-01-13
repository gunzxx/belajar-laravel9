@extends('layouts/main')

@section('container')
    <h1>About Developer</h1>
    <img src="img/{{ $image }}" alt="Guntur W" title="Guntur W" class="img-thumbnail gunz rounded-circle" width="100">
    <p>Nama : {{ $nama }}</p>
    <p>Instansi : {{ $instansi }}</p>
@endsection
