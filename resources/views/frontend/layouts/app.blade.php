<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.header')
<body>

  <!-- ======= Top Bar ======= -->
 
  @include('frontend.layouts.navigation')
 
  
  <!-- ======= Top - Hero Section ======= -->
 @php
   
 //dd($hideshow); 
 @endphp

    @if ($hideshow[0]['hideshow']==1)
    
    @include('frontend.layouts.section-top')
    
    @endif

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    @if ($hideshow[1]['hideshow']==1) 

    @include('frontend.layouts.section-whyus')
    
    @endif
    <!-- ======= About Section ======= -->
    @if ($hideshow[2]['hideshow']==1) 

    @include('frontend.layouts.section-about-counts')
    
    @endif
    <!-- ======= Services Section ======= -->
    @if ($hideshow[3]['hideshow']==1) 

    @include('frontend.layouts.section-services')
    
    @endif
    <!-- ======= Appointment Section ======= -->
    @if ($hideshow[4]['hideshow']==1) 

    @include('frontend.layouts.section-appointment')
    
    @endif
    <!-- ======= Departments Section ======= -->
    @if ($hideshow[5]['hideshow']==1) 
    
    @include('frontend.layouts.section-departments')
    
    @endif
    <!-- ======= Doctors Section ======= -->
    @if ($hideshow[6]['hideshow']==1) 

    @include('frontend.layouts.section-doctors')

    @endif
    <!-- ======= Frequently Asked Questions Section ======= -->
    @if ($hideshow[7]['hideshow']==1) 

    @include('frontend.layouts.section-faq')
    
    @endif
    <!-- ======= Testimonials Section ======= -->
    @if ($hideshow[8]['hideshow']==1) 

    @include('frontend.layouts.section-testimonials')
    
    @endif
    <!-- ======= Gallery Section ======= -->
    @if ($hideshow[9]['hideshow']==1) 
    
    @include('frontend.layouts.section-gallery')
    
    @endif
    <!-- ======= Contact Section ======= -->
    @if ($hideshow[10]['hideshow']==1) 
    
    @include('frontend.layouts.section-contact')
    
    @endif
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')
</body>

</html>