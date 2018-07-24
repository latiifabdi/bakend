@extends('layouts.master')

@section('content')
	
	<div style="background: #11355f; min-height: 500px;"  class="text-dark" >
		
		<div class="container mx-auto">
			
			<div class="px-16 py-12">
				<div class="grid">
					<a href="/storage/{{ $product->path }}" data-lity>
						<img class="mb-8" style="width: 420px; height: 380px;" src="/storage/{{ $product->path }}">
					</a>
					<div>
						<h1 class="text-white mb-4">{{ $product->name }}</h1>
						<p class="text-white leading-loose mb-3">
							{{ $product->description }}
						</p>

						<span class="text-white font-bold">
							${{ $product->price }}
						</span>
						<form method="post" action="/cart">
							@csrf
							<input type="hidden" name="productId" value="{{ $product->id }}">
							<button class="no-underline py-3 px-6 shadow-lg bg-brand text-white rounded-lg block my-8 w-1/4">Add to Cart</button>
						</form>
					</div>
				</div>
			</div>

		</div>

	</div>
	
	<div id="app">
		<question></question>
	</div>
	@include('partials/footer')

@endsection