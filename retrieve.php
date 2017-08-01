<?php
include_once("connection.php");
if(isset($_POST['submit'])){
	$a=$_POST['IID'];
	$b=$_POST['Item_name'];
	$c=$_POST['uprice'];
	$d=$_POST['quantity'];
	$e=$_POST['date_of_entry'];
	$f=$_POST['other_details'];
	$g=$_POST['quantity_sold'];
	$h=$_POST['quantity_stored'];
	$i=$_POST['totol_price'];
	$h=$d;
	
	if(mysql_query("INSERT INTO inventory_tbl(IID,Item_name,uprice,quantity,date_of_entry,other_details,quantity_sold,quantity_stored,totol_price) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')")){
		echo "The product has been added successfull";
		header("Location:inventory.php");
		if($d>=5){
			?> 
         <script>alert('This '$d' is less than 5 in the store .');</script>
         
		<?php 
		}
	}
	else{
		echo "oops!!! the transaction failled. Try again";
	}
}

?>