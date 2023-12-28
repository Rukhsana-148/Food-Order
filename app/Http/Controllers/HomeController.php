<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
class HomeController extends Controller
{

   public function redirect(){
    if(Auth::id()){
       if(Auth::user()->usertype=='0'){
         
         $food = FoodItem::all();
                return view('user.home', compact('food'));
       }else{
        return view('admin.home');
       }
    }else{
        return redirect()->back();
    }
   }

   public function placeorder(Request $request){
      $data = new order;
      $image = $request->image;
      $imagename = time() . '.' . $image->getClientoriginalExtension();
      $request->image->move('foodimage', $imagename);
      $data->image = $imagename;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;
      $data->food_name= $request->food_name;
      $data->food_price = $request->price;
      $data->save();
      return redirect()->back()->with('message', 'Your order  is placed successfully');
   }
   public function orderPage($id){
      $food = fooditem::find($id);
      return view('user.orderFood', compact('food'));
   }
   public function myorder(){
      if(Auth::id()){
           $user = Auth::user()->email;
           $order = order::where('email', $user)->get();
        return view('user.myorder', compact('order'));
      }else{
             return redirect()->back();
      }
         
       
   }

   public function cancelOrder($id){
      $order = Order::find($id);
      $order->delete();
      return redirect()->back();

   }

};


