<?php  
ob_start();
session_start(); 
include_once 'connect.php';

$data = $conn->list_question();

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
									<th>Question</th>
									<th>Category</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['question']?></td>
										<td><?=$d['category']?></td>
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



