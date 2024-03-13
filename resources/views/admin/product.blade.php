<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type="text/css">

    .title{
        color:white;
        padding-top:25px;
        font-size:25px;
    }

    lable{
        display:inline-block;
        width:200px;
    }

   </style>

  </head>
  <body>
    
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <div class="container" align="center">
            <h1 class="title">Add product</h1>

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

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf

            <div style="padding:15px">
            <lable>product title</lable>
            <input style="color:black;" type="text" name="title" place holder="Enter product title" required="">
            </div>

            <div style="padding:15px">
            <lable>product price</lable>
            <input style="color:black;" type="number" name="price" place holder="Enter product price" required="">
            </div>

            <div style="padding:15px">
            <lable>product Description</lable>
            <input style="color:black;" type="text" name="description" place holder="Enter product description" required="">
            </div>

            <div style="padding:15px">
            <lable>product quantity</lable>
            <input style="color:black;" type="text" name="quantity" place holder="Enter product quantity" required="">
            </div>

            <label style="display: block; font-size: 18px; font-weight: bold; margin-bottom: 10px; color: #555;">Upload product Image</label>
            <div style="padding:15px">
            <input type="file" name="file">
            </div>

            <div style="padding:15px">
            <input class="btn btn-success" type="submit">
            </div>

            </form>

                </div>           
        </div>
        
          <!-- partial -->
        @include('admin.script')
  </body>
</html>