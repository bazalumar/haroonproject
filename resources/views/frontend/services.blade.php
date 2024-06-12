

 @extends('frontend.master')
   @section('titte')
 services
 @endsection
@section("content")
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
  
          <h3>Services</h3>
        </div>
      </div>
    </div>
  </div>
  

  
  <section>
  <div class="team-boxed mt-4" >
    <div class="container">
      
    
      <div class="row my-4">
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-03.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Perosnal Loan</h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-personal-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-02.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Credit Card </h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-credit-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-03.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Business Loan</h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-business-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-01.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Auto Car Loan</h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-autocar-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-03.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Home Loan</h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-home-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6 col-sm-12 my-4">
          <div class="card team-card">
            <img src="{{asset('frontend-assets/images/card-03.jpg')}}" class="card-img-top img-fluid" alt="Auto Car Loan">
            <div class="card-body text-center team-card-body">
              <h5 class="card-title">Education Loan</h5>
              <p class="card-text">Car Loan provide low interest many variations of passages of lorem ipsum have some..</p>
              <a href="{{ route('route-education-services') }}" class="btn team-btn">check Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection