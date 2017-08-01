<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$strquery="UPDATE inventory_tbl SET Item_name= '" . $_GET['Item_name'] . "', uprice= '". $_GET['uprice'] ."', quantity= '" . $_GET['quantity'] . "', date_of_entry= '" . $_GET['date_of_entry'] . "', other_details= '" . $_GET['other_details'] . "', quantity_sold= '" . $_GET['quantity_sold'] . "',quantity_stored= '" . $_GET['quantity_stored'] . "', totol_price= '" . $_GET['totol_price'] . "' WHERE id='". $_GET['id'] ."' ";
$results=mysql_query ($strquery);

header ('location:inventory.php'); 

?>
