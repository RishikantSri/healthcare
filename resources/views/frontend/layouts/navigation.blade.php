
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

      <h1 class="logo mr-auto"><a href="{{route('home')}}">{{ $generalsettings->title}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          @if ($hideshow[2]['hideshow']==1) 
          <li><a href="#about">About</a></li>
          @endif
          @if ($hideshow[3]['hideshow']==1) 
          <li><a href="#services">Services</a></li>
          @endif
          @if ($hideshow[5]['hideshow']==1) 
          <li><a href="#departments">Departments</a></li>
          @endif
          @if ($hideshow[6]['hideshow']==1) 
          <li><a href="#doctors">Doctors</a></li>
          @endif
          
          @if ($hideshow[9]['hideshow']==1) 
          <li><a href="#gallery">Gallery</a></li>
          @endif
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      @if ($hideshow[4]['hideshow']==1) 
      <a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a>
      @endif
    </div>
  </header><!-- End Header -->
