    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2> {{$hideshow[3]['heading']}}</h2>
          <p>{{$hideshow[3]['subheading']}}</p>
        </div>

        <div class="row">
        @foreach ( $contentservices as $info )
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="{{$info->icon}}"></i></div>
              <h4><a href="">{{$info->heading}}</a></h4>
              <p>{{$info->subheading}}</p>
            </div>
          </div>
        @endforeach
         

        </div>

      </div>
    </section><!-- End Services Section -->
