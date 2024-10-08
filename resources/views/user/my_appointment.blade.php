<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="Site keywords here">
      <meta name="description" content="">
      <meta name='copyright' content=''>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Title -->
        <title>FEDERAL MEDICAL CENTER|KEFFI.</title>
      
      <!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
      
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Nice Select CSS -->
      <link rel="stylesheet" href="css/nice-select.css">
      <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
      <!-- Slicknav -->
      <link rel="stylesheet" href="css/slicknav.min.css">
      <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
      <!-- Datepicker CSS -->
      <link rel="stylesheet" href="css/datepicker.css">
      <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
      <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
      
      <!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
      
    </head>
    <body>
   
      <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
      
      <!-- Get Pro Button -->
      
   
      <!-- Header Area -->
      <header class="header" >
         <!-- Topbar -->
         <div class="topbar">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-5 col-12">
                     <!-- Contact -->
                     <!-- <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                     </ul> -->
                     <!-- End Contact -->
                  </div>
                  <div class="col-lg-6 col-md-7 col-12">
                     <!-- Top Contact -->
                     <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+234 80 3234 56789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@fMckeffi.gov.ng">info@fMckeffi.gov.ng</a></li>
                     </ul>
                     <!-- End Top Contact -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Topbar -->
         <!-- Header Inner -->
         <div class="header-inner">
            <div class="container">
               <div class="inner">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                           <a href="{{ url('/') }}"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                     </div>
                     <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                           <nav class="navigation">
                              <ul class="nav menu">
                                 <li class="active"><a href="{{ url('/') }}">Home </i></a>
                                    
                                 </li>

                                 <li><a href="contact.html">About Us</a></li>
                                 <li><a href="{{url('service')}}">Services <i class="icofont-rounded-down"></i></a>
                                 </li>
                                 <li><a href="#">Contact </a>
                                    
                                 </li>
                                 <li><a href="contact.html">Career</a></li>
                                  @if  (Route::has('login'))@auth
                                  <li><a href="{{url('my_appointment')}}" class="btn btn-success text-white">Appointment History</a></li>
                                  @else
                                  <li></li>
                                  @endauth
                                  @endif

                                 <!-- <li>
                           <a href="{{route('register')}}" class="btn btn-success text-white">Register</a>
                        </li> -->
                              </ul>
                           </nav>
                        </div>
                        <!--/ End Main Menu -->
                     </div>
                        

                     @if (Route::has('login'))

                     @auth

                     <x-app-layout>
    
                     </x-app-layout>
                     
                     @else
                     <div class="col-lg-2 col-12">
                        <div class="get-quote">
                           <span><a href="{{route('login')}}" class="btn">Login</a>

                            <li>
                           <a href="{{route('register')}}" class="btn btn-success text-white">Register</a>
                        </li>
                     </span>
                        </div>

                       

                     <!-- <div class="col-lg-2 col-12">
                        <div class="get-quote">
                           <a href="" class="btn">View Appointmet History</a>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         @endauth
         @endif
         <!--/ End Header Inner -->
      </header>

<div class="container" style="padding: 50px;">
	<table class="table" class="table table-bordered" class="table table-striped" align="center"  >
  <thead>
    <tr style="background-color:greenyellow; color: white;">
      <th scope="col">CLIENT NAME</th>
      <th scope="col">PHONE</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">DATE</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>


    </tr>
  </thead>
  <tbody>

  	@foreach ($appoint as $appoints)
    <tr>
      <td>{{$appoints->name}}</td>
      <td>{{$appoints->phone}}</td>
      <td>{{$appoints->department}}</td>
      <td>{{$appoints->date}}</td>
      <td>{{$appoints->message}}</td>
      <td>{{$appoints->status}}</td>
      <!-- <td><a href="{{url('cancel_appoint',$appoints->id)}}" class="btn btn-danger" style="background-color: darkred; color:white;" onclick="return confirm('Are you sure to Cancel appointment?')">Cancel</a></td> -->
      <td>
  @if (!in_array($appoints->status, ['approved', 'Canceled']))
    <a href="{{url('cancel_appoint',$appoints->id)}}" class="btn btn-danger" style="background-color: darkred; color:white;" onclick="return confirm('Are you sure to Cancel appointment?')">Cancel</a>
 @else
    @if ($appoints->status == 'Canceled')
        <span style="color: green;">DOCTOR NOT AVAILABLE ON THIS DATE</span>
    @endif
    @if ($appoints->status == 'approved')
        <span style="color: green;">YOUR APPOINMENT HAS BEEN COMFIRMED<br><br>CHECK EMAIL FOR MORE DETAILS</span>
    @endif

  @endif
</td>



</tr>
@endforeach
  </tbody>
</table>

</div>
































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
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Main JS -->
      <script src="js/main.js"></script>
    </body>
</html>