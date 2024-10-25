<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div>
            <img class="logo"  src="{{asset ('img/fast-food.png')}}" alt="plat">
            <p>resturant</p>
    </div>
        <nav>
      <ul>
        <li><a href="/">accueil</a></li>
        <li><a href="{{route('carte')}}">plats</a></li>
        <li><a href="{{route('contact')}}">contact</a></li>   
      </ul>
        </nav>
    </header>
    @section ("content")
    @show
    <footer>
        <ul>
            <li><a href="#">fecbook</a></li>
            <li><a href="#">instgram</a></li>
            <li><a href="#">tiktok</a></li>
        </ul>
            <ul>
                
                <li>tous droit reéervés</li>
                <li><a href="#">mention légales</a></li>
            </ul>
        </footer>
</body>
</html>