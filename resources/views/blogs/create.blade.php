@extends('layouts.app')

@section('content')
<form method="POST" action="/posts/store">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="slug" placeholder="Slug" required>
    <textarea name="content" placeholder="Content" required></textarea>
    <input type="file" name="image" required>
    <button type="submit">Create Post</button>
</form>


@endsection 