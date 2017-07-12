<?php  
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->mc_details();

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
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>
	</script>
	<script type="text/javascript" src="mespeak.js"></script>
	
	</head>
	<body>
	<div id="timer" value="<?=date("H:i:s")?>"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="col-lg-12 " >
						
							<div class="panel panel-border panel-primary">
							<?php foreach($data['datos'] as $d):?>
								
									<div class=" panel"> 
										<div class="col-lg-6" >
											<p><strong>Student Name:</strong> <input type="text" class="ans1 " readonly value="<?=$d[0]['fullname']?>"></p>
											<p><strong>Section:</strong> <input type="text" class="ans1 " readonly value="<?=$d[0]['section']?>"></p>
											<p><strong>Score:</strong> <strong><input type="text" class="ans1 score" readonly value="<?=$d[0]['score']?>"></strong></p>
										</div>
										<div class="col-lg-6" >									
											<p><strong>Subject:</strong> <input type="text" class="ans1 " readonly value="<?=$d[0]['subject']?>"></p>
											<p><strong>Start Date/Time:</strong> <input type="text" class="ans1 " readonly value="<?=$d[0]['date_taken']?>"></p>
											<p><strong>Average:</strong> <input type="text" class="ans1 average" readonly value="<?=($d[0]['score']/10)*50+50 ?>%"></p>
										</div>	
									<!--<p>End Time:<span class="stoptime" id="stoptime"></span></p>-->
									
									</div>
							
									
									<div class="panel-body text-justify">	
									
									<div class="col-lg-12">
									
									
										<div class="form-group">
										<ol>
										<?php foreach($data['datos1'] as $d1):?>
										<?php $uans = unserialize($d[0]['answers']);?>
										
											<?php for($x=0;$x<10;$x++):?> 
											
												<?php $d2 = unserialize($d1[$x]['choices']);?>
													<div class="col-lg-12">
														<div class="col-lg-12">
															<li> <span class="pull-left"> <?php echo $d1[$x]['question'];?></span>
														</div>
													<ol type="a">
													<?php $n=1; foreach($d2 as $choices):?>
													
													<?php if($n == 1):?>
														<?php  $n1 = str_replace($n,"a",$n); ?>
													<?php elseif($n==2):?>
														<?php  $n1 =  str_replace($n,'b',$n);?>
													<?php elseif($n==3):?>
														<?php $n1 =  str_replace($n,'c',$n);?>
													<?php elseif($n==4):?>
														<?php $n1 =  str_replace($n,'d',$n);?>
													<?php endif;?>	
													
													
															<?php if($n1 == $uans[$x]):?>
															
															<div class="col-lg-6">
															
															
																<li> <input class="pull-left mc1<?=$n?>" type="radio" value="<?=$choices?>" checked >&nbsp;<?=$choices?></li>
															</div>
															<?php else:?>
															<div class="col-lg-6">
																<li> <input class="pull-left mc1<?=$n?>" type="radio" value="<?=$choices?>" disabled> &nbsp;<?=$choices?></li>
															</div>
															<?php endif;?>
															
													<?php $n++;  endforeach; ?>
													</ol>
												
													
													    
														
														<?php if($uans[$x] == $d1[$x]['answer']):?>
															
														Answer: <input type="text" class="ans text-success" readonly value=" <?php echo $uans[$x];?>"> <i class="text-success fa fa-check fa-1x" aria-hidden="true"></i>
														<?php else:?>
														Answer: <input type="text" class="ans text-danger" readonly value=" <?php echo $uans[$x];?>"> <span class="btn btn-danger btn-xs" style="padding: 2px !important;font-size: 12px !important;"> <i class="fa fa-times" aria-hidden="true"></i> Correct ans:  <span class="badge"><b><?=$d1[$x]['answer']?></b></span> </span>
														<?php endif;?>
													
													
												</li>
												</div>
											<?php  endfor; ?>
											
											
										<?php  endforeach; ?>
										</ol>
										</div>
										
										
										<?php endforeach; ?>
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
		<script>
			meSpeak.loadConfig("mespeak_config.json");
			meSpeak.loadVoice("voices/en/en-us.json");
			meSpeak.loadVoice("voices/fr.json");
				var parts = [
								{ text: 'Your score is '+ $('.score').val() + ' out of 10' ,      voice: "en/en-us", variant: "m5" },
								{ text: 'And Your Average is '+ $('.average').val() ,    voice: "en/en-us", variant: "m5" },
								{ text: "boom pa ness'" ,    voice: "en/en-us", variant: "m5" }
							];
							meSpeak.speakMultipart(parts);
	    </script>
	</body>
</html>
