@extends('main')

@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to Jerky!</h1>
                <p class="lead">Thank you so much for visiting. This web site is currently developing.</p>
            </div>
        </div>
    </div>

    <a href="/product">product</a>
    <div id="app">
        <example-component></example-component>
        <page-component></page-component>
    </div>

@stop
