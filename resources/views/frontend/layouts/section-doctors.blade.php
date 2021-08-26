<section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>{{$hideshow[6]['heading']}}</h2>
          <p>{!! $hideshow[6]['subheading'] !!}</p>
        </div>

        <div class="row">
        @foreach ( $doctors as $info )
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ Voyager::image( $info->image ) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$info->name}}</h4>
                <span>{{$info->title}}</span>
                <p>{{$info->about}}</p>
                <div class="social">
                  <a href="{{$info->twitter}}"><i class="ri-twitter-fill"></i></a>
                  <a href="{{$info->facebook}}"><i class="ri-facebook-fill"></i></a>
                  <a href="{{$info->instagram}}"><i class="ri-instagram-fill"></i></a>
                  <a href="{{$info->linkedin}}"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        
        </div>

      </div>
    </section><!-- End Doctors Section -->