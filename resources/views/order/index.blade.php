@extends('layouts.master')
@section('style')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
@endsection
@section('content')
<div style="background: #11355f; min-height: 500px;"  class="text-dark" >
    
    <div class="container text-white pt-12">
        
        
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">Your Order</h1>
                <form method="post" action="https://formspree.io/latiif607@gmail.com">
                    @foreach($products as $product)
                        <input type="hidden" name="product name" value="{{ $product->name }}">
                        <input type="hidden" name="product price" value="{{ $product->price }}">
                    @endforeach
                    <input type="hidden" name="_next" value="{{ url('/thanks') }}" />
                    <div class="mb-4">
                        <input type="text" id="name" name="name" placeholder="Your Full Name" class="form-control" style="width: 80%;">
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" placeholder="example@gmail.com" class="form-control" style="width: 80%;">
                    </div>
                    <div class="mb-4">
                        <input type="country" name="country" placeholder="Your country" class="form-control" style="width: 80%;">
                    </div>
                    <div class="mb-4">
                        <input type="city" name="city" placeholder="City" class="form-control" style="width: 80%;">
                    </div>
                    <div class="mb-4">
                        <input type="text" name="address" placeholder="Your Address" class="form-control" style="width: 80%;">
                    </div>
                    <div class="mb-4">
                        <input type="text" name="phone Number" placeholder="Your Number" class="form-control" style="width: 80%;">
                    </div>
                    <button class="text-center my-4 ml-12 btn btn-primary">Checkout</button>
                </form>
            
            </div>

            <div class="col-md-4">
                <div class="well">
                    <h1 class="mb-4">Summary</h1>
                    <table class="table">
                        <tr>
                            <th>Subtotal</th>
                            <td>${{Cart::subTotal()}}</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>${{ 0 }}</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>${{ Cart::subtotal() }}</td>
                        </tr>


                    </table>
                     
                </div>
            </div>
        </div>
        
    </div>
</div>
@include('partials/footer')
@endsection