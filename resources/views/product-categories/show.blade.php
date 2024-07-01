@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Product Category Details</h1>
        <div class="max-w-lg mx-auto bg-white p-4 rounded-lg shadow-md">
            <p><strong>Name:</strong> {{ $productCategory->name }}</p>
            <a href="{{ route('product-categories.index') }}" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded mt-4">Back to Categories</a>
        </div>
    </div>
@endsection
