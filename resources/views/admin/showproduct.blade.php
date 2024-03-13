<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div style="padding-bottom:30px" class="container-fluid page-body-wrapper">
                <div class="container" align="center">

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

                    <table  style="border-collapse: collapse; width: 80%; margin-bottom: 20px; border: 2px solid #DAA520;">
                        <tr  align="center" style="background-color: #333; color: white;">
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Title</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Description</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Price</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Quantity</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Image</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">update</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">delete</td>
                        </tr>
                        @foreach($data as $product)
                        <tr align="center" style="background-color: #000; color: white;">
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$product->title}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$product->description}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$product->price}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$product->quantity}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;"><img height="100 px" width="100 px" src="/productimage/{{$product->image}}"></td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;"><a class="btn btn-primary" href="{{url('updateview',$product->id)}}">update</a></td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;"><a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>