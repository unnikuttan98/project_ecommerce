<?php 
include('hearder.blade.php');
?>
  <div class="container">
  	<div class="row justify-content-center">
       <div class="col-md-6">
       	  <div class="card">
       	  	  <div class="card-header">
       	  	  	<h4>
       	  	  		Sign in
       	  	  		<a href="code.php" class="btn btn-danger float-end">BACK</a>       	
       	  	  	</h4>
       	  	  </div>
       	  	    <div class="card-body"></div>
                   <form action="code.php"method="post">
                       <div class="form-group mb-3">
                         <label for="">First Name</label>
                         <input type="text" name="first_name" class="form-control">
                       </div>
                       <div class="form-group mb-3">
                         <label for="">Last Name</label>
                         <input type="text" name="last_name" class="form-control">
                       </div>
                        <div class="form-group mb-3">
                         <label for="">Email Address</label>
                         <input type="email" name="email" class="form-control">
                       </div>
                       <div class="form-group mb-3">
                         <label for="">Phone number</label>
                         <input type="number" name="phone" class="form-control">

                       </div>
                       <div class="form-group mb-3">
                         <label for="">Password</label>
                         <input type="password" name="pass" class="form-control">

                       </div>
                         
                          <div class="form-group mb-3">
                            <button type="submit" name="save_details" class="btn btn-primary">Save details</button>
                         </div>
                   </form>
       	  </div>
       </div>
  	</div>
  	
  </div>
  <?php 
include('includes/footer.php');

?>