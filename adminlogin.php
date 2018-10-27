<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>BSMRSTU CSE</title>
		<link rel="icon" href="logo1.jpg" />
		<link rel="stylesheet" href="style.css" media="all" />
		<link rel="stylesheet" href="animate.css" media="all" />
		<script src="jquery.js" type="text/javascript"></script>
		<script src="viewportchecker.js" type="text/javascript"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
		<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="row" style="margin:0;padding:0;width:100%;;height:auto;">
			<div class="col-lg-12" style="list-style:none;background-attachment:fixed;text-align:center;color:black">
				<li style="font-size:1.77vw;">BANGABANDHU SHEIKH MUJIBUR RAHMAN SCIENCE & TECHNOLOGY UNIVERSITY</li>
				<li style="font-weight:bold;font-size:2.5vw;margin-top:%;">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</li>
			</div>
		</div>
		<div class="container-fluid text-center" style="margin:0;padding:0;width:100%;;height:auto;margin-top:2%;">
			<h4>Admin Login | Control Panel</h4>
		</div>
		<div class="container-fluid text-center" style='margin-top:1%;margin-bottom:1%'>
			<a class="btn btn-link col-lg-1" href='index.php' style='margin:;color:;text-decoration:underline'>Home</a>
		</div>
		<div class='container-fluid' >
				<div class='card bg-primary text-white ' style='width:28rem;margin-left:auto;margin-right:auto;'>
					<div class="card-body">
						<center><h5 class="card-title">Log in</h5></center>
						<form action="login.php" method="POST">
							<div class="form-group">
							  <label for="Name">Name:</label>
							  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
							</div>
							<div class="form-group">
							  <label for="pwd">Password:</label>
							  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
							</div>
							<center><button type="submit" class="btn btn-link btn-boarded text-white" style='color:;' name='submit' >Submit</button><center>
						  </form>
					</div>
				</div>
		</div>
	</body>
</html>