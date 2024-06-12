<footer class="footer-section ">
    <div class="container">

        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('frontend-assets/images/footer-logo.jpg') }}"
                                    class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>



                            <li><a href="{{ route('route-home') }}"
                                    class="{{ Request::routeIs('route-home') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('blogs.index') }}"
                                    class="{{ Request::routeIs('blogs.index') ? 'active' : '' }}">Blogs</a></li>
                            <li><a href="{{ route('route-services') }}"
                                    class="{{ Request::routeIs('route-services') ? 'active' : '' }}">services</a></li>

                            <li><a href="{{ route('route-contact') }}"
                                    class="{{ Request::routeIs('route-contact') ? 'active' : '' }}">Contact</a></li>


                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Company</h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('route-termcondtion') }}"
                                    class="{{ Request::routeIs('route-termcondtion') ? 'active' : '' }}">Terms&condition</a></li>
                            <li><a href="{{ route('route-policycondtion') }}"
                                    class="{{ Request::routeIs('route-policycondtion') ? 'active' : '' }}">privacy&policy</a>
                            </li>
                            <li><a href="{{ route('route-privacycondtion') }}"
                                    class="{{ Request::routeIs('route-privacycondtion') ? 'active' : '' }}"></a>
                            </li>



                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-contact">
                        <div class="footer-widget-heading">
                            <h3>Contact</h3>
                        </div>
                        <ul>
                            <li> <a href="mailto:info@uaebankingsol.com" target="_blank">
                            <li><i class="fa fa-envelope"></i> info@uaebankingsol.com</li>
                            </a></li>
                            <br>
                            <li> <a href="#" target="_blank">
                            <li><i class="fa fa-map"></i> Ras Al Khaima Free Zone UAE</li>
                            </a></li>
                            <br>
                            <li>
                                <a href="https://wa.me/971588328511" target="_blank">
                                    <i class="fab fa-whatsapp"></i> +971 588328511
                                </a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2018, All Right Reserved <a href="
                        #">bazal</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="{{ route('route-termcondtion') }}"
                                    class="{{ Request::routeIs('route-termcondtion') ? 'active' : '' }}">Terms&conditon</a></li>
                            <li><a href="{{ route('route-policycondtion') }}"
                                    class="{{ Request::routeIs('route-policycondtion') ? 'active' : '' }}">Privacy&policy</a>
                            </li>
                            <li><a href="{{ route('route-privacycondtion') }}"
                                    class="{{ Request::routeIs('route-privacycondtion') ? 'active' : '' }}">Policy</a>
                            </li>
                            <li><a href="{{ route('route-contact') }}"
                                    class="{{ Request::routeIs('route-contact') ? 'active' : '' }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
