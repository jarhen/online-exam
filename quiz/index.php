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
	<script src="js/timer.js"></script>
	<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
	<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	
	</head>
	<body>
	<div id="timer" value="<?=date("H:i:s")?>"></div>
		<div class="container-fluid">
			<div class="row">
			   <?php include"nav.php";?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-3">
					  <div class="col-lg-12">
					  <p class="btn">
						<script language="Javascript"> 
								document.write("Welcome to our <?=$_COOKIE['user'];?> from <strong>"+geoplugin_city()+"</strong>,<strong> "+geoplugin_countryName()+"</strong>"); 
						</script>
					 </p>	
						<div class="panel-group" id="accordion">
						
										
						<?php
							$i=1;
							foreach($data as $d):?>
									

							<div class="panel panel-border panel-primary left-outer-panel">
							 <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" id="q<?=$i?>">
								<div class="panel-heading headerbar">
									<div class="panel-title text-center">Problem <?=$i?></div>
								</div>
							</a>
								<div  id="collapse<?=$i?>" class="panel-body panel-collapse collapse <?=($i==1)? "in":"";?>">
										<p class="text-white">
											<ol>
												<li style="list-style:none;"><?=$d['question']?></li>
											</ol>
										</p>
								</div>
								
							</div>
							<?php $i++; endforeach; ?>
							
							</div>
						</div>
						
						<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Reminders: </div>
							<div class="panel-body ">
							<ul> 
									<li> AutoSubmit after 15 mins.</li>
									<li> AutoSubmit once you reload the page.</li>
									<li> Disabled pasting text</li>
							</ul>
							</div>
						 </div>
						
					 
						</div>
						
						
						</div>
						
						
					

					<div class="col-lg-offset-1 col-lg-8 " >
						
							<div class="panel panel-border panel-primary outer ">
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
										
											
											<form action="" method="POST" name="myform" id="myform">
											 <p><h3 class="text-center" id="toggle"></h3></p>
											<div class="form-group col-lg-3 pull-left">
											<label>Fullname
											</label>
											<input type="text" name="fullname" class="form-control" value="<?=$_COOKIE['user']?>" readonly>
											</div>
											
											<input id="loc" type="hidden" name="location" value="manila">
												<?php
													$i=1;
													foreach($data as $d):?>
											<input type="hidden" name="question<?=$i?>" value="<?=$d['id']?>">
											
											<div id="a<?=$i?>">
											
												<div class="form-group">
													<textarea onpaste="return false;" id="t" class="<?=$i?> form-control t" height="150" name="q<?=$i?>">Write your answer here.....</textarea>
												</div>
											</div>
											<?php $i++; endforeach; ?>
												<div class="form-group">
												
													<button id="btn-submit"type="submit" class="btn btn-sky text-uppercase btn-lg">Submit</button>
												</div>
												
											
											<div class="form-group text-center">
													<small>&copy; jaimeramosjr</small>
												</div>
											</form>	
									
									</div>	
								
								
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		 <script src="js/jquery.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script language="Javascript"> 
		                var loc =  geoplugin_city()+ ", " +geoplugin_countryName(); 
							$('#loc').val(loc);
							
					</script>
		
		 <script src="js/jquery.countdown.js"></script>
		 <script src="js/myjs.js"></script>
		
	</body>
</html>
<?php
if(!isset($_SESSION['loaded'])){
	 	$_SESSION['loaded']=1;
	
}else{
/*	echo '
	<div class="container warning">
		<div class="col-lg-4 col-lg-offset-4">
			<div class="alert alert-danger">Your Quiz is over!</div>
		</div>
	</div>
	';*/
	
?>	
	<script>
		$("#myform").submit();
	</script>
	
<?php }
if(isset($_POST['q1'])){
	
	$result = $conn->insert($_POST);
	header('location:thankyou.php');
}

?>

<div id="warningmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content modal-sm">
      
      <div class="modal-body">
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>test</p>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
