
<?php  
date_default_timezone_set("Asia/Manila");
ob_start();
session_start(); 
require_once 'connect.php';
$data = $conn->mc_questions();
$data1 = $conn->mc_result();
$data2 = $conn->view();
$data3 = $conn->students();

?><!doctype html>
<html lang="en">
  <head>
    <!-- Compiled and minified CSS -->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <link href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css" rel="stylesheet">
 

  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
   <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
	<script>
	$(document).ready(function() {
		$(document).on('click','#menu',function(){
			$('.button-collapse').sideNav('show');
			console.log('test');
		});
		$(".button-collapse").sideNav();
		$('#table').DataTable();
		$('#table1').DataTable();
		$('#table2').DataTable();
} );</script>
<style>
.tabs .tab {
    display: inline-block;
   text-align: left !important;
    line-height: 48px;
    height: 48px;
    padding: 0;
    margin: 0;
    text-transform: uppercase;
}
.btn-floating {
    width: 20%;
   border-radius: 5%; 
}
</style>
  </head>
  <body>
    
        <div class="container">
			<div class="row">
						<div id="slide-out" class="side-nav fixed" >
							<div class="card-panel teal">
							  <span class="white-text"><?=$_COOKIE['email']?> | <a class="yellow-text" href="logout.php">Logout</a>
							  </span>
							</div>
							
							<ul class="tabs" style="height:100%;text-align:left;">
								<li class="tab col s12"><a href="#home">Home</a></li>
								<li class="tab col s12"><a href="#test1">Students</a></li>
								<li class="tab col s12"><a href="#test2">Multiple Choices</a></li>
								<li class="tab col s12"><a href="#test3">View Multiple Choices Results</a></li>
								<li class="tab col s12"><a href="#test4">View Tech Exam Results</a></li>
							  </ul>
							 
						</div>
						<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      
					<div class="col s12">
						  <div id="home" class="col s12">home</div>
						  <div id="test1" class="col s12"><?php include('students.php');?></div>
						  <div id="test2" class="col s12"><?php include('create_multiple_choice.php');?></div>
						  <div id="test3" class="col s12"><?php include('view_all_results.php');?></div>
						  <div id="test4" class="col s12"><?php include('view.php');?></div>
					
					</div>
			</div>	
		</div>	
  </body>
</html>
