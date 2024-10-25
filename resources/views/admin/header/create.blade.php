@extends('layouts.admin_v2.template')

@section('content')
    <h1>Create Header</h1>

    <form action="{{ route('header.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="value">Header Value</label>
            <textarea name="value" class="form-control" id="value" required style="height: 500px;">{{ old('value') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
