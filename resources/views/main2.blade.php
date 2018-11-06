<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
@include('partials.header')
@include('partials.nav')
    <div id="app">

        <main-component></main-component>
    </div>
@include('partials.footer')
    <script src="{{asset('js/app.js')}}"></script>
    @include('partials.javascript')

    {{--JS for all pages --}}
    @yield('scripts')

</body>
</html>
