@extends('layout')

@section('content')
    @if(session('message'))

        <p class="alert alert-success" role="alert">{{session('message')}}</p>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Desription</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="{{route ('product.edit', $product->id)}}" class="btn btn-primary">Update</a>
                <a href="{{route ('product.delete', $product->id)}}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('product.create')}}" class="btn btn-success">Create</a>
@endsection
