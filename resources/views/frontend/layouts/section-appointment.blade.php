
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{$hideshow[4]['heading']}}</h2>
          <p>{{$hideshow[4]['subheading']}}</p>
        </div>

              
        <form action="{{ route('appointment') }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('POST')
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="appointment_date" data-date-format="yyyy-mm-dd"  class="form-control datepicker" id="appointment_date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div> 
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                @foreach ( $departments as $info )
                
                <option value="{{ $info->slug }}">{{ $info->name }}</option>
                @endforeach
           
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                @foreach ( $doctors as $info )
                <option value="{{ $info->name }}">{{ $info->name }}</option>
                @endforeach
                
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          @endif
          @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
          @endif
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

   