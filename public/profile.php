  <button onclick="document.getElementById('id02').style.display='block'">Signin</button>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="ecommerce.php"  method="post"><center>
    <h1 align="center" >Login</h1>
    <div class="container" align="center"><label >User name</label>
    <input type="text" placeholder="Enter Username" name="uname" align="center" ><br><br><br>
     Password<input type="password" placeholder="Enter Password" name="psw" align="center" ><br><br><br>
       <button type="submit">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</center></form></div>
<?php
$x = $_POST['uname'];
$y = $_POST['psw'];
echo "You username ". $x . " " . $y. ".<br />";
echo "<h2 align='center'>succesfull</h2>";
?>