
@extends('store.template')

@section('content')
<div class="container text-center"> 
	<div id="products">
		@foreach($products as $product)
		<div class="product white-panel">
			<h3>{{ $product->titulo }}</h3><hr>
			<img src = "{{ $product->image }}" width="200">
			<div class="product-info panel">
				<p> {{ $product->descripcion }}</p>
				<p> Precio : ${{ number_format($product->precio,2) }} </p>
				<p>
					<a class="btn btn-warning" href="{{ route('product-detail', $product->slug ) }}"> <i class="fa fa-cartplus"></i>Eliminar</a>
				</p>|
			</div>
		</div>
		
	@endforeach
	</div>
</div>
@stop
