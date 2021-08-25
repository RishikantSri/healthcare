
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>{{$hideshow[5]['heading']}}</h2>
          <p>{{$hideshow[5]['subheading']}}</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
            @foreach ( $departments as $info )
              <li class="nav-item">
                <a class="nav-link {{ ($info->id == 1) ? 'active show' : '' }} " data-toggle="tab" href="#{{$info->slug}}">{{$info->name}}</a>
              </li>
            
            @endforeach
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0"> 
            <div class="tab-content">
            
            @foreach ( $departments as $info )
             
              <div class="tab-pane {{ ($info->id == 1) ? 'active show' : '' }} " id="{{$info->slug}}">
              <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>{{$info->name}}</h3>
                      <p class="font-italic">{{$info->heading}}</p>
                      <p>{{$info->description}}</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src=" {{ Voyager::image( $info->image ) }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div> 
              @endforeach
             
              
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
