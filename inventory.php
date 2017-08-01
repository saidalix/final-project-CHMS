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
							<li><a href="logout.php?logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
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
				<h1 class="page-header">Inventory</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Add New Prodduct Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="connect.php" method="POST">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label"> Item Name</label>
									<div class="col-md-9">
									<input id="Item_name" name="Item_name" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">United Price</label>
									<div class="col-md-9">
										<input id="uprice" name="uprice" type="text" class="form-control">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">Quantity</label>
									<div class="col-md-9">
										<input id="quantity" name="quantity" type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Date</label>
									<div class="col-md-9">
										<input id="date_of_entry" name="date_of_entry" type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Recommandation</label>
									<div class="col-md-9">
										<textarea class="form-control" id="other_details" name="other_details" placeholder="More detail about the Item..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<span><button type="submit" class="btn btn-default btn-md pull-right" name="submit">Submit</button></span>
										<button type="reset" class="btn btn-default btn-md pull-right" name="Reset">Reset</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Retrieve Product Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="retrieve.php" method="POST">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label"> Item Name</label>
									<div class="col-md-9">
									<input id="Item_name" name="Item_name" type="text" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label">United Price</label>
									<div class="col-md-9">
										<input id="uprice" name="uprice" type="text" class="form-control">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">Quantity</label>
									<div class="col-md-9">
										<input id="quantity" name="quantity" type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Date</label>
									<div class="col-md-9">
										<input id="date_of_entry" name="date_of_entry" type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Recommandation</label>
									<div class="col-md-9">
										<textarea class="form-control" id="other_details" name="other_details" placeholder="More detail about the Item..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<span><button type="submit" class="btn btn-default btn-md pull-right" name="submit">Submit</button></span>
										<button type="reset" class="btn btn-default btn-md pull-right" name="Reset">Reset</button>
									</div>
									
										
									
								</div>
								
							</fieldset>
						</form>

		
						
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						     
						        <th>Item ID</th>
						        <th>Item Name</th>
						        <th>United Price</th>
						        <th>Quantity</th>
						        <th>Date of Entry</th>
						        <th>Other Details</th>
						        <th>Quantity Sold</th>
						        <th>Quantity Stored</th>
						        <th>Total Price</th>
						        <th>Action</th>

						    </tr>
						    </thead>
			    <?php
include ("connection.php");

$strquery="SELECT * from inventory_tbl";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$a=mysql_result($results,$i,"id");
$b=mysql_result($results,$i,"Item_name");
$c=mysql_result($results,$i,"uprice");
$d=mysql_result($results,$i,"quantity");
$e=mysql_result($results,$i,"date_of_entry");
$f=mysql_result($results,$i,"other_details");
$g=mysql_result($results,$i,"quantity_sold");
$h=mysql_result($results,$i,"quantity_stored");
$j=mysql_result($results,$i,"totol_price");
?>

<tr>
<td><?php echo $a ; ?></td>
<td><?php echo $b ; ?></td>
<td><?php echo $c ; ?></td>
<td><?php echo $d ; ?></td>
<td><?php echo $e; ?></td>
<td><?php echo $f; ?></td>
<td><?php echo $g; ?></td>
<td><?php echo $h; ?></td>
<td><?php echo $j; ?></td>

<td><?php echo " <a href='edit_invent.php?do=edit&id=" . $a . "'> edit </a> "; ?> | <?php echo " <a href='delete.php?id=" . $a . "'> delete </a> "; ?></td>


</tr>

<?php

  $i++;
  }
  ?>
  <tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>

</tr>
</table>
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
