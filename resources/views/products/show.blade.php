@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Product Details</h1>
        <div class="max-w-lg mx-auto bg-white p-4 rounded-lg shadow-md">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded mt-4">Back to Products</a>
        </div>
    </div>
@endsection
