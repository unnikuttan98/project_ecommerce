
<?php

session_start();
include('dbcone.php');
 


if(isset($_POST['submit']))
{
$x=$_POST["uname"];
$y=$_POST["phn"];
$z=$_POST["eml"];
$a=$_POST["psw"];	
$postData [['name'][ 'phone']['email']['password']];
$ref_table="contacts";
$postRef_result = $database->getReference($ref_table)->push($postData);
}

if($postRef_result)
{
	$_SESSION['status']="login Succesfully";
	header('Location:ecommerce.php');
}
else
{
	$_SESSION['status']="login failed";
	header('Location:ecommerce.php');
}

?>
