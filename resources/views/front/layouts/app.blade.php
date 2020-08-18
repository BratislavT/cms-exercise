<!doctype html>
<html locale="{{ app()->getLocale() }}">

<head>
  @include('front.layouts.partials.head')
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>

<body>

  <header>
    @include('front.layouts.partials.menu')
  </header>

  <main role="main">

    @yield('content')

  </main>
  

  @include('front.layouts.partials.footer')
  
  @include('front.layouts.partials.footer-scripts')

</body>

</html>
