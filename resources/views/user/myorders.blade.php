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
          <a class="navbar-brand" href="index.html"><h2>Shelby <em>Electronics</em></h2></a>
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
    <div align="center" style="padding:100px;">
            <table style="border-collapse: collapse; width: 80%; margin-bottom: 20px; border: 2px solid #DAA520;">
                        <tr  align="center" style="background-color: #333; color: white;">
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Customer name</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">phone</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Address</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Product title</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">price</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">quantity</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">reciept</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">status</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">action</td>
                            @foreach($myorder as $orders)
                        <tr align="center" style="background-color: #000; color: white;">
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->name}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->phone}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->address}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->product_name}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->price}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->quantity}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">
                              <img height="100 px" width="100 px" src="/productimage/{{$orders->reciept}}">
                            </td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->status}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;"> 
                           <a class="btn btn-danger" href="{{url('delete',$orders->id)}}">
                            Delete</a> 
                          </td>
                        </tr>
                        @endforeach
                        </tr>
                        
                    </table>

                    
                    <h3 style="margin:25px;">"IF YOU HAVE ALREADY UPLOADED THE RECIEPT SUCCESFULLY THE 
                    STATUS WILL CHANGE FROM <i><b>NOT PAID</b></i> TO <i><b>PAID</b></i> VERRY SOON </br> WE ARE PROCESSING YOUR TRANSACTION, 
                    WE WILL CALL YOU SOON TO RECIEVE YOUR DELIVERY
                    ,</br>IF NO CHANGES FOR MORE THAN 30MINUTES FEEL FREE TO CONTACT US"<h3>

    
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
