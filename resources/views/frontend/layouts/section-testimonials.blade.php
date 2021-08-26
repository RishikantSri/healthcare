<section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

        @foreach ( $testimonials as $info )
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{ Voyager::image( $info->image ) }}" class="testimonial-img" alt="">
              <h3>{{ $info->name }}</h3>
              <h4>{{ $info->title }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {!! $info->message !!} 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
       
            
          @endforeach

        </div>

      </div>
    </section><!-- End Testimonials Section -->