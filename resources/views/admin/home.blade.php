<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Chiken</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <body>
       <div class="container admin">
        <div class="row admin-nav">
            <div class="col-sm-3 nav">
                <img src="images/chiken.jpg"/>
            </div>
            <div class="col-sm-7">
               <a href="#add" class="mt-5">Add Food Item</a>
            </div>
            <div class="col-sm-2">
                <x-app-layout>
  
                </x-app-layout>
                
            </div>
        </div>
        <div class="food" id="add">
            @if(session()->has('message'))
            <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">
X
</button>
                
{{session()->get('message')}}
            </div>

            @endif

            <form method="post" action="{{url('add_food')}}" enctype="multipart/form-data">
                @csrf
               
                   
                <div class="form-input-group">
                    <label for="food">Food Name</label>
                    <input type="text" name="food" placeholder="Enter food name" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="price">Food Price</label>
                    <input type="number" name="price" placeholder="Enter food price" class="form-control"/>
                </div>
                <div class="form-input-group">
                    <label for="image">Food Price</label>
                    <input type="file" name="image" placeholder="Enter food price" class="form-control"/>
                </div>
                <div class="form-input-group">
                    
                    <input type="submit" id="submit" class="btn" value="Submit"/>
                </div>
            </form>
        </div>
       </div>
       
        
    </body>
</html>