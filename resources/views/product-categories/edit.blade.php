@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product Category</h1>
        <form action="{{ route('product-categories.update', $productCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $productCategory->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
