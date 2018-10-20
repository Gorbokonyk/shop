<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>

@include('partials.nav')

<div class="container">

    @yield('content')

    @include('partials.footer')

</div> <!-- end of .container -->

@include('partials.javascript')

{{--JS for all pages --}}
@yield('scripts')

</body>
</html>