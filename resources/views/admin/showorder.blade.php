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
        <div class="container-fluid page-body-wrapper">
             <div class="container" align="center">
             <table style="border-collapse: collapse; width: 80%; margin-bottom: 20px; border: 2px solid #DAA520;">
                        <tr align="center" style="background-color: #333; color: white;">
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Customer name</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">phone</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Address</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Product title</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">price</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">quantity</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">reciept</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">status</td>
                            <td style="padding: 15px; border-right: 1px solid #DAA520;">Action</td>
                            @foreach($order as $orders)
                        <tr align="center" style="background-color: #000; color: white;">
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->name}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->phone}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->address}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->product_name}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->price}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->quantity}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">
                         <a class="expandable-image" href="/productimage/{{ $orders->reciept }}" target="_blank">
                        <img height="100 px" width="100 px" src="/productimage/{{ $orders->reciept }}">
                        </a>
                        </td style="padding: 10px; border-right: 1px solid #DAA520;">
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">{{$orders->status}}</td>
                            <td style="padding: 10px; border-right: 1px solid #DAA520;">
                            <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Paid</a>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                        
                    </table>
     
             </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>