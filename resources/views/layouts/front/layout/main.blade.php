<!doctype html>
<html locale="{{ app()->getLocale() }}">

<head>
  @include('layouts.partials.head')
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <header>
    @include('layouts.partials.menu')
  </header>

  <main role="main">

    @yield('content')

  </main>
  

  @include('layouts.partials.footer')
  
  @include('layouts.partials.footer-scripts')

</body>

</html>
