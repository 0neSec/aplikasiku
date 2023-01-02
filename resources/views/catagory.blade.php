@extends('layouts.pages')


@section('isi')
    <article>
    <h2>{{ $artikel->title }}</h2>
    {{-- <h5>{{ $blog["author"] }}</h5> --}}
    <p>By. <a href="/catagory/{{ $artikel->catagory->slug }}">{{ $artikel->catagory->name }}</a></p>
    {!! $artikel->body !!}
    </article>
    <a href="/artikel">Back To Artikekl</a>
    
@endsection