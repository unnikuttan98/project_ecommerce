@extends('master')
@section("content")
<div class="container">
    <div class="row">
<div class="col-sm-6">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2>{{$product['name']}}</h2>
    <h3>Price : {{$product['price']}}</h3>
    <h4>Details: {{$product['description']}}</h4>
    <h4>catogory: {{$product['catogory']}}</h4>
    <br><br>
   <form action="/add_to_cart" method="post">
       @srf
       <input type="hidden" name="product_id" value={{$product['id']}}>
    <br><br>
    <button class="btn btn-success">Buy Now</button>
    <br><br>
<div>
	</div>
    @endsection