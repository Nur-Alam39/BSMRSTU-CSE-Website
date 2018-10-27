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
		<div class="row" style="margin:0;padding:0;width:100%;;height:auto;margin-top:2%;">
			<div class="col-lg-12" style="list-style:none;background-attachment:fixed;text-align:center;color:black">
				<h4>News Page | Control Panel</h4>
			</div>
		</div>
		<div class="container-fluid text-center" style='margin-top:2%;margin-bottom:1%;'>
			<a class="" href='cpanel.php' style='margin-left:%;'>Control Panel</a>
			<a class="" href='index.php' style='margin-left:1%;'>Home</a><br/>
			<button type="button" name="add" style="margin-top:1%;" id="add" class="btn btn-success col-lg-1">Add News</button>
		</div>
		<div id="news_table">
		
		</div>
		<div class="modal" id="ModalforAddNews">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">

			  <!-- Modal Header -->
			  <div class="modal-header">
				<h4 class="modal-title">Add News</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>

			  <!-- Modal body -->
			  <div class="modal-body">
				<form id="Add_news_form" method="post" enctype="multipart/form-data" style='font-weight:bold;'>
					<div class="form-inline">
						<label for="date" class="mr-sm-2" >Date :</label>
					    <input type="date" class="form-control" id="date" name='date'>
						<label for="time"class="mr-sm-2"  style='margin-left:5%;'>Time :</label>
					    <input type="time" class="form-control" id="time" name='time'>
					</div>
					<div class="form-group inline">
					  
					</div>
					<div class="form-group">
					  <label for="headline">Head Line:</label>
					  <input type="text" class="form-control" id="headline" name='headline'>
					</div>
					<div class="form-group">
					  <label for="details">Details:</label>
					  <textarea class="form-control" id="details" name='details'></textarea>
					</div>
					<div class="form-inline">
					  <label for="author" class="mr-sm-2">Author : </label>
					  <input type="text" class="form-control" id="author" name='author'>
					   <label for="keyword" class="mr-sm-2" style='margin-left:5%;'>Keywords : </label>
					  <input type="text" class="form-control" id="keyword" name='keyword'>
					</div>
					<br/>
					<div class="form-inline">
					  <label for="image" class="mr-sm-2">Image:</label>
					  <input type="file" class="form-control" id="image" name='image'>
					</div>
					<br/>
					<input type='hidden' name='action' id='action' value="insert"/>
					<input type='hidden' name='news_id' id='news_id'/>
					<input type='submit' name='insert' id='insert' value='Insert' class='btn btn-info' align='center'/>
				</form> 
			  </div>

			  <!-- Modal footer -->
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>

			</div>
		  </div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
		fetch_data();
		function fetch_data()
		{
			var action="fetch";
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{action:action},
				success:function(data)
				{
					$('#news_table').html(data);
				}
			})
		}
		$('#add').click(function(){
			$('#ModalforAddNews').modal('show');
			$('#Add_news_form')[0].reset();
			$('.modal-title').text("Add News"); 
			$('#news_id').val('');
			$('#action').val('insert');
			$('#insert').val('Insert');
		});
		$('#Add_news_form').submit(function(event){
			event.preventDefault();
			var img_name=$('#image').val();
			if(img_name=='')
			{
				alert("Please select image.");
				return false;
			}
			else
			{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
				{
					alert("Invalid Image File");
					$('#image').val('');
					return false;
				}
				else
				{
					 $.ajax({
					 url:"action.php",
					 method:"POST",
					 data:new FormData(this),
					 contentType:false,
					 processData:false,
					 success:function(data)
					 {
					  alert(data);
					  fetch_data();
					  $('#Add_news_form')[0].reset();
					  $('#ModalforAddNews').modal('hide');
					 }
					});
				}
			}
		});
		 $(document).on('click', '.update', function(){
		  var news_id=$(this).attr("id");
		  //console.log(news_id);

		 // window.alert(news_id);
		  $.ajax({
			  url:"action.php",
			  method:"POST",
			  data:{news_id:news_id},
			  dataType:"json",
			  success:function(data)
			  {
				  document.write(data.details);
				  $('#ModalforAddNews').modal('show');
				  $('#news_id').val(news_id);
				  $('#action').val("update");
				  $('.modal-title').text("Update News");
				  $('#insert').val("Update");
				  $('#news_id').val("Update");
				  $('#details').val(data.details);   
				  $('#headline').val(data.headline);
			  }
		  })
		 });
		 $(document).on('click', '.delete', function(){
			 
		  var news_id = $(this).attr("id");
		  var action = "delete";
		  if(confirm("Are you sure you want to remove this image from database?"))
		  {
		   $.ajax({
			url:"action.php",
			method:"POST",
			data:{news_id:news_id, action:action},
			success:function(data)
			{
			 alert(data);
			 fetch_data();
			}
		   })
		  }
		  else
		  {
		   return false;
		  }
		 });
	});
	</script>
</html>
