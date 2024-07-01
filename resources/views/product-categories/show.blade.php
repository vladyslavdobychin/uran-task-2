@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Category Details</h1>
        <p><strong>Name:</strong> {{ $productCategory->name }}</p>
        <a href="{{ route('product-categories.index') }}" class="btn btn-primary">Back to Categories</a>
    </div>
@endsection
