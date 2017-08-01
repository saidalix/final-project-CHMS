<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CHBMS</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>JOSE MARIA HARDWARE CENTER</span>Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
              <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
              
    </div><!-- /.container-fluid -->
  </nav>
    
  
    <!--menu start here -->
    <?php include ("menu.php"); ?>

  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"> Edit Inventory</h1>
      </div>
    </div><!--/.row-->
        
    
            
           
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">UPDATE YOUR DATABASE</div>
          <div class="panel-body">
                <form id="form1" name="form1" method="get" action="update.php">
<label>

<table width="111%" border="0" align="center">
  <tr>
    <td width="22%"><strong>Item Name:</strong></td>
    <td width="25%"><input name="Item_name" type="text" id="Item_name" value=" <?php echo $row["Item_name"]; ?>" /></td>
    <td width="6%">&nbsp;</td>
    <td width="17%"><strong>Quantity:</strong></td>
    <td width="30%"><input name="quantity" type="text" id="quantity" value=" <?php echo $row["quantity"]; ?>" /></td>
  </tr>
  <tr>
    <td width="22%">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Price: </strong></td>
    <td><label>
      <input name="uprice" type="text" id="uprice" value=" <?php echo $row["uprice"]; ?>" />
    </label>
      <input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" /></td>
    <td>&nbsp;</td>
    <td><strong>Date:</strong></td>
    <td><input name="date_of_entry" type="text" id="date_of_entry" value=" <?php echo $row["date_of_entry"]; ?>" /></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="32"><strong>Other Details :</strong></td>
    <td><input name="other_details" type="text" id="other_details" value=" <?php echo $row["other_details"]; ?>" /></td>
    <td>&nbsp;</td>
    <td><strong>Quantity Sold :</strong></td>
    <td><input name="quantity_sold" type="text" id="quantity_sold" value=" <?php echo $row["quantity_sold"]; ?>" /></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="22"><strong>Quantity Stored :</strong></td>
    <td><input name="quantity_stored" type="text" id="uprice3" value=" <?php echo $row["quantity_stored"]; ?>" /></td>
    <td>&nbsp;</td>
    <td><strong>Total Price:</strong></td>
    <td><input name="totol_price" type="text" id="totol_price" value=" <?php echo $row["totol_price"]; ?>" /></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="4"><input type="submit" name="Submit" value="Update" /></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>
<label></label>
</p>
<p>&nbsp;</p>
</form>


          </div>
        </div>
      </div>
    
    
  </div><!--/.main-->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap-table.js"></script>
  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){      
        $(this).find('em:first').toggleClass("glyphicon-minus");    
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
</body>

</html>
