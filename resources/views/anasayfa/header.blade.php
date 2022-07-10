    <!-- LOADER -->
    <div id="preloader">
      <div id="main-ld">
        <div id="loader"></div>
      </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img class="img-fluid" src="{{asset('assets')}}/images/ieeekbu_logo.jpg" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrollanasayfa')" href="/">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrollhakkımızda')" href="hakkimizda.html">Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrollkomitelerimiz')" href="{{route('komitelerimiz')}}">Komiteler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrolletkinliklerimiz')" href="#portfolio">Etkinliklerimiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrollblog')" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger @yield('scrollbizeulasın')" href="#contact">Bize Ulaşın</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>