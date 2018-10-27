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
$userid = $_POST['userid'];

$sql = "select * from teacher_info where id=$userid";
$result = mysqli_query($connect,$sql);

$response = "<div>";
while( $row = mysqli_fetch_array($result) ){
	 $id = $row['id'];
	 $Name = $row['Name'];
	 $Designation = $row['Designation'];
	 $Present_address = $row['Present_address'];
	 $Permanent_Address = $row['Permanent_Address'];
	 $Education = $row['Education'];
	 $Experience = $row['Experience'];
	 $Research_interest = $row['Research_interest'];
	 $Publication = $row['Publication'];
	 $Image = $row['Image'];
	 $Email = $row['Email'];
	 $Phone = $row['Phone'];
 
 
	 $response .="<div class='row'>
						  <div class='col-md-3'>
							<img src='".$Image."' class='align-self-start mr-3' style='height:150px;width:150px;border-radius:50%;'/>
						  </div>
						  <div class='col-md-8' style='list-style:none'>
							<h4>".$Name."</h4>
							<li>".$Designation."</li>
							<li>Department of CSE,</li>
							<li>BSMRSTU</li>
						  </div>
					</div>";
				   
		$response .= "<div class='col-md-12' style='margin-top:2%;'>
						<ul class='nav nav-tabs' role='tablist'>
							<li class='nav-item'>
							  <a class='nav-link active' data-toggle='tab' href='#home'>Contact Information</a>
							</li>
							<li class='nav-item'>
							  <a class='nav-link' data-toggle='tab' href='#menu1'>Academic Information</a>
							</li>
							<li class='nav-item'>
							  <a class='nav-link' data-toggle='tab' href='#menu2'>Research Interest</a>
							</li>
							<li class='nav-item'>
							  <a class='nav-link' data-toggle='tab' href='#menu3'>Publications</a>
							</li>
						  </ul>
						  
						<div class='tab-content' style='overflow:auto;height:auto;'>
							<div id='home' class='container tab-pane active'><br>
							  
								<i href='".$Email."' class='fa fa-envelope'/>
								<label>".$Email."</label><br>
								<i href='".$Phone."' class='fa fa-phone'/>
								<label>".$Phone."</label>
								 <h5> Current Address </h5>
								 <p>".$Present_address." </p>
								 <h5> Permanent Address</h5>
								 <p>".$Permanent_Address." </p>
								<a href='#' class='fa fa-twitter'></a>
								<a href='#' class='fa fa-facebook'></a>
								<a href='#' class='fa fa-linkedin'></a>
							</div>
							<div id='menu1' class='container tab-pane fade'><br>
							  <h5> Education</h5>
							  <p> ".$Education."</p>
							  <h5> Experience</h5>
							  <p> ".$Experience."</p>
							</div>
							<div id='menu2' class='container tab-pane fade'><br>
							  <h3>Research Interest</h3>
							  <p> ".$Research_interest."</p>
							</div>
							<div id='menu3' class='container tab-pane fade'><br>
							  <h3>Publications</h3>
							  <div class='row'>
								<p>".$Publication."</p>
							  </div>
							</div>
						  </div>
				</div>";
}
$response .= "</div>";

echo $response;
exit;