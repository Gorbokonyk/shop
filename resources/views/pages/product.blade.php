@extends('main')

@section('title', 'Product')

@section('content')

    <div id="app">
        <counter-component></counter-component>

        {{--<product-component></product-component>--}}
    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>


@endsection
