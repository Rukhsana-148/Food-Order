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
       <div class="user ">
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
                    <x-app-layout>
  
                    </x-app-layout>
                </li>
              </ul>
                   
             
                
                
            </div>
        </div>
        <div class="myorder bg-secondary-500">
            <h4 class="h2 py-5 text-center">My Order</h4>
            <div class="row">
               <?php   $total = 0; ?>
                    @foreach ($order as $orders)
                    <?php
                  
                    $price = (int)$orders->food_price;
                    $total = $total+$price;
                    
                    ?>
                    <div class="col-sm-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <img src="foodimage/{{$orders->image}}"/>
                        </div>
                        <div class="card-footer">
                         <div class="row">
                            <div class="col-sm-6">{{$orders->food_name}}</div>
                          <div class="col-sm-6 buy">
                            <p class="text-small">{{$orders->food_price}} tk</p>      
                                            
                           
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 buy">
                                <form action="{{url('cancelOrder',  $orders->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$orders->id}}"/>
                                    <input type="submit" class="btn"  name="submit" value="Cancel Order"/>
                                    <form>
                                    
                           
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                       
                        </div>
                    </div>
                    </div>
                   
                    @endforeach
                  
                </div>
                
                <p>Total Money :<?php echo $total; ?> </p>
            </div>
           
       
        
        </div>
       </div>
    </body>
</html>