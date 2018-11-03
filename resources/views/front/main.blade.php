<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.partials.head')
</head>

<body>
@include('front.partials.header')
@include('front.partials.nav')

<div class="contant">

    @yield('content')

    @include('front.partials.footer')

</div> <!-- end of .container -->

@include('front.partials.javascript')

{{--JS for all pages --}}
@yield('scripts')

</body>
</html>