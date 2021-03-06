<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{$hideshow[10]['heading']}}</h2>
          <p>{!! $hideshow[10]['subheading'] !!}</p>
        </div>
      </div>

    

      <div class="container">
        <div class="row mt-5"> 

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>{{ $generalsettings->addressline1}},{{ $generalsettings->addressline2}},{{ $generalsettings->city}},{{ $generalsettings->country}} {{ $generalsettings->pincode}}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $generalsettings->email}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>{{ $generalsettings->phone}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
         @csrf 
         @method('POST')
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
                @if ($message = Session::get('success_contact'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">??</button>
              <strong>{{ $message }}</strong>
            
              
              </div>
              @endif
             @if ($message = Session::get('error_contact'))
              <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">??</button>
              <strong>{{ $message }}</strong>
             
              </div>
             @endif
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>

      <div>
      {!! $settingother->map !!}
       
      </div>
    </section><!-- End Contact Section -->