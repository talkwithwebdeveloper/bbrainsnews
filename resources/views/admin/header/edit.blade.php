@extends('layouts.admin_v2.template')
<style>
    .custom-textarea {
    height: 500px; /* Adjust height as needed */
}

</style>

@section('content')
    <h1>Edit Header</h1>

    <form action="{{ route('header.update', $header) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="value">Header Value</label>
            <textarea name="value" class="form-control custom-textarea" id="value" required>{{ $header->value }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
