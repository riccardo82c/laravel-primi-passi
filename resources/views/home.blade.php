@extends('layout.template')

@section('titolo','home')
	 
@section('central-section')
	 <main class="full-heigth">
		<div class="container">
			<div class="center-container">
				<h1>La Molisana</h1>
				<h2>Scopri i nostri Prodotti</h2>
				<button class="btn-cta"><a href="{{route('prod')}}">Scopri Ora</a></button>
			</div>
		</div>
	</main>
@endsection
