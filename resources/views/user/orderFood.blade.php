<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Online Food Order</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/all.min.css">
    <link rel="stylesheet" href="/style/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="/style.css">
    <script src="app.js"></script>
    <body>
       <div class="user text-white">
        <div class="row user-nav  bg-success text-white">
            <div class="col-sm-4">
               <img src="/images/chiken.jpg"/>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6 list">
              <ul>
                <li >
                    <a href="http://127.0.0.1:8000/home" class="px-5 font-mono text-xl text-gray-100" >Home</a>
                    
                </li>
                <li>
                    <a href="http://127.0.0.1:8000/myorder" class="px-5 font-mono text-xl  text-gray-100" style="margin-top: -75px">My Orders</a>
                    
                </li>
              
                <li>
                    <x-app-layout>
  
                    </x-app-layout>
                </li>
              </ul>
                   
             
                
                
            </div>
        </div>
<div class="order_form bg-secondary">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h4>Order Place</h4>
            @if(session()->has('message'))
            <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">
X
</button>
                
{{session()->get('message')}}
            </div>

            @endif
            <form method="post" action="{{url('place_order')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-input-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" class="form-control "  style="border-radius:10px; padding : 25px 10px"/>
                </div>
                <div class="form-input-group">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control"  style="border-radius:10px; padding : 25px 10px"/>
                </div>
                <div class="form-input-group">
                    <label for="name" class="form-label">Phone</label>
                    <input type="number" name="phone" placeholder="Enter your pgone number" class="form-control"  style="border-radius:10px; padding : 25px 10px"/>
                </div>
                <div class="form-input-group">
                    <label for="name" class="form-label">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" class="form-control"  style="border-radius:10px; padding : 25px 10px"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Name</label>
                    <input type="text" name="food_name" value={{$food->food_name}} placeholder="Enter your name" class="form-control" style="border-radius:10px; padding : 25px 10px"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Price</label>
                    <input type="text" name="price" value={{$food->food_price}} placeholder="Enter your name" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Image</label>
                    <input type="file" name="image"  value="{{$food->image}}"  class="form-control"/>
                    <img src="/foodimage/{{$food->image}}"/>
                </div>
                <input type="submit" name="submit" class="btn"/>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    
       </div>
    </body>