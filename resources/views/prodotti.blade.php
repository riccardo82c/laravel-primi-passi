{{-- PARTE DI LOGICA --}}

@php

/* acquisisco da config l'array che mi ritorna e lo salvo in $cards */


@endphp

{{-- FINE PARTE DI LOGICA --}}

@extends('layout.template')

@section('titolo','prodotti')

@section('central-section')
<main>
	<div class="container">
		<div class="cards">

			@foreach ($flags as $flag)
				<div class='card-divider'>
					<h2> - {{$flag}} - </h2>
				</div>
					@foreach ($cards as $card)
						@if ($card['tipo'] == $flag)
							<div class='card'>
								<img src='{{$card['src']}}' alt='{{$card['titolo']}}'>
								<p class='titolo-card'>{{$card['titolo']}}</p>
							</div>
						@endif
					@endforeach
			@endforeach

		</div>
	</div>
</main>
@endsection
