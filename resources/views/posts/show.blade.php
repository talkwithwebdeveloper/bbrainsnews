@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/' . $post->image) }}"
            class="card-img-top"
            alt="Card Image">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection