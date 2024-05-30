@section("content")
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <span class="breadcrumb"><a href="#">Home</a> / Apply for loan</span>
          <h3>Apply for loan</h3>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="contact-page section my-4">
    <div class="container">
        <div class="row">
         
            
            <div class="col-lg-12">
              
                <form id="contact-form" action="" method="post">
                    <div class="row">
                       <div class="col-lg-12 mb-4 ">
         <div class="text-center" >
             <h1 style="color: orangered">Loan Form</h1>
         </div>
          </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="subject">Mobile Number(+971)</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="subject">Nationality</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="service"> city</label>
                                <select name="service" id="service">
                                    <option value="consulting">Consulting</option>
                                    <option value="support">Support</option>
                                    <option value="custom">Custom Request</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="service"> Employment status</label>
                                <select name="service" id="service">
                                    <option value="consulting">Consulting</option>
                                    <option value="support">Support</option>
                                    <option value="custom">Custom Request</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="subject">employer / Company</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                            </fieldset>
                        </div>
                        
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="contact-time">Monthly Salary (AED)</label>
                                <select name="contact-time" id="contact-time">
                                    <option value="morning">Morning</option>
                                    <option value="afternoon">Afternoon</option>
                                    <option value="evening">Evening</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="email">Loan amount</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="contact-time">Type of Loan</label>
                                <select name="contact-time" id="contact-time">
                                    <option value="morning">Morning</option>
                                    <option value="afternoon">Afternoon</option>
                                    <option value="evening">Evening</option>
                                </select>
                            </fieldset>
                        </div>
                        
                        
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

  </section>

@endsection