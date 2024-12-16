<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
            <!-- custom css file link -->
            <link rel="stylesheet" href="/style.css">
            <link rel="stylesheet" href="./CSS/inscri.css">
</head>

@if (session()->has('message'))
    <div class="alert alert-success" role="alert">
    {{session('message')}}
</div>
    @endif
    <body>
        
    <div class="titre">
<h1>INSCRIPTION </h1>
</div>
    <div class="form">
    <form action="{{route('create')}}" method="post">
        @csrf
    <p>Nom :</p>
    <input type="text" name="name" id="nom" placeholder="Enter votre nom">
    @error('name')
        <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <p>Prenoms :</p>
    <input type="text" name="prenom" id="prenom" placeholder="Enter votre prénoms">
    @error('prenom')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    <p>E-mail :</p>
    <input type="email" name="email" id="email" placeholder="Enter votre email">
    @error('email')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    <p>telephone :</p>
    <input type="number" name="telephone" id="telephone " placeholder="Enter votre telephone ">
    @error('telephone')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    <p>password :</p>
    <input class="dd" type="password" name="password" id="password" placeholder="Enter votre password">
    @error('password')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    <p>Age :</p>
    <input type="number" name="age" id="age" placeholder="Enter votre age">
    @error('age')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    <p>Vous étes :</p>
    <label for="sexe">Sexe :</label>
    <select name="sexe" id="sexe">
        <option value="homme">homme</option>
        <option value="femme">Femme</option>
    </select>
    @error('sexe')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
     <br><br>
    <input class="foop" type="submit" value="Envoyez">
    <input class="foop" type="reset" value="Effacer">
</form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>