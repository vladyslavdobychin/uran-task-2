@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Categories</h1>
        <a href="{{ route('product-categories.create') }}" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('product-categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
