<?php  
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->index();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login </title>
<meta charset="UTF-8">


 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">

		<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	

</head>
<body>


 

<div class="container-fluid">
			<div class="row">
			   <?php include"nav.php";?>
			</div>
		</div>

<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="form-body login">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA" class="text-primary">Sign In</a></li>
        <li><a data-toggle="tab" href="#sectionB" class="text-primary">Sign Up</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" action="" method="post">
            
            <label>Student Id</label>
            <input type="text" name="userid">
			<label>Email Address</label>
            <input type="email" name="email">
            <button type="submit" class="submit">Sign In</button>
            
            </form>
			
			
            </div>
			
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
		
			<div class="innter-form">
			
            <form id="reg" name="reg" class="sa-innate-form" method="post">
			
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" name="email" id="email">
				</div>
			
			
				<div class="form-group">
					<label>First Name</label>
					<input type="text" name="firstname">
				</div>
			
			
				<div class="form-group">
					<label>Middle Name</label>
					<input type="text" name="middlename">
				</div>
			
			
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" name="lastname">
				</div>
			
			
				<div class="form-group">
					<label>Course</label>
					<input type="text" name="course">
				</div>
		
				<div class="form-group">
					<label>Section</label>
					<input type="text" name="section">
				</div>
			
			
				<div class="form-group">
					<button type="button" class="btn-register" id="btn-reg">Join now</button>
			   </div>
			
            </form>
			
            </div>
           
            
        </div>
		
		
		
    </div>
    </div>
    </div>
    </div>
    </div>


			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
		 
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		 <script src="js/myjs.js"></script>
		 <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


		 <script>
				$('.login').addClass('animated zoomIn');
				$('.submit').addClass('animated tada');
				
		$("#reg").validate({
						  rules: {
							firstnname: {
							  required: true,
							  minlength: 2
							},
							lastname:{
							  required: true,
							  minlength: 2
							},
							  middlename:{
							  required: true,
							  minlength: 2
							},
							course:{
							  required: true,
							  minlength: 2
							},
							section:{
							  required: true,
							  minlength: 2
							},
							email:{
							  required: true,
							  email: true
							}
						  }
						
						});
				
				$('#btn-reg').click(function(){
					if ($("#reg").valid()) {
						$.ajax({
						   type: "POST",
						   url: 'action.php',
						   data: $('#reg').serialize(), // serializes the form's elements.
						   success: function(data)
						   {
							   console.log(data); // show response from the php script.
							   $( "#dialog-message" ).dialog({
							  modal: true,
							  buttons: {
								Ok: function() {
								  $( this ).dialog( "close" );
								}
							  }
							});
						   }
						 });
						

				console.log('test');

			}				
				
				});
				

		 </script>
 
		 
</body>
</html>
<div id="dialog-message" title="Message" class="dialog">
  <p>
    <b>Registration Completed!</b>
  </p>
</div>	

<?php
if(isset($_POST['userid'])){
	echo $email = $_POST['email'];
	echo $userid = $_POST['userid'];
	 $result = $user->getuser($email,$userid);
}
?>
	