<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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

            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

            <div style="padding:15px">
            <lable>product title</lable>
            <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
            </div>

            <div style="padding:15px">
            <lable>product price</lable>
            <input style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
            </div>

            <div style="padding:15px">
            <lable>product Description</lable>
            <input style="color:black;" type="text" name="description" value="{{$data->description}}" required="">
            </div>

            <div style="padding:15px">
            <lable>product quantity</lable>
            <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
            </div>

            <div style="padding:15px">
            <lable>Old Image</lable>
            <img height="100" width="100" src="/productimage/{{$data->image}}">
            </div>

            <div style="padding:15px">
            <lable>change Image</lable>
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