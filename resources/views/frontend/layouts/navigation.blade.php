
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">{{ $generalsettings->email}}</a>
        <i class="icofont-phone"></i>{{ $generalsettings->phone}}
        <i class="icofont-google-map"></i>{{ $generalsettings->city}},{{ $generalsettings->country}}  
      </div>
      <div class="social-links">
        <a href="https://twitter.com/{{ $generalsettings->twitter}}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://facebook.com/{{ $generalsettings->facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/{{ $generalsettings->instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.skype.com/{{ $generalsettings->skype}}" class="skype"><i class="icofont-skype"></i></a>
        <a href="https://www.linkedin.com/{{ $generalsettings->linkedin}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">{{ $generalsettings->title}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#departments">Departments</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a>

    </div>
  </header><!-- End Header -->
