<?php

include_once("connection.php");

if(isset($_POST['submit'])){
	$a=$_POST['ChID'];
	$b=$_POST['Emp_full_name'];
	$c=$_POST['Eemail'];
	$d=$_POST['message'];
	
	
	if(mysql_query("INSERT INTO chat_tbl(ChID,Emp_full_name,Eemail,message) VALUES ('$a','$b','$c','$d')"))
	{
	
		echo "Thank you for Choosing us; your order will be proccessed soon!";
		header("Location:chats.php");
		
	}
	else
	{
	
		echo "oops!!! sorry, the transaction failled. Try again";
		
	}
}
?>