@extends('layouts.pages')

@section('isi')
@foreach ($artikel as $blog)
<article class="">
  
    <h2><a href="/artikel/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
    {{-- <h5>{{ $blog["author"] }}</h5> --}}
    {{ $blog->excerpt}}
    <hr class="">
</article>
@endforeach
@endsection

