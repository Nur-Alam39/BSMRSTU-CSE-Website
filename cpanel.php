<?php
	$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
	session_start();
	if(!isset($_SESSION['id']))
	{
		header('location:adminlogin.php');
	}
?>
<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>BSMRSTU CSE</title>
	<link rel="icon" href="logo1.jpg" />
	<link rel="stylesheet" href="style.css" media="all" />
	<link rel="stylesheet" href="animate.css" media="all" />
	<script src="jquery.js" type="text/javascript"></script>
	<script src="jquery3.js" type="text/javascript"></script>
	<script src="datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="viewportchecker.js" type="text/javascript"></script>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
	<link rel="stylesheet" href="datepicker/css/datepicker.css"/>
	<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	<script src="scripts.js" type="text/javascript"></script>
 <body>
	<?php
		$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
		$id=$_SESSION['id'];
		$sql="select * from admin where id='$id'";
		$result = mysqli_query($connect,$sql);
		$row=mysqli_fetch_array($result);
	?>
	<div class="row" style="margin:0;padding:0;width:100%;;height:auto;">
		<div class="col-lg-12" style="list-style:none;background-attachment:fixed;text-align:center;color:black">
			<li style="font-size:1.77vw;">BANGABANDHU SHEIKH MUJIBUR RAHMAN SCIENCE & TECHNOLOGY UNIVERSITY</li>
			<li style="font-weight:bold;font-size:2.5vw;margin-top:%;">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</li>
		</div>
	</div>
	<div class="container-fluid text-center" style="margin:0;padding:0;width:100%;;height:auto;margin-top:2%;">
		<h4>Control Panel</h4>
		<div class="row" style="list-style:none;background-attachment:fixed;text-align:;color:black;margin:0;padding:0;">
			<div class='col-lg-4' style='color:black;margin-left:2%;text-align:left;'>
				<p style=''>Admin: <?php echo $row['Name']?></p>
				<a href='index.php' style='text-decoration:underline'>Home</a>
				<a href='logout.php' style='text-decoration:underline;margin-left:2%;'>Logout</a>
			</div>
		</div>
	</div>
	<style>
		.col-lg-1,.col-lg-2{padding:0.5%;margin-left:1%;margin-top:0.5%;color:white;}
		.col-lg-1,.col-lg-2 a{color:white;}
	</style>
	<div class='container-fluid row'  style="margin:0;padding:1%;width:100%;;height:auto;margin-top:2%;background-color:#f2f2f2;">
		<a class="btn btn-success col-lg-1" href='newspage.php' style=''>Insert News</a>
		<a class="btn btn-primary col-lg-1" href='newspage.php'>Insert Notice</a>
		<a class="btn btn-secondary col-lg-1" href='newspage.php' >Insert Events</a>
		<a class="btn btn-success col-lg-2" href='newspage.php' >Update Routine</a>
		<a class="btn btn-info col-lg-2" href='gallary_cpanel.php' >Upadte Gallary</a>
		<a class="btn btn-warning col-lg-2" href='newspage.php' >Update Teacher Info</a>
		<a class="btn btn-danger col-lg-2" href='newspage.php' >Update Club Info</a>
	</div>
	<div class='container-fluid row'  style="margin:0;padding:1%;width:100%;;height:auto;margin-top:%;background-color:#f2f2f2;">
		<a class="btn btn-dark col-lg-2"  href='newspage.php' >Update Achievement</a>
		<a class="btn btn-primary col-lg-2" href='newspage.php' >Update Research</a>
		<a class="btn btn-secondary col-lg-1" href='newspage.php'>Add form</a><br>
	</div>
 </body>
</html>	