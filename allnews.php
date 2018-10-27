<html>
	<head>
		<link rel="stylesheet" href="style.css" media="all" />
		<link rel="stylesheet" href="animate.css" media="all" />
		<script src="jquery.js" type="text/javascript"></script>
		<script src="viewportchecker.js" type="text/javascript"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
		<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	</head>
</html>
<?php
$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
$newsid = $_POST['newsid'];
$sql = "select * from news";
$result = mysqli_query($connect,$sql);

$response = "<div>";
while( $row = mysqli_fetch_array($result) ){
	 $Id = $row['id'];
	 $Date = $row['Date'];
	 $Time = $row['Time'];
	 $Image = $row['Image'];
	 $Details = $row['Details'];
	 $Headline = $row['Headline'];
	 $Author = $row['Author'];
 
	$response .="<div class='card mb-3'>
				  <div class='card-body'>
					<p class='card-text'><small class='text-muted'>".$Date."</small></p>
					<h4 class='card-title'>".$Headline."</h4>
					<img class='card-img-top' src='".$Image."' alt=''>
					<p class='card-text'>".$Details."</p>
				  </div>
				</div>";
 
	 
}
$response .= "</div>";

echo $response;
exit;