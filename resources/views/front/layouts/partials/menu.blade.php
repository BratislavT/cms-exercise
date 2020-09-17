
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

  <a class="navbar-brand" href="#">vorbind</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarCollapse">
  
    <ul class="navbar-nav mr-auto">
  
      <li class="nav-item">
        <a class="nav-link" href="#">@lang('menu.product')</a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="#">Cases</a>
      </li>
  
      <li class="nav-item">
          <a class="nav-link" href="#">@lang('menu.pricing')</a>
        </li>
  
    </ul>
  
    <a href="{{ route('frontSubscription.index') }}" class="btn btn-outline-success my-2 my-sm-0" role="button">Subscription</a>
    
    <a href="" class="btn btn-outline-success my-2 my-sm-0" role="button">Log in</a>
  
  </div>
  
</nav>
