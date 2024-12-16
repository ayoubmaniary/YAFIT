<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
        <!-- custom css file link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="./CSS/show.css">
</head>
<body>
    <div class="box">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
    {{session('message')}}
</div>
    @endif
    <form action="">
        <h2>Sing In</h2>
        <div class="inputBox">
            <input type="email" required>
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required>
            <span>Enter Password</span>
            <i></i>
        </div>
        <input type="submit" value="Login">
        <div class="links">
            <a href="#">Forget Password</a>
            <a href="{{route('inscription')}}">SignUp</a>
        </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>