@extends('layouts.admin_v2.template')

@section('content')
    <h1>Header Management</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('header.create') }}" class="btn btn-primary">Create New Header</a>


    <!-- <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}"> -->


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($headers as $header)
                <tr>
                    <td>{{ $header->id }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($header->value, 200, '...') }}</td>
                    <td>
                        <a href="{{ route('header.edit', $header) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('header.destroy', $header) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
