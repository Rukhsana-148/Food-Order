
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Beuty</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <body>
        <div class="row home-top">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <ul>
                    @if (Route::has('login'))
                    @auth 
                    <li> <a href="{{ url('/dashboard') }}">Dashbard</a></li>
                    @else
                    <li> <a href="{{ url('/login') }}">Dashbard</a></li>
                    @if(Route::has('register'))
                    <li>  <a href="{{ url('/register') }}">Register</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </body>
    </html>