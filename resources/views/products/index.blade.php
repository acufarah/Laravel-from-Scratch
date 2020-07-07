@extends('layouts.master')
@section('content')
    <h1>List of Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-success">Create</a>

    @empty ($products)
        <div class="alert alert-warning">list is empty</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->status}}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">Show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">Edit</a>
                        <form method="POST" action={{ route('products.destroy', $product->id) }}>
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>   
        </table>
    </div>
    @endif
@endsection