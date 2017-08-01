<?php

include_once("connection.php");

if(isset($_POST['submit'])){
	$a=$_POST['OSID'];
	$b=$_POST['supplier_name'];
	$c=$_POST['email'];
	$d=$_POST['Item_name'];
	$e=$_POST['quantity'];
	$f=$_POST['amount'];
	$g=$_POST['date_of_payement'];
	$h=$_POST['message'];
	
	if(mysql_query("INSERT INTO payement_supl(PSID,supplier_name,email,Item_name,quantity,amount,date_of_payement,message) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')"))
	{
	
		echo "Thank you for Choosing us; your order will be proccessed soon!";
		header("Location:payement.php");
		
	}
	else
	{
	
		echo "oops!!! sorry, the transaction failled. Try again";
		
	}
}
?>