<?php  
ob_start();
session_start(); 
include_once 'connect.php';

$data = $conn->view();

?>
<html>
	<head>
		<title>Online Exam</title>
		<!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
					  <div class="panel-body">
						 <table id="table" class="table table-striped table-bordered">
								<thead>
								  <tr>
									<th>Id</th>
									<th>Fullname</th>
									<th>Location</th>
									<th>Pc Name</th>
									<th>Question ids</th>
									<th>A1</th>
									<th>A2</th>
									<th>A3</th>
									<th>Date/Time</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['fullname']?></td>
										<td><?=$d['country']?></td>
										<td><?=$d['pcname']?></td>
										<td><?=$d['question1']?>, <?=$d['question2']?>, <?=$d['question3']?></td>
										<td><?=$d['q1']?></td>
										<td><?=$d['q2']?></td>
										<td><?=$d['q3']?></td>
										
										<td><?=$d['timestart']?></td>
									</tr>
							    <?php endforeach; ?>
								</tbody>
							  </table>
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
		
		 <script>
		 $(document).ready(function(){
		 $('#table').dataTable(); });
		 </script>
		 
	</body>
</html>



