<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="hi">
   <style type="text/css">
   
   .dropbtn{background-color: lightyellow;color: red;padding: 16px;font-family:Arial black; font-size: 16px;}
   .btn{background-color: lightyellow;color: red;padding: 16px;font-family: Arial black; font-size: 16px;}
   .dropdown-content{display: none;
    position: absolute;
    background-color: green;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;}
    .dropdown-content a{color:black;padding: 12px 16px;display: block;}
    .dropdown-content a:hover{background-color: #ddd;}
    .dropdown:hover .dropdown-content{display: block;}
    .div1{background-color: darkgrey;}
    input[type=text]
    {padding:10px; font-size: 20px;border: 1px solid grey;float:left;width: 40%;}
    input[type=password]
    {padding:10px; font-size: 20px;border: 1px solid grey;float:left;width: 40%;}
    .modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5px auto;
  border: 1px solid #888;
  width: 80%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.container input{ text-align: center; padding-left: 20px; }
button {background-color: lightyellow;color: red;padding: 16px;font-family:Arial black; font-size: 16px;}
h1{font-size: 300%;color: red;}
.scroll-menu{
  background-color: grey;overflow: auto;white-space: nowrap;
}
.scroll-menu a{display:inline-block;color: yellow;text-align: center;padding: 14px;text-decoration: none;}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>

</head>
<body>
  <div class="div1"><div class="dropdown">
    <button class="dropbtn">Catogories</button>
    <div class="dropdown-content">
      <a href="#">Accesries</a>
      <a href="#">Beauty products</a>
      <a href="#">Electronics</a>
      <a href="#">Furnitures</a>
      <a href="#">Shoes</a>
      <a href="#">Watches</a>
      <a href="#">Sports items</a>
      <a href="#">All catagories</a></div>
 <input type="image" name="kart" src="kart.png" height="60px" width="70px" align="center" >
  
    <button onclick="document.getElementById('id01').style.display='block'">Login</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="profile.php" ><center>
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

      <button onclick="document.getElementById('id02').style.display='block'">Signin</button>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>
<form class="modal-content animate" action="profile.php" ><center>
    <h1 align="center" >Signin</h1>
    <div class="container" align="center"><label >User name</label>
    <input type="text" placeholder="Enter Username" name="uname" align="center" ><br><br><br>
    Write Password<input type="password" placeholder="Enter Password" name="psw" align="center" ><br><br><br>
    Confirm password<input type="password" placeholder="Enter Password" name="psw" align="center" ><br><br><br>
       <button type="submit">Signin</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div></center>
  </form>
</div><img src="back.png" height="250px" width="100%">
  </div><input type="text" placeholder="Search.."></div>
  <div class="scroll-menu" >
    <a href="#" class="active">Home</a>
    <a href="#">Accesories</a>
    <a href="#">Beauty products</a>
    <a href="#">Electronics</a>
    <a href="#">Furniture</a>
    <a href="#">Shoes</a>
    <a href="#">Watches</a>
    <a href="#">Sports items</a>
  </div>
  <table>
    <tr><td>
<div class="card">
  <img src="Pn1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>LenovoIdea.</h1>
  <p class="price">Rs.29690.00</p>
  <p>Lenovo Idea Pad3 15IGL05.............................</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
<div class="card">
  <img src="Pn2.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Asus Rog.</h1>
  <p class="price">Rs.95525.00</p>
  <p>G17 Gaming...........................................</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
<div class="card">
  <img src="Pn3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Zebronicsvita</h1>
  <p class="price">Rs.4999.00</p>
  <p>PortableSpeaker......................................</p>
  <p><button>Add to Cart</button></p></div></td>
<td>
<div class="card">
  <img src="Pn4.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Redmi BH..</h1>
  <p class="price">Rs.399.00</p>
  <p>Redmi BHR54205W Wired  Earphone(black)with Microphone</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
    <td>
<div class="card">
  <img src="Pn5.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Fire Tv</h1>
  <p class="price">Rs.5999.00</p>
  <p>Fire Tv Stick 4k with Alexa voice Remote.............</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
</tr>
  <tr><td>
<div class="card">
  <img src="Pn6.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Smartdisplay.</h1>
  <p class="price">Rs.8499.00</p>
  <p>Introducing Echo Show 8-smart display with Alexa.....</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
<div class="card">
  <img src="Pn7.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Sparx men</h1>
  <p class="price">Rs.995.00</p>
  <p>Sparx Men SM-482 Sports Shoe.........................</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
<div class="card">
  <img src="Pn8.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Running.</h1>
  <p class="price">Rs.399.00</p>
  <p>Mens running shoe....................................</p>
  <p><button>Add to Cart</button></p></div></td>
<td>
<div class="card">
  <img src="Pn9.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Shoes.</h1>
  <p class="price">Rs.999.00</p>
  <p>Navyblue clogs shoes for men online..................</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
    <td>
<div class="card">
  <img src="Pn10.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Sparx shoes</h1>
  <p class="price">Rs.1328.00</p>
  <p>Sparx Mens SM626 Running shoes........................</p>
  <p><button>Add to Cart</button></p></div></td>
  <td>
</tr>
<?php include('profile.php');?>
    </body>
</html>