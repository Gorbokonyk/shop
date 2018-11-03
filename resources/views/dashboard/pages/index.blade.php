@extends('front.main')

@section('title', 'Homepage')

@section('content')

    @foreach($products as $product)
        <p>{{$product->title}}</p>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->size}}</p>
    @endforeach
@stop