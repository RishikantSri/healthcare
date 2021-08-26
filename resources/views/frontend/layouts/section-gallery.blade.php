<section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>{{$hideshow[9]['heading']}}</h2>
          <p>{!! $hideshow[9]['subheading'] !!}</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
        @foreach ( $galleryimages as $info )
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ Voyager::image( $info->image ) }}" class="venobox" data-gall="gallery-item">
                <img src="{{ Voyager::image( $info->image ) }}" alt="$info->title" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->