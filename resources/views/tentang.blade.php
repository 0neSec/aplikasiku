@extends('layouts.pages')

@section('isi')

<h1>{{ $name }}</h1>
<h3>{{ $email }}</h3>
<img src="{{ $img }}" alt="{{ $name }}">
    
@endsection
