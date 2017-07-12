

<?php 
										if(isset($_POST['mc1'])){
											echo $fullname = $_POST['fullname'];
											echo $section = $_POST['section'];
											echo $subject = $_POST['subject'];
											echo $date_take = $_POST['date_taken'];
											echo $test_ids = $_POST['test_ids'];
											  $l = unserialize($test_ids);
											
											
											$i = array();
											
											for($x=1;$x<=10;$x++){
												
											 $i[]= $_POST['mc'.$x];
											}
											
											$i1 = serialize($i);
											
													 
													
												/* $ans_key = array_column($test, 'answer');
													
												$l1 = serialize($ans_key);
												$score = 0;
												for($y=0;$y<=9;$y++){
													if($i[$y] == $ans_key[$y]){
														
														$score = $score + 1;
														 $score. '. ' .$i[$y].' == '.$ans_key[$y].' true<br>';
													}else{
														 $score. '. ' .$i[$y].' == '.$ans_key[$y].' false<br>';
													}
												}
												$ave = ($score/10) * 50 + 50;*/
												
												 
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

		if(filter_var($client, FILTER_VALIDATE_IP))
		{
				$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}





$or = implode(',',$l);

				
				$stmt1 = "SELECT * FROM multiple_choices where id IN (".$or .") ORDER BY FIELD(id,".$or.")";
				$result = $conn->query($stmt1);
				$ans_key = array();
				foreach($result as $r):
					$answer_key[] = $r['answer'];
				endforeach;
				
				$answer_key;
			    $l1 = serialize($answer_key);
				$score = 0;
				for($y=0;$y<=9;$y++){
					
					if($i[$y] == $answer_key[$y]){
					$score = $score + 1;
						 $score. '. ' .$i[$y].' == '.$answer_key[$y].' true<br>';
					}else{
						 $score. '. ' .$i[$y].' == '.$answer_key[$y].' false<br>';
					}
				}
					 $ave = ($score/10) * 50 + 50;
				
				
				
				
				
				
				
				date_default_timezone_set("Asia/Manila");
			
			$time = date('Y-m-d h:i:sa');
			$pc   = gethostname();				

$sql = "INSERT INTO quiz_info (fullname, section, subject, date_taken,ans_key, answers, score,q_ids,pc_name,location,date_time)
VALUES ('$fullname', '$section', '$subject','$date_take','$l1','$i1','$score','$test_ids','$pc','$ip','$time')";

if ($conn->query($sql) === TRUE) {
	 $last_id = base64_encode($conn->insert_id);
    header('location:multiple_choice_result.php?id='.$last_id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
			?>
													
											
											
								<?php	} ?>