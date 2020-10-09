{{-- PARTE DI LOGICA --}}

@php

/* acquisisco da config l'array che mi ritorna e lo salvo in $cards */
$cards = config('db-prodotti');

/* dichiaro tre array vuoti e vi inserisco gli elementi dell'array $cards suddivisi per tipo*/

foreach ($cards as $card) {
	if ($card['tipo'] == 'lunga') {
		$lg[]= $card;
	} elseif ($card['tipo'] == 'corta') {
		$sm[]= $card;
	} elseif ($card['tipo'] == 'cortissima'){
		$xs[]= $card;
	}
}

/* Uso lo spread operator per inserire gli elementi di ogni array in un nuovo array */

$total = [...$lg,...$sm, ...$xs];
@endphp

{{-- FINE PARTE DI LOGICA --}}

@extends('layout.template')

@section('titolo','prodotti')

@section('central-section')
	 <main>
		<div class="container">
		<div class="cards">
		@php
			$flag = '';
			$currentFlag = true;
        
		@endphp	

			
		@foreach ($total as $item)
			

			@php 
				$currentFlag = $item['tipo'];
			if ($flag != $currentFlag) {  
					$flag = $item['tipo'];

					echo "<div class='card-divider'>
						
							<h2> - $flag - </h2>
							</div>";

					
			 }	@endphp	
		

			{{-- if ($flag == '' && $currentFlag) {
				$flag = $item['tipo'];
			}
			$flag == '' && $flag ? $flag = $item['tipo'], <h2>{{}}</h2> : ''; --}}

			
			<div class='card'>
				<img src='{{$item['src']}}' alt='{{$item['titolo']}}'>
				<p class='titolo-card'>{{$item['titolo']}}</p>
			</div>

			
			
			
		@endforeach
		</div>
		</div>
</main>
@endsection

