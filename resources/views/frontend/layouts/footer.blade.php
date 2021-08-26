

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ $generalsettings->title}}</h3>
            <p>
            {{ $generalsettings->addressline1}}<br>
            {{ $generalsettings->addressline2}}, {{ $generalsettings->city}}<br>
            {{ $generalsettings->country}} <br><br>
              <strong>Phone:</strong>{{ $generalsettings->phone}}<br>
              <strong>Email:</strong>{{ $generalsettings->email}}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="{{ route('subscribe') }}" method="POST" enctype="multipart/form-data">
             @csrf 
             @method('POST')
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form>
            @if ($message = Session::get('success_subscribe'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            
              </div>
              @endif
             @if ($message = Session::get('error_subscribe'))
              <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
              <div class="sent-message">message not sent . Try again!</div>
              </div>
             @endif
             @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ $generalsettings->title}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Design Updated and Developed By <a href="https://rishikantsri.tech/">Rishikant</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/{{ $generalsettings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/{{ $generalsettings->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/{{ $generalsettings->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.skype.com/{{ $generalsettings->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://www.linkedin.com/{{ $generalsettings->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

