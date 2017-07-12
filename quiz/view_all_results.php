<?php  
ob_start();
session_start(); 
include_once 'connect.php';

$data = $conn->mc_result();

?>
<html>
	<head>
		<title>Online Exam</title>
		<!-- Bootstrap Core CSS -->
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
		<div class="container-fluid">
			<div class="row">
			   <?php include"nav.php";?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
					  <div class="panel-body">
						 <table id="table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
								<thead>
								  <tr>
									<th>Id</th>
									<th>Fullname</th>
									<th>Pc Name</th>
									<th>Location</th>
									<th>Time/Date</th>
									<th>Subject</th>
									<th>Score</th>
									<th>Ave</th>
									<th>View</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['fullname']?></td>
										<td><?=$d['pc_name']?></td>
										<td><?=$d['location']?></td>
										<td><?=$d['date_time']?></td>
										<td><?=$d['section']?></td>
										<td><?=$d['subject']?></td>
										<td><?=$d['score']?></td>
										<td><?=($d['score']/10)*50+50?>% </td>
										<td><a class="btn-primary btn" href="multiple_choice_result.php?id=<?=base64_encode($d['id'])?>">View Details</a></td>
									</tr>
							    <?php endforeach; ?>
								</tbody>
							  </table>
					  </div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>



