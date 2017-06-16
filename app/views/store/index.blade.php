
@extends('store.template')

@section('content')


{{-- {{{ isset($products) ? $products : 'Default' }}} --}}
	
	<div class="products">
		@foreach($products as $product)

		<div class="product">
			<h3>{{ $product->titulo }}</h3>	
			<img src = "{{ $product->image }}" width="250">
			<div class="product-info">
				<p> {{ $product->descripcion }}</p>
				<p> Precio : ${{ number_format($product->precio,2) }} </p>
				<p>
					<a href="#">Comprar</a>
				</p>
			</div>
		</div>
		
	@endforeach
	</div>
@stop
