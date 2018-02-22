@extends('layouts.front')
@section('content')
	<section class="slide">
		sdasda
	</section>

	<section class="row container category-product">
		<article class="special">
			<h2 class="is-text-center">Especiales</h2>
			<img src="images/banner-01.png" alt="">
		</article>
		<article class="products">
			<h2 class="col-16">Bebidas</h2>
			<div class="row justify-center">
				@for($i = 1 ; $i <= 6; $i++)
					<div class="product"><img src="images/imagen 0{{$i}}.png" alt=""></div>
			@endfor
		</article>
	</section>
@endsection