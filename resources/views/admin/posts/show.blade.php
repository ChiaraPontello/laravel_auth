@extends('layouts.app')
@section('content')
    <section class="container">
        <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}></p>
        <a href="{{route('admin.posts.edit', $post->id)}}">Modifica il Post</a>
    </section>
@endsection
