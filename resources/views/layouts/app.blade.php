<!doctype html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>
  <body>

  @include('layouts.partials.menu')

<main role="main">

  <div class="container motto">  
    @yield('body')
  </div> 

  @yield('carousel')

@include('layouts.partials.footer')

</main>

@include('layouts.partials.footer-scripts')

  </body>

</html>
