<?php
	$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$password=$_POST['password'];
		$sql="select * from admin where Name='".$name."' and Password='".$password."' limit 1";
		$result = mysqli_query($connect,$sql);
		$row=mysqli_fetch_array($result);
		if(mysqli_num_rows($result)==1)
		{
			session_start();
			$_SESSION['id']=$row['id'];
			header('location:cpanel.php');
		}
		else 
		{
			header("location:adminlogin.php");
		}
	}
?>