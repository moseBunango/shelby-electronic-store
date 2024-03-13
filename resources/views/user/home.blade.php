<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>shelby electronics store</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/shelbylogo.png') }}">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
    /* Your custom styles for the button */
    .btn.btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    /* Additional styles specific to your needs */
    .btn.btn-success:hover {
        /* Add hover styles if needed */
    }
    .btn.btn-primary {
        color: #fff;
        background-color:rgb(184, 134, 11);
        border-color: gold;
    }
    
    footer {
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
        color: #333; 
        font-family: 'Arial', sans-serif;"
    }

</style>


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href=""><h2>Shelby <em>Electronics</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#our products">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact us">Contact Us</a>
              </li>
              <li class="nav-item">

              @if (Route::has('login'))
                    @auth

                    <li class="nav-item">
                <a class="nav-link  btn btn-outline-light" href="{{url('showcart')}}">My Cart[{{$count}}]</a>
              </li>

              <li class="nav-item">
                <a class="nav-link  btn btn-outline-light" href="{{url('myorder')}}">My orders[{{$count}}]</a>
              </li>
              
                    <x-app-layout>
    
                    </x-app-layout>
                     

                    @else
                        <li><a href="{{ route('login') }}" class="nav-link btn btn-outline-light" style="margin-right: 10px;" >Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}"  class="nav-link filled-button" >Register</a></li>
                        @endif
                    @endauth
            @endif

              </li>
            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))
    <div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">
        {{ session()->get('message') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                document.getElementById('auto-dismiss-alert').style.display = 'none';
            }, 5000); // Adjust the time in milliseconds (e.g., 5000 for 5 seconds)
        });
    </script>
@endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.products')

    <div id="about us" class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About shelby electronics</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4 style="color:rgb(184, 134, 11);">Looking for the best products?</h4>
              <p style="font-size: 15px; color: #333; font-family: 'Arial', sans-serif;">
    Welcome to <b>Shelby Electronics Store</b>, your go-to destination for top-quality electronics components,
    modern bulbs, and cutting-edge electronic solutions that bring innovation to your home. Explore our curated collection
    of premium products designed to elevate your living space. Transform your home with the latest in technology and style.
    Shelby Electronics Store - where excellence meets innovation.
</p>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/what we do.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4 style="color:rgb(184, 134, 11);">Who we are &amp; What we do?</h4>
              <p style="font-size: 15px; color: #333; font-family: 'Arial', sans-serif;">At Shelby electronics store, we take pride in offering a diverse range of electronics components 
                 to enhance your living experience. Our commitment is to deliver top-tier products that seamlessly blend technology with elegance.
                  Explore a world of possibilities with shelby electronics store, your trusted source for electronic excellence</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4 style="color:rgb(184, 134, 11);">About our office</h4>
              <p style="font-size: 15px; color: #333; font-family: 'Arial', sans-serif;">Located at Dar es Salaam, Kigamboni, Ferry Area, shelby electronics store is more than just a store; we're a hub of innovation. 
                 Visit us and discover the intersection of technology and style</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div id="contact us" class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="message" name="message" action="{{url('send message')}}" method="post">
              @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2024 Shelby electronics store. Co. tz</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
