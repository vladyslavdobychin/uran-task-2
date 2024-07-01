@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Product Category</h1>
        <form action="{{ route('product-categories.update', $productCategory->id) }}" method="POST" class="max-w-lg mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" class="form-control mt-1 block w-full" id="name" name="name" value="{{ $productCategory->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
