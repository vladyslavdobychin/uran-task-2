@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" class="form-control mt-1 block w-full" id="name" name="name" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea class="form-control mt-1 block w-full" id="description" name="description"></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" class="form-control mt-1 block w-full" id="price" name="price" step="0.01" required>
            </div>
            <div class="mb-4">
                <label for="product_category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select class="form-control mt-1 block w-full" id="product_category_id" name="product_category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded">Create</button>
        </form>
    </div>
@endsection
