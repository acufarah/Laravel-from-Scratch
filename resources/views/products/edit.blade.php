@extends('layouts.master')
@section('content')
<h1>Edit a Product</h1>
    <form method="POST" action="{{ route('products.update', ['product'=>$product->id]) }}">
    @csrf
    @method('PUT')
        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="{{ $product->title }}" required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="{{ $product->description }}" required>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{$product->price}}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ $product->stock }}"required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option value="available" {{ $product->status=="available" ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $product->status=="unavailable" ? 'selected' : ''}}>Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button class="btn btn-primary btn-lg" type="submit">Edit Product</button>
        </div>
    
    </form>
@endsection