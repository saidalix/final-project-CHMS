<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);
$query="UPDATE ordering_supl SET supplier_name= '" . $_GET['supplier_name'] . "', email= '". $_GET['email'] ."', Item_name= '" . $_GET['Item_name'] . "', quantity= '" . $_GET['quantity'] . "', date_of_ordering= '" . $_GET['date_of_ordering'] . "', message= '" . $_GET['message'] . "' WHERE id='". $_GET['id'] ."' ";
$resul=mysql_query ($query);

header ('location:widgets.php'); 


?>
