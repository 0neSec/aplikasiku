@extends('layouts.pages')


@section('isi')
    <article>
    <h2>{{ $artikel->title }}</h2>
    {{-- <h5>{{ $blog["author"] }}</h5> --}}
    {!! $artikel->body!!}
    </article>
    <a href="/artikel">Back To Artikekl</a>
    
@endsection