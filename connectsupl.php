<?php

include_once("connection.php");

if(isset($_POST['submit'])){
	$a=$_POST['OSID'];
	$b=$_POST['supplier_name'];
	$c=$_POST['email'];
	$d=$_POST['Item_name'];
	$e=$_POST['quantity'];
	$f=$_POST['date_of_ordering'];
	$g=$_POST['message'];
	
	if(mysql_query("INSERT INTO ordering_supl(OSID,supplier_name,email,Item_name,quantity,date_of_ordering,message) VALUES ('$a','$b','$c','$d','$e','$f','$g')"))
	{
	
		echo "Thank you for Choosing us; your order will be proccessed soon!";
		header("Location:widgets.php");
		
	}
	else
	{
	
		echo "oops!!! sorry, the transaction failled. Try again";
		
	}
}
?>