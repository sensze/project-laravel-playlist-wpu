@extends('layouts.main')

@section('container')
    <article>
       <h2>{{$post['judul']}}</h2>
       <h5>By: {{$post['author']}}</h5>
       <p>{{$post['body']}}</p>
    </article>

    <a href="/posts"> Back To Posts.</a>
@endsection