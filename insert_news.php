<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "bsmrstu_cse");
if(!empty($_POST))
{
 $output = '';
	$date = mysqli_real_escape_string($connect, $_POST["date"]);  
	$time = mysqli_real_escape_string($connect, $_POST["time"]);  
	$headline = mysqli_real_escape_string($connect, $_POST["headline"]);  
    $details = mysqli_real_escape_string($connect, $_POST["details"]);  
    $author = mysqli_real_escape_string($connect, $_POST["author"]);  
    $keyword = mysqli_real_escape_string($connect, $_POST["keyword"]);  
    $image = $FILES["image"]["name"];
    $query = "
    INSERT INTO news(Date,Time,Headline,Image,Details, Keyword, Author)  
     VALUES('$date','$time','$headline','$media_file','$details', '$keyword', '$author')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="bg-success text-white" style="padding:2%;">News Inserted</label>';
    }
    echo $output;
}
?>