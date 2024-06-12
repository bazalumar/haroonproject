@extends('frontend.master')
@section('meta_title', ' Contact UAE Banking Sol - Get in Touch for Financial Services')
@section('meta_description', ' Reach out to UAEBankingSol for expert financial services and support. Contact us via phone, email, or visit our office for assistance with loans, credit cards, and more')


@section('title', 'Contact Us')

@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6>| Contact Us</h6>
                    <h2>Get In Touch With Our Agents</h2>
                </div>
                <p>Have questions or need assistance? Get in touch with our dedicated team at BankingSol. Whether you're interested in our services, have inquiries about your account, or need support with financial matters, we're here to help. Reach out to us via phone, email, or visit our office during business hours. Your satisfaction is our priority, and we look forward to assisting you every step of the way.</p>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="item phone">
                <img src="{{ asset('frontend-assets/images/phone_icons.png') }}" alt="" style="max-width: 52px;">
                <h6>
                    <a href="https://wa.me/971588328511" target="_blank">+971 588328511</a><br>
                    <span>Phone Number</span>
                </h6>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item email">
                <img src="{{ asset('frontend-assets/images/email-icon.png') }}" alt="" style="max-width: 52px;">
                <h6>
                    <a href="mailto:info@uaebankingsol.com" target="_blank">info@uaebankingsol.com</a><br>
                    <span>Business Email</span>
                </h6>
            </div>
        </div>
    </div>
</body>
</html>


            </div>
            <div class="col-lg-6">
                <form id="contact-form" action="{{ route('route-contact-submit') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Full Name</label>
                                <input type="text" name="full_name" id="name" value="{{old('full_name')}}" placeholder="Your Name..." autocomplete="on" required>
                                  @error('full_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email"  value="{{old('email')}}" placeholder="Your E-mail..." required>
                                 @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" value="{{old('subject')}}" placeholder="Subject..." autocomplete="on">
                                 @error('subject')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" value="{{old('message')}}" placeholder="Your Message"></textarea>
                                 @error('message')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
            <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
