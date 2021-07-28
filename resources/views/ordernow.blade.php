@extends('master')
@section("content")
<div class="costum-product">
<div class="col-sm-10"
    <div class="col-sm-4">
    
<div class="trending-wrapper">
    
    <h4>Result for Products</h4>
    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    @foreach($products as $item)
    <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
        <a href="detail/"{{$item->id}}">
        <img class="trending-image"src="{{$item->gallery}}">
        </a>
        </div>
        <div class="col-sm-4">
        
        <div class="">
          <h2>{{$item->name]}}</h2>
          <h5>{{$item->description}}</h5>
</div>
        </a>
        </div>
        <div class="col-sm-3">
       <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
        </div>
       
</div>  
     @endforeach

<div>
</div>
	</div>
    @endsection@extends('master')
@section("content")
<div class="costum-product">
<div   <table class="table">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>  <tr>
        <td>Total amount</td>
        <td>$ {{$total+10}}</td>
      </tr>

    </tbody>
  </table>class="col-sm-10">

</div>
	</div>
    <div>
    <form action="/orderplace" method="post">
    @csrf
  <div class="form-group">
    
    <textarea name="address" placeholder="enter your address" class="form-control" "></textarea
  </div>
  <div class="form-group">
  <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
    </div>
</div>
</div>
    @endsection