  @extends('frontend.master')
  @section('meta_title', 'UAE Banking Sol - Your Trusted Financial Services in UAE')
  @section('meta_description', ': UAE Banking Sol - Your trusted partner for personal loans, business loans, credit
      cards, and more in the UAE. Achieve your financial goals with ease')

  @section('content')
      <div class="main-banner sm-d-none">
          <div class="owl-carousel owl-banner ">
              <div class="item item-1">
                  <div class="header-text ">
                      <br>

                      <h2 class="mb-2">Hurry!<br>Get the funds you need when you need them</h2>
                      <p class="mt-4"><strong>
                              Your Trusted Financial Partner in Dubai
                          </strong></p>

                      <button onclick="window.location.href='{{ route('route-loan') }}'" class="category" type="button">Apply
                          for loan</button>
                  </div>
              </div>
              <div class="item item-2">
                  <div class="header-text">
                      <h2 class="mb-2">Fast approval and flexible terms tailored to your needs</h2>
                      <p><strong>Fuel Your Business Growth with Our Loans.</strong></p>

                      <button onclick="window.location.href='{{ route('route-loan') }}'" class="category"
                          type="button">Apply for loan</button>
                  </div>
              </div>
              <div class="item item-3">
                  <div class="header-text">
                      <h2 class="mb-2">Competitive rates and quick processing for all your financial needs</h2>
                      <p><strong>Low interest, fast approval loan, Minimum requirements</strong></p>

                      <button onclick="window.location.href='{{ route('route-loan') }}'" class="category"
                          type="button">Apply for loan</button>
                  </div>
              </div>
          </div>

      </div>
      <!-- ABOUT COMPANY -->
      <section>
          <div class=" section ">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="section-heading">
                              <h6>| ABOUT COMPANY |</h6>
                              <h2>Personal loans to fulfill your dreams</h2>
                              <div class="description">
                                  <div class="icon-bank-container">
                                      <div class="icon-bank">
                                          <i class="fa-solid fa-sack-dollar"></i>
                                      </div>
                                      <div>
                                          <p><b>We’re in this business since 2018 and we provide the best services.</b></p>
                                      </div>
                                  </div>
                                  <p>Get the funds you need to achieve your dreams. Our personal loans offer competitive
                                      rates, quick approval, and flexible repayment options. Whether it's for a vacation,
                                      debt consolidation, or unexpected expenses, we have you covered.</p>
                                  <div class="row">
                                      <div class="col-md-6 mt-4">
                                          <h6>Direct card payment</h6>
                                          <p class="mt-2">Your Best Choice for Credit Cards</p>
                                      </div>
                                      <div class="col-md-6 mt-4">
                                          <h6>Pay via UPN</h6>
                                          <p class="mt-2">Your Best Choice for Personal Loans</p>
                                      </div>
                                  </div>
                              </div>

                              <button onclick="window.location.href='{{ route('route-loan') }}'">Apply for loan</button>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="left-image d-lg-block">
                              <img src="{{ asset('frontend-assets/images/about-4-1.png') }}" alt=""
                                  style="width: 100%; height: auto; object-fit: cover;">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <!-- cards  -->

      <section>
          <div class="container card-section">
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card mt-4">
                          <i class="fa-solid fa-comments-dollar"></i>
                          <div class="card-body">
                              <h3 class="card-title pt-2">Safe and Secure Payments</h3>
                              <p class="card-text pb-2">Enjoy peace of mind with our safe and secure payment options.</p>

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card mt-4">
                          <i class="fa-solid fa-hand-holding-dollar"></i>
                          <div class="card-body">
                              <h3 class="card-title pt-2">Quick Payment Process</h3>
                              <p class="card-text pb-2">Experience hassle-free payments with our lightning-fast process.</p>

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card mt-4">
                          <i class="fa-solid fa-circle-dollar-to-slot"></i>
                          <div class="card-body">
                              <h3 class="card-title pt-2">No Payment Charges</h3>
                              <p class="card-text pb-2">Enjoy our services without worrying about extra fees.</p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>



      <!--
                  Quick Loan Order -->

      <section>
          <div class="section">
              <div class="container-fluid">
                  <div class="row video">
                      <div class="col-lg-6 col-md-12 p-0 d-none d-lg-block bg-image">
                          <img src="{{ asset('frontend-assets/images/imgg2.png') }}" alt="Video Thumbnail"
                              class="img-fluid">
                          <div class="section-heading">
                              <a href="#" target="_blank"><i class="fa fa-play"></i></a>
                              <h2>Hundreds of customers trust our company</h2>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-12 experts">
                          <div class="row">
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Expert & Certified</span></h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Quality Services</span></h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Status Monitor</span></h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Quick Loan Order</span></h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Status Monitor</span></h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                  <div class="item">
                                      <h6><span>Easy to Use

                                          </span></h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- brands owel slider -->
      <section id="brand" class="container-fluid p-0  ">
          <div class="row m-0 py-3 owl-carousel " style="background-color: rgb(194, 199, 199);">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item" src="{{ asset('frontend-assets/images/brand/1.png') }}"
                  alt="">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item" src="{{ asset('frontend-assets/images/brand/2.png') }}"
                  alt="">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item" src="{{ asset('frontend-assets/images/brand/3.png') }}"
                  alt="">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item"
                  src="{{ asset('frontend-assets/images/brand/4.png') }}" alt="">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item"
                  src="{{ asset('frontend-assets/images/brand/5.png') }}" alt="">
              <img class="img-fluid col-lg-2 col-md-4 col-sm-6 item"
                  src="{{ asset('frontend-assets/images/brand/6.png') }}" alt="">

          </div>

      </section>
      <!-- about company -->
      <section>
          <div class="team-boxed mt-4">
              <div class="container">
                  <div class="intro text-center">
                      <h6>| LOANS SERVICES|</h6>
                      <h4>We provide exceptional services for your personal loan needs</h4>
                  </div>
                  <div class="row my-4">
                      <div class="col-lg-4 col-md-6 col-sm-12 my-4">
                          <div class="card team-card">
                              <img src="{{ asset('frontend-assets/images/services/car-1.jpg') }}" class="card-img-top img-fluid"
                                  alt="Auto Car Loan">
                              <div class="card-body text-center team-card-body">
                                  <h5 class="card-title">Auto Car Loan</h5>
                                  <p class="card-text">Car Loan provide low interest many variations of passages of lorem
                                      ipsum have some..</p>
                                  <a href="{{ route('route-autocar-services') }}" class="btn team-btn">check Details</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12 my-4">
                          <div class="card team-card">
                              <img src="{{ asset('frontend-assets/images/services/credit.jpg') }}" class="card-img-top img-fluid"
                                  alt="Auto Car Loan">
                              <div class="card-body text-center team-card-body">
                                  <h5 class="card-title">Credit Card Loan</h5>
                                  <p class="card-text">Car Loan provide low interest many variations of passages of lorem
                                      ipsum have some..</p>
                                  <a href="{{ route('route-credit-services') }}" class="btn team-btn">check Details</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12 my-4">
                          <div class="card team-card">
                              <img src="{{ asset('frontend-assets/images/services/home.jpg') }}" class="card-img-top img-fluid"
                                  alt="Auto Car Loan">
                              <div class="card-body text-center team-card-body">
                                  <h5 class="card-title">Home Loan</h5>
                                  <p class="card-text">Car Loan provide low interest many variations of passages of lorem
                                      ipsum have some..</p>
                                  <a href="{{ route('route-home-services') }}" class="btn team-btn">check Details</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <!-- testimonial  -->

      <div class="testimonial py-4" style="background-color: #f1b7a5;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 ">
                      <div class="section-heading text-center">
                          <h6>| OUR TESTIMONIALS |</h6>
                          <h4 class="mt-3">See what our customers have to say about us</h4>
                      </div>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card e p-4">
                          <div class="d-flex flex-row">
                              <img src="{{ asset('frontend-assets/images/testimonial_1.jpg') }}"
                                  class="card-img-top circular--landscape" alt="Profile image">
                              <div class="text-center tittle-e">
                                  <h5 class="card-title mt-2">Sad bin Salman</h5>
                              </div>
                          </div>
                          <div class="card-body">
                              <span class="card-line"></span>
                              <p class="card-text">I couldn't be happier with the personal loan I received from UAE Banking
                                  Sol. The process was seamless, and the team was incredibly helpful every step of the way.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card e p-4">
                          <div class="d-flex flex-row">
                              <img src="{{ asset('frontend-assets/images/testimonial_2.jpg') }}"
                                  class="card-img-top circular--landscape" alt="Profile image">
                              <div class="text-center tittle-e">
                                  <h5 class="card-title mt-2">Jane Smith</h5>
                              </div>
                          </div>
                          <div class="card-body">
                              <span class="card-line"></span>
                              <p class="card-text">Applying for a business loan with UAEBankingSol.com was a breeze. Their
                                  rates are competitive, and the approval was quick. Highly recommended!</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card e p-4">
                          <div class="d-flex flex-row">
                              <img src="{{ asset('frontend-assets/images/testimonial_3.jpg') }}"
                                  class="card-img-top circular--landscape" alt="Profile image">
                              <div class="text-center tittle-e">
                                  <h5 class="card-title mt-2">Basma Jaffri</h5>
                              </div>
                          </div>
                          <div class="card-body">
                              <span class="card-line"></span>
                              <p class="card-text">I've had a fantastic experience with UAEBankingSol.com credit card
                                  services. The application process was straightforward, and I love the rewards program.
                                  It's the best credit card I've ever had.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--
                  
                fun factor -->


      <div class="fun-facts">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="wrapper">
                          <div class="row text-center">
                              <div class="col-lg-3 col-md-6 col-sm-12 my-3">
                                  <div class="counter">
                                      <h2 class="timer count-title count-number" data-to="1500" data-speed="1000">34</h2>
                                      <h6 class="count-text">Loans Approve</h6>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 my-3">
                                  <div class="counter">
                                      <h2 class="timer count-title count-number" data-to="45" data-speed="1000">45</h2>
                                      <h6 class="count-text">Expert People</h6>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 my-3">
                                  <div class="counter">
                                      <h2 class="timer count-title count-number" data-to="1700" data-speed="1000">67</h2>
                                      <h6 class="count-text">Happy Customers</h6>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 my-3">
                                  <div class="counter">
                                      <h2 class="timer count-title count-number" data-to="15" data-speed="1000">89</h2>
                                      <h6 class="count-text">Daily Approvals</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- news -->


      <div class="container new">
          <div class="row">
              <div class="col-lg-4 offset-lg-4">
                  <div class="section-heading text-center">
                      <h6>|WHAT WE’RE OFFERING |</h6>
                      <h3 class="mt-3">Our latest news updates & articles</h3>
                  </div>
              </div>
          </div>
          <div class="row news row-cols-1 row-cols-md-3 g-4">
              @forelse($vc_blogs as $blog)
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card">
                          <div class="card-img-holder">
                              <img src="{{ asset($blog->image) }}" alt="Blog image">
                          </div>
                          <h3 class="blog-title">
                              {{ $blog->title }}
                          </h3>
                          <span class="blog-time">{{ $blog->created_at->format('m/d/Y') }}</span>
                          {{-- <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis viverra turpis, non cursus
                          ex accumsan at. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore iusto accusamus
                          ipsa quia libero ut ratione magnam ad quaerat? Dignissimos adipisci reiciendis nesc
                      </p> --}}
                          <div class="options">
                              <span>Read Full Blog</span>
                              <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}" class="btn">Blog</a>
                          </div>
                      </div>
                  </div>
              @empty
                  <h5>No Blogs Found</h5>
              @endforelse
          </div>
      </div>



      </div>
      </section>

      <!-- quik bussines loan -->


      <section class="loan-section mt-3">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6 p-0 ">
                      <div class="loan-image"></div>
                  </div>
                  <div class="col-lg-6 p-0">
                      <div class="loan-content">
                          <ul class="loan-list">
                              <li><STRong>SIMPLE /</STRong> </li>
                              <li><STRong>TRANSPARENT /</STRong> </li>
                              <li><STrong>SECURE /</STrong></li>
                          </ul>
                          <h3>Get quick personal loans</h3>
                          <button class="loan-button" onclick="window.location.href='{{ route('route-loan') }}'">Apply
                              for loan</button>

                      </div>
                  </div>
              </div>
          </div>
      @endsection
