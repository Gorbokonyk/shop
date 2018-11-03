@extends('front.main')

@section('title', 'create')

@section('content')


    <form action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <input type="number" name="price" placeholder="price">
        <input type="text" name="size" placeholder="size">
        <input type="checkbox" name="is_active" value="1"  placeholder="is active" checked>
        <input type="file" name="image" />
        <input type="submit" value=" Save " />
    </form>
@stop