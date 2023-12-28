<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Chiken</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/style/all.min.css">
    <link rel="stylesheet" href="/public/style/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="/public/style.css">
    <script src="app.js"></script>
    <body>
       <div class="user ">
        <div class="row user-nav">
            <div class="col-sm-4">
               <img src="\public\images\chiken.jpg"/>
            </div>
            <div class="col-sm-6"></div>
            <div class="col-sm-2">
                <x-app-layout>
  
                </x-app-layout>
            </div>
        </div>
<div class="order_form">
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
            <form method="post" action="{{url('place_order')}}" enctype="multipart/form-data" >
                @csrf
                <div class="form-input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Phone</label>
                    <input type="number" name="phone" placeholder="Enter your pgone number" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Name</label>
                    <input type="text" name="food_name" value={{$food->food_name}} placeholder="Enter your name" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Price</label>
                    <input type="text" name="price" value={{$food->food_price}} placeholder="Enter your name" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="name">Food Image</label>
                    <input type="file" name="image"   class="form-control"/>
                    <img src="foodimage\{{$food->image}}"/>
                </div>
                <input type="submit" name="submit" class="btn"/>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    
       </div>
    </body>