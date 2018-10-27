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
				<h4>Gallary Page | Control Panel</h4>
			</div>
		</div>
		<div class="container-fluid text-center" style='margin-top:2%;margin-bottom:1%;'>
			<a class="" href='cpanel.php' style='margin-left:%;'>Control Panel</a>
			<a class="" href='index.php' style='margin-left:1%;'>Home</a><br/>
		</div>
		<div class='container-fluid' style='margin:0;padding:0'>
			<form class="form-inline row" style='margin:0;padding:0;' action="/action_page.php" id="add_new_img" method="post" enctype="multipart/form-data">
			  <label for="caption" style='tex-align:right;background-color:;' class="col-lg-1">Caption: </label>
			  <input type="text" class="col-lg-4 form-control mb-2 mr-sm-2" id="caption">
			  <label for="img" class="mr-sm-2">Image file: </label>
			  <input type="file" class="form-control mb-2 mr-sm-2" id="image">
			  <button type="button" name="add" style="margin-top:1%;" id="add" class="btn btn-success col-lg-2">Add New Image</button>
			</form>
		</div>
		<div id="gallary_table">
		
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
