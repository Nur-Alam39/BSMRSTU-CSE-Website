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
$msg = "";
if(isset($_POST["action"]))
{
	$connect=mysqli_connect("localhost","root","","bsmrstu_cse");
	if($_POST["action"]=="fetch")
	{
		$query="select * from news order by id desc";
		$result=mysqli_query($connect,$query);
		$output=
		'
			<table class="table table-bordered table-responsive table-striped">
				<thead class="thead-dark">
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Image</th>
					  <th scope="col">Headline</th>
					  <th scope="col">Details</th>
					  <th scope="col">Date</th>
					  <th scope="col">Time</th>
					  <th scope="col">Author</th>
					  <th scope="col">Keyword</th>
					  <th scope="col">Action</th>
					</tr>
				  </thead>
		';
		while($row=mysqli_fetch_array($result))
		{
			$output .='
				<tr>
					<td>'.$row["id"].'</td>
					<td>
						<img src="'.$row['Image'].'" height="60" width="75" class="img"/>
					</td>
					<td>'.$row['Headline'].'</td>
					<td>'.$row['Details'].'</td>
					<td>'.$row['Date'].'</td>
					<td>'.$row['Time'].'</td>
					<td>'.$row['Author'].'</td>
					<td>'.$row['Keyword'].'</td>
					<td>
						<button type="button" style="margin-bottom:5%;background-color:transparent;" name="update" class="btn btn-lg fa fa-edit update" id="'.$row["id"].'">
							
						</button>
						<button type="button" style="margin:%;background-color:transparent;" name="delete" class="btn fa fa-trash btn-lg delete" id="'.$row["id"].'">
						</button>
					</td>
				</tr>
			';
		}
		$output .='</table>';
		echo $output;
	}
	if($_POST["action"] == "insert")
	{
	  $date=$_POST["date"];
	  $time=$_POST["time"];
	  $headline=$_POST["headline"];
	  $details=$_POST["details"];
	  $author=$_POST["author"];
	  $keyword=$_POST["keyword"];
	  $image=$_FILES["image"]["name"];
	  
	  $filename=$_FILES["image"]["name"];
	  $filetmpname =$_FILES["image"]["temp_name"];
	  
	  $folder="newsfolder/";
	  
	  move_uploaded_file($filetmpname,$folder.$filename);
	  
	  echo "$details";
	  
	  $query = "INSERT INTO news(Date,Time,Headline,Image,Details,Keyword,Author) 
						VALUES ('$date','$time','$headline','$image','$details','$keyword','$author')";
	  mysqli_query($connect, $query);
	  if(move_uploaded_file($_FILES['image']['temp_name'], $file))
		{
			$msg = "News uploaded successfully";
		}
		else
		{
			$msg = "Failed to upload News";
		}
	}
	if($_POST["action"] == "update")
	 {
		$id=$_POST["news_id"];
		console.log($id);
		echo $id;
		$query="select * from news where id=$id";
		$result=mysqli_query($connect,$query);
		
		while($row=mysqli_fetch_array($result))
		{
			$output['img_name'] =$row['Image'];
			$output['headline'] =$row['Headline'];
			$output['details'] =$row['Details'];
			$output['date'] =$row['Date'];
			$output['time'] =$row['Time'];
			$output['author'] =$row['Author'];
			$output['keyword'] =$row['Keyword'];
		}
		echo json_encode($output);
	 }
	if($_POST["action"] == "")
	 {
	  $file = $_FILES["image"]["tmp_name"];
	  
	  $date=$_POST["date"];
	  $time=$_POST["time"];
	  $headline=$_POST["headline"];
	  $details=$_POST["details"];
	  $author=$_POST["author"];
	  $keyword=$_POST["keyword"];
	  $image=$_FILES["image"]["name"];
	  
	  $query = "UPDATE news SET Date='$date', Headline = '$headline', WHERE id = '".$_POST["news_id"]."'";
	  if(mysqli_query($connect, $query))
	  {
	   echo 'News Updated into Database';
	  }
	 }
	 if($_POST["action"] == "delete")
	 {
	  $query = "DELETE FROM news WHERE id = '".$_POST["news_id"]."'";
	  if(mysqli_query($connect, $query))
	  {
	   echo 'News Deleted from Database';
	  }
	 }
}
?>