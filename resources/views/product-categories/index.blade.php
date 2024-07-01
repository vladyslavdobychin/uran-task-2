@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Product Categories</h1>
        <a href="{{ route('product-categories.create') }}" class="btn btn-primary mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New Category</a>
        <table class="table-auto w-full mb-8">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $category->name }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('product-categories.edit', $category->id) }}" class="btn btn-warning text-yellow-600">Edit</a>
                        <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
