<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <body>
       <div class="user">
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
        <div class="cart">
            <h4>Food List</h4>
            <div class="row">
                @foreach($food as $foods)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="foodimage/{{$foods->image}}"/>
                        </div>
                        <div class="card-footer">
                         <div class="row">
                            <div class="col-sm-6">{{$foods->food_name}}</div>
                          <div class="col-sm-6 buy"><p>{{$foods->food_price}} tk</p>      
                          
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 buy">
                                <a href="{{url('orderFood', $foods->id)}}"   class="btn" >Order Food</a>                 
                           
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                       
                        </div>
                    </div>
                </div>
               @endforeach
               
            </div>
        </div>
       
       </div>
    </body>
</html>