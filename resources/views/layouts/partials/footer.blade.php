<footer class="container">
  <div class="row">

    <div class="col-sm-3">
      <ul id="UL-1">
        <li id="LI-0">Company</li>
        <li id="LI-1"><a href="/about/" class="A-1">About</a></li>
        <li id="LI-1"><a href="/about/jobs.rtm" class="A-1">Jobs</a></li>
        <li id="LI-1"><a href="/about/press.rtm" class="A-1">Press</a></li>
        <li id="LI-1"><a href="" class="A-1">Blog</a></li>
      </ul>
    </div>

    <div class="col-sm-3">
      <ul id="UL-1">
        <li id="LI-0">Product</li>
        <li id="LI-1"><a href="/tour/" class="A-1">Tour</a></li>
        <li id="LI-1"><a href="/new/" class="A-1">What's New</a></li>
        <li id="LI-1"><a href="/services/" class="A-1">Download App</a></li>
        <li id="LI-1"><a href="/integrations/" class="A-1">Integrations</a></li>
        <li id="LI-1"><a href="/upgrade/" class="A-1">Upgrade</a></li>
      </ul>
    </div>

    <div class="col-sm-3">
      <ul id="UL-1">
        <li id="LI-0">Community</li>
        <li id="LI-1"><a href="/forums/" class="A-1">Forums</a></li>
        <li id="LI-1"><a href="/services/tester/" class="A-1">Tester Program</a></li>
        <li id="LI-1"><a href="/services/translate/" class="A-1">Translations</a></li>
        <li id="LI-1"><a href="/services/api/" class="A-1">API</a></li>
      </ul>
    </div>

    <div class="col-sm-3">
      <ul id="UL-1">
        <li id="LI-0">Support</li>
        <li id="LI-1"><a href="/help/" class="A-1">Help Center</a></li>
        <li id="LI-1"><a href="/help/guide/" class="A-1">Get Started</a></li>
        <li id="LI-1"><a href="/help/tips/" class="A-1">Tips &amp; Tricks</a></li>
        <li id="LI-1"><a href="" class="A-1">Status</a></li>
        <li id="LI-1"><a href="/help/contact/" class="A-1">Contact Us</a></li>
      </ul>
    </div>
  </div><!-- /.row -->
  
  <div class="row">
    
    <div class="col-sm-3">
      <small id="company">© 2019 Company, Inc</small>
    </div>

    <div class="col-sm-3">
      <ul class="footer-legal-links">
        <li><a href="/help/terms.rtm">Terms</a></li>
        <li>•</li>
        <li><a href="/help/privacy.rtm">Privacy</a></li>
        <li>•</li>
        <li><a href="/help/security.rtm">Security</a></li>
      </ul>
    </div>

    <div class="col-sm-3">

    </div><!-- /.col-sm-3 -->

    <div class="col-sm-3">
      <ul class="btn-group dropup rtm-footer-language open">
        
        @php $locale = session()->get('locale'); @endphp
        <li class="navbar-nav dropup">
          <a id="localization" class="btn btn-link btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            @switch($locale)
              @case('fr')
              <img id="flag" src="/img/fr.png" alt="France flag"> Fran&ccedil;ais
              @break
              @case('de')
              <img id="flag" src="/img/de.png" alt="Germany flag"> Deutsch
              @break
              @case('es')
              <img id="flag" src="/img/es.png" alt="Spain flag"> Espa&ntilde;ol
              @break
              @case('ja')
              <img id="flag" src="/img/ja.png" alt="Japan flag"> &#26085;&#26412;&#35486;
              @break
              @default
              <img id="flag" src="/img/uk.png" alt="Great Britain flag"> English
            @endswitch
            <span></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="fr"><img id="flag" src="/img/fr.png" alt="France flag"> Fran&ccedil;ais</a></li>
            <li><a class="dropdown-item" href="de"><img id="flag" src="/img/de.png" alt="Germany flag"> Deutsch</a></li>
            <li><a class="dropdown-item" href="es"><img id="flag" src="/img/es.png" alt="Spain flag"> Espa&ntilde;ol</a></li>
            <li><a class="dropdown-item" href="en"><img id="flag" src="/img/uk.png" alt="Japan flag"> English</a></li>
            <li><a class="dropdown-item" href="ja"><img id="flag" src="/img/ja.png" alt="Great Britain flag"> &#26085;&#26412;&#35486;</a></li>
          </ul>
        </li>
      </ul>
       
      <a href="https://blog.template.com/" id="A-2"></a>
      <a href="https://twitter.com/template" id="A-3"></a>
      <a href="https://www.facebook.com/template" id="A-4"></a>

    </div><!-- /.col-sm-3 -->
  </div><!-- /.row -->
</footer>


