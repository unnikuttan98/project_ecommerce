<?php
function($x,$y)
$x=$_POST('uname');
$y=$_POST('psw');
echo "<center>  <button onclick='document.getElementById('id02').style.display="block"'>Signin</button>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title='Close Modal'>&times;</span>
'<h1>Succesfull<h1><br>Your Username is'$x'and password is'$y'
<div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class='cancelbtn'/>OK</button>
    </div></center>";
?>