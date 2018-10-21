<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') </title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

<meta name="csrf-token" content="{{csrf_token()}}">
<script>window.Laravel = {csrf: '{{ csrf_token() }}'}</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style href="{{asset('css/style.css')}}"></style>


@yield('stylesheets')
