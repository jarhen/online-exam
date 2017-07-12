<?php  
date_default_timezone_set("Asia/Manila");
ob_start();
session_start(); 
require_once 'connect.php';
//include_once 'functions.class.php';

$user_ip = $conn->getUserIP();
$data = $conn->mc_questions();

?>

<html>
	<head>
		<title>Online Exam</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" >
	
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<!-- Bootstrap Core JavaScript -->

	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>



		 <script>
		 $(document).ready(function(){
		 $('#table').dataTable(); });
		 </script>
	
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
					
					<div class="col-lg-12" >
						
							<div class=" panel panel-primary">
								<div class="panel-heading">
									<div class="panel-title">Add Question</div>
								</div>
								<div class="panel-body text-justify">	
									<form action="" method="POST">
										<div class="col-lg-12">
											<div class="form-group col-lg-4">
												<label>Question</label>
												<textarea name="question" class="form-control"></textarea>
												<label>Answer</label>
												<input type="text" name="answer" class="form-control">
											</div>
											<div class="form-group col-lg-5">
												<label>Choices</label><br>
												<div class="col-lg-1"><span>a.</span></div>
												<div class="col-lg-11"><input type="text" name="choice[]" class="form-control"></div>
												<div class="col-lg-1"><span>b.</span></div><div class="col-lg-11"><input type="text" name="choice[]" class="form-control"></div>
												<div class="col-lg-1"><span>c.</span></div><div class="col-lg-11"><input type="text" name="choice[]" class="form-control"></div>
												<div class="col-lg-1"><span>d.</span></div><div class="col-lg-11"><input type="text" name="choice[]" class="form-control"></div>
											</div>
											<div class="form-group">
											<button class="btn-primary btn" type="submit">Submit</button>
											</div>
										</div>	
									</form>
								</div>	
								<?php
									if(isset($_POST['question'])){
										
										$result = $conn->mc_insert($_POST);
									}
								?>
							</div>
							<div class="panel panel-primary">
							  <div class="panel-heading">List of Questions</div>
							  <div class="panel-body">
									<div class="table-responsive">
										<table id="table" class="table table-bordered">
											 <thead>
												  <tr>
													<th>#</th>
													<th>Question</th>
													<th>Choices</th>
													<th>Answer</th>
													
												  </tr>
												</thead>
												<tbody>
												<?php foreach($data as $d):?>
												  <tr>
													<td><?=$d['id']?></td>
													<td><?=$d['question']?></td> 
													<td>
													<ol type="a">
													<?php $d2 = unserialize($d['choices']);
													
														 for($x=0;$x<=3;$x++){
															 if($x<=1){
																 
																 echo "<div class='col-lg-2'><li>$d2[$x]</li></div>";
															 }else{
																 echo "<div class='col-lg-2'><li>$d2[$x]</li></div>";
															 }
														}
													?>
													</ol>
													</td>
													<td><?=$d['answer']?></td>
												  </tr>
												 <?php endforeach;?>
												</tbody>
										</table>
									</div>
							  </div>
							</div>
							
					</div>
				</div>
			</div>
		</div>
	
	</body>
</html>
