@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New Product</a>
        <table class="table-auto w-full mb-8">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $product->name }}</td>
                    <td class="px-4 py-2">{{ $product->description }}</td>
                    <td class="px-4 py-2">{{ $product->price }}</td>
                    <td class="px-4 py-2">{{ $product->category->name }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning text-yellow-600">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
