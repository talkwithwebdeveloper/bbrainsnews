@php
use Illuminate\Support\Facades\DB;

$header = DB::table('header')->first(); // Adjust the query as needed
@endphp
  
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta property="og:url" content="{{ url()->current() }}">
  <title>@yield('title')</title>
  <meta name="application-name" content="@yield('title')">
  <meta name="msapplication-tooltip" content="@yield('title')">
  <meta id="meta_og_title" property="og:title" content="@yield('title')">
  <meta name="title" content="@yield('meta_title')">
  <meta name="description" content="@yield('description')">
  <meta property="og:description" content="@yield('description')">
  <meta id="meta_og_image" property="og:image" content="@yield('image')">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="627">
  <meta name="keywords" content="@yield('keywords')">
  <link rel="canonical" href="{{ url()->current() }}" />
  
  {!! $header->value ?? '' !!}




  @section('custom_head')
  @yield('head')
  @show

  <!-- Favicons -->
  <link href="{{ asset('images/favicon.ico') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/artikel_v2/vendor/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/artikel_v2/vendor/aos.css") }}" rel="stylesheet">
  <link href="{{ asset('css/artikel_v2/vendor/bootstrap-icons.min.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/artikel_v2/main.css") }}" rel="stylesheet">