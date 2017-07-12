<?php  
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->index();

if($_COOKIE['uid']==""){
	header('location:../admin.php');
}
?>
<html>
	<head>
		<title>Online Exam</title>
		<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/admin.css" rel="stylesheet" type="text/css">
	</head>
	<body>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
		<div class="row text-center">
			<h1 id="admin"> <span class="label label-primary">ADMINISTRATOR</span></h1>
		</div>
    </div><!-- /container -->
		 <script src="js/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script>
		$('#admin').addClass('animated zoomIn');
		$('.card').addClass('animated zoomIn');
		</script>
	</body>
</html>	

<?php
if(isset($_POST['email'])){
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $result = $user->get_admin_user($email,$password);
	 if($result){
		header('location:admin/index.php');
	 }else{
		header('location:admin.php');
	 }
}
?>
	