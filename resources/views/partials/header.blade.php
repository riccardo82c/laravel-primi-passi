<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>La Molisana</title>
</head>

<header>
	<div class="container">
	<nav>
		<img src="{{ asset('img/logo2.png') }}" alt="">
		<ul>
		<li><a href="{{route('home')}}" class="{{url()->current()==route('home') ? 'active' : ''}}">Home</a></li>
		<li><a href="{{route('prod')}}" class="{{url()->current()==route('prod') ? 'active' : ''}}">Prodotti</a></li>
		<li><a href="{{route('cont')}}" class="{{url()->current()==route('cont') ? 'active' : ''}}">Contatti</a></li>
		</ul>
	</nav>
</div>
</header>






