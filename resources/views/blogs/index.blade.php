@extends('layouts.app')

<style>
    .banner {
        background: url('https://img.freepik.com/free-photo/worker-reading-news-with-tablet_1162-83.jpg?t=st=1731298284~exp=1731301884~hmac=855d80ccae7570b485ce0867aa6ae58cb7ea6064fb6dfc176ded88c589c5392e&w=1060');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 480px;
        opacity: 50%;
    }

</style>

@section('content')

<div class="banner">
    <h1>Blogs</h1>
</div>
@foreach ($posts as $post)
<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/' . $post->image) }}" 
             class="card-img-top" 
             alt="Card Image">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</div>
@endforeach
@endsection
