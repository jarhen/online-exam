<?php 
ob_start();
	session_start();
	unset($_SESSION['loaded']);
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

	
	</head>
	<body>

<div class="container" style="margin-top:5%;">
	<div class="row">
        <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
            <h2 class="text-center">Thank you for taking the quiz! </h2>
            <center>
			<div class="btn-group" style="margin-top:50px;">
                <a href="index.php" class="btn btn-lg btn-primary">Try Again</a>
            </div>
			
			</center>
			<small>&copy; jaimeramosjr</small>
        </div>
	</div>
</div>
 <script src="js/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

<body>
<html>