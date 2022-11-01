@extends('layout')
@section('content')
    <form action="{{ route ('product.update', $product->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
