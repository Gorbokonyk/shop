@extends('main')

@section('title', 'Product')

@section('content')

    <div id="app">
        <example-component></example-component>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>


@endsection
