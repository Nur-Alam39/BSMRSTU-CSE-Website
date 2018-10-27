<?php
	$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
?>
<!doctype html>
<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>BSMRSTU CSE</title>
	<link rel="icon" href="logo.png" />
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
		<link rel="stylesheet" type="text/css" href="engine3/style.css" />
		<script type="text/javascript" src="engine3/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
	<style rel='stylesheet' type='text/css'>
		h4{font-weight:bold;color:red;}
			#text_effect {
				width: 60%;
				height: 20%;
				left:5%;
				top:35%;
				color:white;
				font-weight:bold;
				background-color: transparent;
				position: relative;
				animation-name: example; 
				animation-duration: 3s;
				animation-iteration-count: 1;
			}
			@keyframes example {
				0%   {color:white; left:0px; top:35%;;}
				100% { color:white;left:5%; top:35%;;}
				0%   {color:white; left:0px; top:35%;;}
			}
			.navbar{
				background-color:#fff;
				color:black;
				height:auto;
				z-index:100;
			}
			.change{margin-left:1%;}
			.revealOnScroll { opacity: ; }
			.nav-link{text-decoration:none;font-size:px;}
			.nav-link:hover{text-decoration:underline;color:#red;}
			.dropdown:hover>.dropdown-menu {
			  display: block;
			}
			.dropdown>.dropdown-toggle:active {
			  /*Without this, clicking will make it sticky*/
				pointer-events: none;
			}
	</style>
	<link rel="stylesheet" href="style.css" media="all" />
	<link rel="stylesheet" href="animate.css" media="all" />
	<script src="jquery.js" type="text/javascript"></script>
	<script src="viewportchecker.js" type="text/javascript"></script>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
	<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	<script src="scripts.js" type="text/javascript"></script>
 <body>
	<div class="row" style="margin:0;padding:0;width:100%;;height:auto;">
		    <div class="col-lg-12" style="list-style:none;float:right;text-align:center;color:black">
				<li style="font-size:1.77vw;color:#000">BANGABANDHU SHEIKH MUJIBUR RAHMAN SCIENCE & TECHNOLOGY UNIVERSITY</li>
				<li style="font-weight:bold;font-size:2.5vw;color:#000;">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</li>
			</div>
	</div>
		<nav class="navbar navbar-expand-sm  navbar-light sticky-top" style="height:50px;background-color:rgba(0,0,0,1);border-top:px solid #f2f2f2;box-shadow:0 0 px #b3b3b3">
		  <a class="navbar-brand" style="color:black;margin-left:1%;font-family:arial;font-weight:bold;" href="#"><img src='logo4.png' /></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon" style="border:px solid #666;background-color:#fff;border-radius:2px;"></span>
		  </button>
		  <div class="collapse navbar-collapse" style="background-color:#000;color:white;z-index:200;width:100%;margin-left:22%;" id="collapsibleNavbar">
			 <center><ul class="navbar-nav" style="text-align:center;font-weight:">
			  <li class="nav-item dropdown" style=''>
				<a class="nav-link dropdown-toggle" style='color:#f2f2f2' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  PROGRAM
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">B.Sc. Engg</a>
				  <a class="dropdown-item" href="#">M.Sc. Engg</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" style='color:#f2f2f2' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  SYLLABUS
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">1st Year</a>
				  <a class="dropdown-item" href="#">2nd Year</a>
				  <a class="dropdown-item" href="#">3rd Year</a>
				  <a class="dropdown-item" href="#">4th Year</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" style='color:#f2f2f2' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  ROUTINE
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#routine">Class Routine</a>
				  <a class="dropdown-item" href="#">Mid Term</a>
				  <a class="dropdown-item" href="#">Semester Final</a>
				</div>
			  </li>
			  </li> 
			   <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#">RESEARCH</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#"></a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#">STUDENTS</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#"></a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" style='color:#f2f2f2' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  FACILITIES
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalforLab">Lab</a>
				  <a class="dropdown-item" href="#">Library</a>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#">DOWNLOAD</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style='color:#f2f2f2' href="#">ALUMNI</a>
			  </li> 
			</ul>
		  </div> 
			</center>
		</nav>
		
		<div class="row animated slideInUp" id="first_part" style="background-image:url(bsmrstu.jpg);
								background-attachment:fixed;height:500px;margin:0;margin-top:%;width:100%;
								padding:0;border:0;background-repeat:no-repeat; background-size:100% 100%;">
			<div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.5);">
				<div class="col-md-12"id="text_effect">
					<p style="font-size:2.4vw;">WELCOME TO BSMRSTU CSE<br>
					A DEPARTMENT OF GREAT EXCELLENCE. ONE OF THE MOST RENOWNED DEPARTMENT OF BSMRSTU.</p>
				</div>
			</div>
		</div>
		<div class="row"  style="margin-top:5%;padding:0;margin-left:0;background-color:;margin-bottom:0;margin-right:0;width:100%;">
			<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'>ABOUT BSMRSTU CSE</h2></div>
			<div class="col-lg-12" style="margin:0;padding-left:2%;padding-right:2%;">
				<p style="text-align:justify;">In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.
					In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.
					In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.
					In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.	
				</p>	
			</div>	
		</div>
		<div class="container-fluid text-center"  style="margin-top:8%;padding:1%;margin-left:0;background-image:url(background/.jpg);background-size:100%;
											margin-bottom:0;margin-right:0;width:%;height:px;background-repeat:no-repeat;
											background-attachment:fixed;">
			<h2 style='color:#000000;font-weight:bold' class=''>MESSAGE FROM CHAIRMAN</h2>
			<img src="ch_sir.png" style="width:160px;height:160px;border-radius:50%;margin-top:2%;z-index:-10" class='text-center thumbnail'>
			<p style='float:;color:#000;font-size:14px;font-weight:bold;'>
				<p style='font-weight:bold;'>Md. Akkas Ali<br>Assistant Professor & Chairman</p>	
			</p>
			<div class="container-fluid" style="margin:0;padding-left:2%;padding-top:2%;height:px;color:white;padding-right:2%;<!--background-color:rgba(0, 0, 0, 0);-->;">
				<p style="text-align:justify;color:#000;">In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.
					In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
					Periodic analog signals can be classified as simple or composite. A simple periodic analog signal, 
					a sine wave, cannot be decomposed into simpler signals.
					In data communications, we commonly use periodic analog signals and nonperiodic digital signals.
				</p>	
					
			</div>	
		</div>
		<!--Modal for programming club-->
		<div class="modal fade" id="ModalforProgrammingClub">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						
						  <div class="modal-header">
							<h4 class="modal-title">Programming Club</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

						  
						  <div class="modal-body" id="programmingclub">

						  </div>

						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
		<!-- ModalforRoutine -->
			  <div class="modal fade" id="routine">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						
						  <div class="modal-header">
							<h4 class="modal-title">Class Routine</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

						  
						  <div class="modal-body" id="routine">
							<p>Updated Date: 02 July, 2018</p>
							<img src='routine.jpg' style="width:100%;height:auto;"/>
						  </div>

						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Download</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Print</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
		<!-- ModalforNews -->
			  <div class="modal fade" id="ModalforNews">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						
						  <div class="modal-header">
							<h4 class="modal-title">News</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

						  
						  <div class="modal-body" id="news">

						  </div>

						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Share</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
				<!--ModalforLab-->
				<div class="modal fade" id="ModalforLab">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						  
						  <div class="modal-header">
							<h4 class="modal-title">Lab Facilities</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

				
						  <div class="modal-body" id="labs">
							<?php
								$query = "select * from lab";
								$result = mysqli_query($connect,$query);
								while($row = mysqli_fetch_array($result)){
									$id = $row['Id'];
									$name = $row['Name'];
									$image = $row['Image'];
									$Description = $row['Description'];
									echo "<div class='card col-lg-12' style='margin-top:2%;'>
										<img class='card-img-top' src='".$image."' alt='Card image cap' style='margin-top:2%;width:50%;height:50%;'>
										<div class='card-body'>
											<h5 class='card-title'>".$name."</h5>
											<p class='card-text'>".$Description."</p>
											<a href='#' class='btn btn-sm btn-secondary'>View Details</a>
										</div>
									</div>";
							}
							?>
						  </div>
						  
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
		<!--ModalforDeveloper-->
		<div class="modal fade" id="ModalforDeveloper">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>	  
					<div class="modal-header">
						<h4 class="modal-title">Developer</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body" id="developer">
						<div class='row' style='background-color:white;'>
						  <div class='col-lg-4'>
							<img src='nur.jpg' class='rounded' style='height:px;width:200px;border-radius:0%;'/><br>
						  </div>
						  <div class="col-lg-8" style='list-style:none;'>
							<h4>Nur-E-Alam Jony</h4>
							<li>Session: 2014-15</li>
							<li>Department of Computer Science & Engineering,</li>
							<li>Bangabandhu Sheikh Mujibur Rahman Science & Technology University</li>
							<div class=''style='margin-top:1%;'>
								<label style='font-weight:bold;'>Follow:</label><br>
								<i class='fa fa-envelope'></i>
								<label>nuralam.cse.bsmrstu@gmail.com</label><br>
								<i class='fa fa-phone'></i>
								<label>01911248212</label><br>
								<div style='font-size:20px;'>
									<a href='#' class='fa fa-globe'></a>
									<a href='#' class='fa fa-linkedin'></a>
									<a href='#' class='fa fa-twitter'></a>
									<a href='#' class='fa fa-facebook'></a>
								</div>
							</div>
						  </div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
	<div class='row'  style="margin-top:5%;padding:0;margin-left:0;margin-bottom:0;margin-right:0;width:100%;">
			<style>
				#now a{color:#000;font-weight:;font-size:16px;}
				#now a:hover{color:#4d4d4d;text-decoration:underline;}
				#now img:hover{opacity:1.0;}
				#now label{color:#666;font-size:12px;float:;}
				#now label:hover{color:#000;}
				#now:hover > #title {background-color:white;color:black;}
				
			</style>
			<div class="col-lg-12" style="padding:3%;text-align:center;margin-top:8%"><h2 style='color:#000000;font-weight:bold;'>WHAT'S GOING ON</h4></div>
			<div class="col-lg-4 border border-top-0 border-left-0 border-bottom-0" style="padding-left:2%;margin-bottom:2%;" id="now">
			 
				
				<!-- ModalforNotice -->
			   <div class="modal fade" id="ModalforNotice">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

			
						  <div class="modal-header">
							<h4 class="modal-title">Notice</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

			
						  <div class="modal-body" id="notice">

						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Download</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
				
				<!--ModalforEvents-->
			  <div class="modal fade" id="ModalforEvents">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						  
						  <div class="modal-header">
							<h4 class="modal-title">Events</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

				
						  <div class="modal-body" id="events">

						  </div>
						  
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Reminder</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
				<center><div id="title">News</div></center>
				<?php 
				$query="select * from News  ORDER BY id DESC limit 3; ";
				$result=mysqli_query($connect,$query);
				while($row = mysqli_fetch_array($result)){
					$id = $row['id'];
					$Headline = $row['Headline'];
					$image = $row['Image'];
					$Date = $row['Date'];
					echo "<div class='row'>
							<div class='col-lg-2'>
								<img class='align-self-center mr-3' style='width:64px;height:64px;' src='".$image."'/>
							</div>
							<div class='col-lg-8'>
								<label class=''>".$Date."</label><br>
								<a class='news_detail btn' id='newsinfo_".$id."' style='padding:0;background-color:white;font-weight:bold;'>".$Headline."</a>
							</div>
						</div>
						<hr>";
				}	 
				echo "<br><a class='All_news_detail btn btn-default' style='padding:0;background-color:white;float:right;font-size:13px;'>View All</a>";
				?>
			</div>
			<div class="col-lg-4 border border border-top-0 border-left-0 border-bottom-0" style="padding-left:2%;margin-bottom:2%;" id="now">
				<center><div id="title">Notice</div></center>
				<?php  
					$i = 1; 
					$query4="select * from notice";
					$result4=mysqli_query($connect,$query4);
					while($row = mysqli_fetch_array($result4))  
					{  
						if($i>3)break;
						$i++;
					?> 
						<label><?php echo $row["date"]; ?></label><br>
						<a href="#" style='font-weight:bold;' data-toggle="modal" data-target="#ModalforNotice"><?php echo $row["topic"]; ?></a><hr>
					<?php  
					}  
                ?> 
				<br><a href="#" style="float:right;font-size:13px;">View All</a>
			</div>
			<div class="col-lg-4" id="now" style="padding-left:2%;margin-bottom:2%;">
				<center><div id="title">Upcomming Events</div></center>
				<?php  
					$i = 1; 
					$query4="select * from events";
					$result4=mysqli_query($connect,$query4);
					while($row = mysqli_fetch_array($result4))  
					{  
						if($i>3)break;
						$i++;
					?> 
						<label><?php echo $row["date"]; ?></label><br>
						<a href="#" style='font-weight:bold;' data-toggle="modal" data-target="#ModalforEvents"><?php echo $row["topic"]; ?></a><hr>
					<?php  
					
					}  
                ?> 
				<br><a href="#" style="float:right;font-size:13px;">View All</a>
			</div>	
	</div>
	
	<div class="row" style="margin:0;padding:0;margin-top:8%">
		<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'>HONORABLE FACULTY MEMBERS</h4></div>
	   <!-- Modal -->
	   <div class="modal" id="empModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<h4 class="modal-title">Faculty Member</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body" id="teacher">

				  </div>
				  <!-- Modal footer -->
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>

				</div>
			</div>
		</div>
		<style>
			.userinfo:hover{background-color:rgba(0,0,0,0.5);}
		</style>
		<div class="row" style="margin:0;padding:0;" id='teacher_div'>
			 <?php 
				$query = "select * from teacher_info";
				$result = mysqli_query($connect,$query);
				while($row = mysqli_fetch_array($result)){
					$id = $row['id'];
					$name = $row['Name'];
					$image = $row['Image'];
					$Designation = $row['Designation'];
					echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
								  style='margin-left:2%;font-size:14px;background-color:white;border:0px;margin-top:2%;'>
								<img src='".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
								<p style='font-weight:bold;'>".$name."</p>
								<p>".$Designation."</p>
							</button>";
			}
			?>	
		</div>		
	</div>
		<div class='row'  style="margin-top:8%;padding:0;margin-left:0;margin-bottom:0;margin-right:0;width:100%;">
			<div class="col-lg-12" style="padding:3%;text-align:center;color:black"><h2 style='color:#000000;font-weight:bold;'>BSMRSTU CSE CLUBS</h2></div>
			<?php
				$query = "select * from clubs";
				$result = mysqli_query($connect,$query);
				while($row = mysqli_fetch_array($result)){
					$id = $row['Id'];
					$name = $row['Name'];
					$image = $row['Image'];
					$Designation = $row['Description'];
					
					echo "<button class='club btn btn-default col-lg-3' data-target='#ModalforProgrammingClub' data-toggle='modal' style='background-color:white;'>
							<div id='club_name' style='margin-left:1%'>
								<div id='club_icon'><img src='".$image."' style='width:172px;height:140px'></div>
								<p style='font-size:22px;'>".$name."</p>
							</div>
						</button>";
			}
			?>
		</div>
		<div class='row'  style="margin-top:8%;padding:0;margin-left:0;margin-bottom:0;
								 margin-right:0;width:100%;height:550px;background-attachment:fixed;
								 background-image:url(back56.jpg);background-size:100% 100%;background-repeat:no-repeat">
			
			<div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.6);text-align:center;">
				<div class="col-md-12"id="" style='margin-top:auto;margin-bottom:auto'>
					<p style="font-size:3vw;color:white;margin-top:14%;margin-bottom:auto">THINGS HAPPEN HERE<br>
					MOST CREATIVE IDEAS BE EXPLORED</p>
				</div>
			</div>
		</div>
		<div class='row'  style="margin-top:8%;padding:0;margin-left:0;margin-bottom:0;margin-right:0;width:100%;">
			<div class="col-lg-12" style="padding:%;text-align:center;color:black"><h2 style='color:#000000;font-weight:bold;'>ACHIEVEMENT</h2></div>
			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			<div id="wowslider-container3">
				<div class="ws_images"><ul>
					<li><img src="data3/images/nasa.jpg" alt="ach1" title="Champion in NASA SPACE APPS CHALLANGE 2016" id="wows3_0"/></li>
					<li><img src="data3/images/ach2.jpg" alt="ach2" title="Champion in ICPSD" id="wows3_1"/></li>
					<li><img src="data3/images/bsmrstu4.jpg" alt="images" title="Beautiful Campus" id="wows3_2"/></li>
					<li><img src="data3/images/arch7.jpg" alt="nasa"  title="Got Prime Minister Gold Medel in 2018" id="wows3_3"/></li>
					<li><img src="data3/images/ach4.jpg" alt="pic2" title="Successfully arranged NHSPC 2017" id="wows3_5"/></li>
				</ul></div>
				<div class="ws_shadow"></div>
			</div>	
			<script type="text/javascript" src="engine3/wowslider.js"></script>
			<script type="text/javascript" src="engine3/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
			
		</div>
	<div class='row'  style="margin-top:8%;padding:2%;margin-left:0;margin-bottom:0;margin-right:0;width:100%;">
			<div class="col-lg-12" style="padding:%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'>RECENT PROJECT & RESEARCH</h2></div>
			<div class="card-deck" style='margin-top:2%;:%;padding;%;color:;'>
			  <div class="card " style='background-color:'>
				<img class="card-img-top" src="distantplanets.jpg" alt="">
				<div class="card-body">
				  <h5 class="card-title">Bangladesh getting ready to explore distant planets</h5>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card " style='background-color:'>
				<img class="card-img-top" src="inbox_spam.jpg" alt="">
				<div class="card-body">
				  <h5 class="card-title">Keeping your inbox spam free</h5>
				  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card" style='background-color:'>
				<img class="card-img-top" src="space-trip.jpg" alt="">
				<div class="card-body">
				  <h5 class="card-title">Jeff Bezos plans to charge at least $200,000 for space rides</h5>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			   <div class="card" style='background-color:'>
				<img class="card-img-top" src="doctorola.jpg" alt="">
				<div class="card-body">
				  <h5 class="card-title">Over 1 lac people served by Doctorola</h5>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			</div>
		</div>
		<div class='row'  style="margin:0;margin-top:8%;padding:0;width:100%;height:auto;">
			<div class="col-lg-12" style="padding:3%;text-align:center;color:black:font-weight:bold;"><h2 style='color:#000000;font-weight:bold;'>GALLERY</h2></div>
			<style>
				.caption p{color:black;}
			</style>
			<div class="container-fluid" style='width:100%;padding:0;margin:0;'>
				<div class="row" style='width:100%;padding:0;margin:0;'>
					<?php  
						$query2="select * from gallary";
						$result2=mysqli_query($connect,$query2);
						$clr=array('red','green','blue','gray','yellow','black');
						$i=0;
						while($row = mysqli_fetch_array($result2))  
						{  
					?>
							<div class="col-md-4" id="now" style='background-color:;padding-right:1%;margin:0;'>
								<div class="" style='padding:0;margin:0;text-align:center;'>
									<a href="<?php echo $row["Image"]; ?>" target="_blank">
										<img src="<?php echo $row["Image"]; ?>" alt="Lights" style="width:100%"/>
										<div class='text-center'>
											<p style='width:100%'><?php echo $row["Caption"]; ?></p>
										</div>
									</a>
								</div>
							</div>
					<?php
						$i++;				
						}  
					?> 
				</div>
			</div>
		</div>
		<div class='row'  style="margin-top:8%;padding:0;margin-left:0;margin-bottom:0;
								 margin-right:0;width:100%;height:500px;background-attachment:fixed;
								 background-image:url(back57.jpg);background-size:;background-repeat:no-repeat">
			
			<div class="col-md-12" style="background-color: rgba(0, 0, 0, 0);">
				<div class="col-md-12"id="text_effect">
					<p style="font-size:2.4vw;"></p>
				</div>
			</div>
		</div>
		<div class="row" style="padding:0;margin:0;width:100%;">
			<style>
				li{font-size:14px;color:#333333;}
				a{text-decoration:;color:#333333;}
			</style>
			<div class="row" style="margin-top:%;padding:0;margin-left:0;margin-bottom:0;margin-right:0;width:100%;">
				<div class="row" style="margin:0;width:100%;background-color:#000;">
					<div class='col-lg-4' style="border-right:px solid #999;margin-top:4%;margin-left:3%;padding:2%;">
						<p style="color:#f2f2f2;font-size:16px;font-weight:bold;">Campus Map</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3673.5821318989783!2d89.8172736!3d22.9656116!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1527964923175" 
						width="100%" height="260" frameborder="0" style="border:0;margin-top:0px;padding-bottom:2%" allowfullscreen></iframe>
					</div>
					<div class='col-lg-4'  style="border-right:px solid #666;margin-top:4%;margin-left:1%;list-style:none;padding:2%;" id="ft_text">
						<p style="color:#f2f2f2;font-size:16px;font-weight:bold;">Contact Information</p>
						<li>Department of Computer Science & Engineering</li>
						<li>4th Floor, Academic Buliding-1</li>
						<li>Bangabandhu Sheikh Mujibur Rahman Science & Technology University, Gopalganj-8100, Bangladesh</li>
						<li>Email: office@cse.bsmrstu.ac.bd</li>
						<li>Phone: +88029670734</p>
						<p style="color:#f2f2f2;font-size:16px;font-weight:bold;"><br>Follow</p>
						<a href="#" class='fa fa-facebook' style='font-size:25px;color:#cccccc;margin-right:2%'></a>	
						<a href="#" class='fa fa-youtube' style='font-size:25px;color:#cccccc;margin-right:2%'></a>	
						<a href="#" class='fa fa-instagram' style='font-size:25px;color:#cccccc;margin-right:2%'></a>	
						<a href="#" class='fa fa-twitter' style='font-size:25px;color:#cccccc;margin-right:2%'></a>	
						<a href="#" class='fa fa-linkedin' style='font-size:25px;color:#cccccc;margin-right:2%'></a>	
					</div>
					<div class='col-lg-3' style="border:px solid #333333;margin-top:4%;margin-left:1%;list-style:none;padding:2%;" id="ft_text">
						<p style="color:#f2f2f2;font-size:16px;font-weight:bold;">University Information</p>
						<li><a href='https://www.bsmrstu.edu.bd/s/index.php' style='font-size:px;color:#cccccc'>Official Website BSMRSTU</a></li>
						<li><a href='https://admission.bsmrstu.edu.bd/b/admission/' style='font-size:px;color:#cccccc'>Admission</a></li>
						<li>Register Office</li>
						<li>Email: office@bsmrstu.ac.bd</li>
						<li>Phone: +88029670734</p>
						
					</div>
				</div>
			</div>
			<div style='height:1px;width:100%;margin-left:%;background-color:#666666;margin-bottom:%'></div>
			<div class="col-lg-12" style="background-color:#000;padding:0;margin:0;">
				<hr>
				<p style="color:#808080;background-color:;font-size:12px;margin:0px;font-weight:;text-align:center;">
					Copyright &copy 2011-2018 Department of CSE, BSMRSTU.
					<br><a href='#' class='btn btn-link' style='font-size:11px;color:#808080'data-target="#ModalforDeveloper" data-toggle="modal" data-placement="right" title="Nur-E-Alam Jony">Developer</a>
				</p>
			</div>
 </body>
</html>