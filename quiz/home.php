<?php  
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->index();

if($_COOKIE['user']==""){
	header('location:login.php');
}

?>

<html>
	<head>
		<title>Online Exam</title>
		<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">

		<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
	<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	
	</head>
	<body class="bg">
	<div class="container-fluid">
			<div class="row">
			   <?php include"nav.php";?>
			</div>
		</div>
		<div class=
	<div id="particles-js"></div>
	<div id="timer" value="<?=date("H:i:s")?>"></div>
		"container-fluid">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
		</div>
		
		 <script src="js/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		 <script src="js/myjs.js"></script>
		<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	</body>
</html>


