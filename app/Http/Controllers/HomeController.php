<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\cart;
use App\Models\Order;
use App\Models\messages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function redirect(){
        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else{
            $data=product::paginate('6');
            $user=auth()->user();
            $count=cart::where('phone',$user->phone_number)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function index(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data=product::paginate('6');
            
            return view('user.home',compact('data'));
        }
       
    }

    public function search(Request $request){

        $search=$request->search;

        if($search==''){
            $data=product::paginate('6');
            return view('user.home',compact('data'));
        }
        $data=product::where('title','like','%'.$search.'%')->get();

        return view('user.home',compact('data'));
    }

    public function addcart(Request $request,$id){
        if(Auth::id()){
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart();
            $cart->name=$user->name;
            $cart->title=$user->title;
            $cart->phone=$user->phone_number;
            $cart->address=$user->address;

            $cart->title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();
            return redirect()->back()->with('message','Product added to cart succesfully');
        }
        else{
            return redirect('login');
        }
    }

    public function showcart(){
        $user=auth()->user();
        $cart=cart::where('phone',$user->phone_number)->get();
         $count=cart::where('phone',$user->phone_number)->count();
         return view('user.showcart',compact('count','cart'));
    }

    public function deletecart($id){
        $data=cart::find($id);
        $data->delete();
         return redirect()->back()->with('message','Product removed succesfully');
    }

    public function deleteorder($id){
        $data=order::find($id);
        $data->delete();
         return redirect()->back()->with('message','Product removed succesfully');
    }
    public function confirmorder(Request $request){
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone_number;
        $address=$user->address;

        foreach ($request->productname as $key => $productname) {
            
            $order=new Order;

            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $reciept=$request->file;
            $imagename=time().'.'.$reciept->getClientOriginalExtension();
            $request->file->move('productimage',$imagename);
            $order->reciept=$imagename;

            $order->status='not paid';

            $order->save();
            
        }

        DB::table('carts')->where('phone',$phone)->delete();

        return redirect()->back()->with('message','Product ordered succesfully');
    }

    public function myorder(){
        $user=auth()->user();
        $myorder=order::where('phone',$user->phone_number)->get();
         $count=order::where('phone',$user->phone_number)->count();
         return view('user.myorders',compact('count','myorder'));
    }
    public function sendmessage(Request $request){
        $messages=new messages();
        $messages->message=$request->message;
        $messages->save();
        return redirect()->back()->with('message','Message sent succesfully');
    }
}
