<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function product(){

        return view('admin.product');
    }

    public function uploadproduct(Request $request){
        $data=new product;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product added succesfully');
    }
    public function showproduct(){

        $data=product::all();

        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id){

        $data=product::find($id);

        $data->delete();

        return redirect()->back()->with('message','Product Deleted');
    }

    public function updateview($id){

        $data=product::find($id);

        

        return view('admin.updateview',compact('data'));
    }

    public function updateproduct(Request $request,$id){
        $data=product::find($id);


        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product updated succesfully');
    }

    public function showorder(){

        $order=order::all();

        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id){

        $order=order::find($id);

        $order->status='paid';
        $order->save();
        return redirect()->back();
    }

}
