@extends('master')
@section("content")
<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="register" method="post">
                @csrf
                <div class="form-group">					
					<label for="exampleInputEmail">User Name</label>
					<input type="text"  name="name" class="form-control" id="exampleInputEmail" placeholder="UserName">
				</div>
				<div class="form-group">					
					<label for="exampleInputEmail">Email address</label>
					<input type="email"  name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword">
				</div>
				<button type="submit" class="btn btn-default">Register</button>
			</form>
				</div>
				</div>
			
	</div>
	@endsection