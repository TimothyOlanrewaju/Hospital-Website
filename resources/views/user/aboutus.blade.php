@include('user.nav')
    <!-- End Header Area -->
  
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Contact Us</h2>
              <ul class="bread-list">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Contact Us -->
    <section class="contact-us section">
      <div class="container">
        @if(session()->has('message'))
       <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" ariel-hidden="true">X</button>
          {{session()->get('message')}}
       </div>
       @endif
        <div class="inner">
          <div class="row"> 
            <div class="col-lg-6">
              <div class="contact-us-left">
                <!--Start Google-map -->
                <div id="myMap"></div>
                <!--/End Google-map -->
              </div>
            </div>
            <div class="col-lg-6">


              <div class="contact-us-form">
                <h2>Contact With Us</h2>
                <p>If you have any enquiries please fell free to contact with us.</p>
                <!-- Form -->
                <form class="form" method="post" action="{{url('contact_us')}}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required="">
                      </div>
                    </div>
                    
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required="">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required=""></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group login-btn">
                        <button class="btn" type="submit">Send</button>
                      </div>
                      
                    </div>
                  </div>
                </form>
                <!--/ End Form -->
              </div>
            </div>
          </div>
        </div>
        <div class="contact-info">
          <div class="row">
            <!-- single-info -->
            <div class="col-lg-4 col-12 ">
              <div class="single-info">
                <i class="icofont icofont-ui-call"></i>
                <div class="content">
                  <h3>+(234) 8023 56789</h3>
                  <p>info@fmckeffi.gov.ng</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
            <!-- single-info -->
            <div class="col-lg-4 col-12 ">
              <div class="single-info">
                <i class="icofont-google-map"></i>
                <div class="content">
                  <h3>2 Old keffi road  Road</h3>
                  <p>Keffi, Nasarawa State</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
            <!-- single-info -->
            <div class="col-lg-4 col-12 ">
              <div class="single-info">
                <i class="icofont icofont-wall-clock"></i>
                <div class="content">
                  <h3>Mon - Sunday: 24hrs</h3>
                  <p>247 Emergency Services</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Contact Us -->
    
    <!-- Footer Area -->
    <footer id="footer" class="footer ">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
                <!-- Social -->
                <ul class="social">
                  <li><a href="#"><i class="icofont-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                  <li><a href="#"><i class="icofont-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                  <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
                <!-- End Social -->
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer f-link">
                <h2>Quick Links</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>  
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Get Appointment</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Register</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Blog</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Open Hours</h2>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
                <ul class="time-sidual">
                  <li class="day">Monday - Friday <span>24/7</span></li>
                  <li class="day">Saturday <span>9.00-18.30</span></li>
                  <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                </ul>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Newsletter</h2>
                <p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                  <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Your email address'" required="" type="email">
                  <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                </form>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <!-- Copyright -->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="copyright-content">
                <p>© Copyright 2018  |  All Rights Reserved by <a href="fmckeffi.gov.ng" target="_blank">fmckeffi.gov.ng</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->
    
    <!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
        <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Google Map API Key JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
    <!-- Gmaps JS -->
    <script src="js/gmaps.min.js"></script>
    <!-- Map Active JS -->
    <script src="js/map-active.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    </body>
</html>