@extends('layouts.master')
@section('style')
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">

@endsection
@section('content')

<div style="background: #11355f; min-height: 500px;"  class="text-dark" >
	
	<div class="container text-white pt-12 mx-auto">
		
		<h1 class="mb-2">Your Cart</h1>

		@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
		@endif

		@if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::content()) > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        <td class="table-image"><a href="{{ url('products', [$item->model->id]) }}"><img src="{{ asset('/storage/' . $item->model->path) }}" alt="product" style="width: 230px; height: 150px;" class="img-responsive cart-image"></a></td>
                        <td><a class="no-underline text-white" href="{{ url('shop', [$item->model->id]) }}">{{ $item->name }}</a></td>
                        
                        <td>${{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                               	@csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>
                        </td>
                    </tr>

                    @endforeach
              

                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">${{ Cart::subtotal() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
			
            <a href="{{ url('/#shop') }}" class="btn btn-primary btn-lg mb-12">Continue Shopping</a> &nbsp;
            <a href="{{ url('/order') }}" class="btn btn-info btn-lg mb-12">Complete order</a> &nbsp;

           {{--  <div style="float:right" class="mb-8">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
            </div> --}}

        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="/#shop" class="btn btn-primary btn-lg">Continue Shopping</a>

        @endif

	</div>
</div>

@include('partials/footer')
@endsection