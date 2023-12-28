<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodItem;

class AdminController extends Controller
{
    //
    public function addFood(Request $request){
        $foodItem = new FoodItem;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->image->move('foodimage', $imagename);
        $foodItem->image = $imagename;
        $foodItem->food_name = $request->food;
        $foodItem->food_price = $request->price;
        $foodItem->save();
        return redirect()->back()->with('message', 'Food item is added successfully');

    }
}
