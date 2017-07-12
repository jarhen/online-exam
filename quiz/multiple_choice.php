<?php  
date_default_timezone_set("Asia/Manila");
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->mc();
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
	<script src="js/timer.js"></script>
	<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
	<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	
	</head>
	<body>
	<div id="timer" value="<?=date("H:i:s")?>"></div>
	<div class="container-fluid">
			<div class="row">
			   <?php include"nav.php";?>
			</div>
		</div>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="col-lg-12 " >
						
							<div class="well panel-border panel-primary outer ">
								<div class="panel-heading headerbar">
									<div class="panel-title">
									<p>Start Time:<span  id="starttime"></span></p>
									<!--<p>End Time:<span class="stoptime" id="stoptime"></span></p>-->
										<form name="cd">
										 <p>Remaining Time:
										  <input name="disp" type="text" class="clock" id="txt" value="10:00" size="2" readonly="true" align="right" border="1" />
										  <span id="mins">Minutes</span></p>
										</form>
									</div>
								</div>
								
									
									<div class="panel-body text-justify">	
									
									<!--<form action="" method="POST">
										<ol type="a">
											<li><input type="text" name="test[]" value="test1"></li>
											<li><input type="text" name="test[]" value="test2"></li>
											<li><input type="text" name="test[]" value="test3"></li>
											<li><input type="text" name="test[]" value="test4"></li>
											
											<button type="submit" >Submit</button>
										</ol>
									</form>	-->
									<form action="process_mc.php" method="POST" name="myform" id="myform">
									<div class="col-lg-5">
										<div class="form-group">
											<label>Fullname</label>
											<input type="text" class="form-control" name="fullname" value="<?=$_COOKIE['user']?>" readonly>
										</div>
										<div class="form-group">
											<label>Section</label>
											<input type="text" class="form-control" name="section" value="<?=$_COOKIE['section']?>" readonly>
										</div>
									</div>
									<div class="col-lg-2">
									</div>
									<div class="col-lg-5">
										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" name="subject" >
										</div>
										<div class="form-group">
											<label>Date Today</label>
											<input type="text" class="form-control"  name="date_taken" value="<?php echo date('Y-m-d h:i:s A');?>" readonly>
										</div>
									</div>
									<div class="col-lg-12">
									
									
										<div class="form-group">
										<ol>
										<?php $test = $data;  $l = array_column($test, 'id'); ?>
										 <input type="hidden" name="test_ids" value='<?php echo serialize($l); ?>'>
										  
										
												<?php $i =1; foreach($data as $d):?>
														<span id="wrong<?=$d['id']?>" disabled></span>
														<li><strong><?=$d['question']?></strong>
													<ol type="a">
														<?php $da = unserialize($d['choices']);
														 $x = 1;
														 foreach($da as $choices):
														
															?> 
														<?php if ($x<=2){?>	
														<div class="col-lg-6">
															<li>
																
																<input class="pull-left mc_<?=$d['id']?>" type="radio" name="mc_<?=$d['id']?>" data-id="<?=$x?>" value="<?=$choices?>"><?=$choices?>
																
															</li>
														</div>
														
														<?php }else{?>
														   <div class="col-lg-6">
															<li>
																
																<input class="mc_<?=$d['id']?> " type="radio" name="mc_<?=$d['id']?>" data-id="<?=$x?>" value="<?=$choices?>"><?=$choices?>
																
															</li>
														</div>
														<?php }?>
														
														<?php 
															$x++; endforeach;
														?>
														
														
														
													</ol>
														Answer: <input type="text" name="mc<?=$i;?>" id="mc<?=$d['id']?>" class="ans" readonly>
												</li>
										<?php $i++;   endforeach; ?>
										</ol>
										</div>
										<div class="form-group">
										<button class="btn-primary btn" type="submit">Submit</button>
										</div>
										</form>
									</div>	
									</div>	
								
								
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		 <script src="js/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		 <script src="js/jquery.countdown.js"></script>
		 <script src="js/myjs.js"></script>


<?php// include 'process_mc.php';?>

<?php include 'script.php';?>
	
	</body>
</html>
