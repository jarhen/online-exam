<?php 
	class process{
			private $db1;
		   
			 public function __construct($db){
				 $this->db1 = $db;
			 }
			 
			 public function test(){
				 echo 'test';
			 }
		public function index(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM `questions` ORDER BY RAND() LIMIT 3");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}	 
		public function students(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM users");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}	 
			 
		public function insert($data){
			date_default_timezone_set("Asia/Manila");
			//print_r($data);
			//exit();
			$d = "'".implode("','",$data)."'";
			
			$time = date('Y-m-d h:i:sa');
			$ip = $this->getUserIP();
			 $pc   = gethostname();
			try {
				
				$sql = "INSERT INTO myquiz (fullname,country,question1,q1,question2,q2,question3,q3,timestart,ipaddress,pcname)
				VALUES ($d,'$time','$ip','$pc')";
				//print_r($sql);
				// use exec() because no results are returned
				 $this->db1->exec($sql);
				 
				//echo "Quiz Submitted successfully!";
				header('location:thankyou.php');
				}
			catch(PDOException $e)
				{
				echo $sql . "<br>" . $e->getMessage();
				}

			$conn = null;
			
		}
		public function getUserIP()
		{
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

			return $ip;
		}
		
		public function view(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM myquiz order by id DESC");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}
		public function mc(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM multiple_choices ORDER BY RAND() LIMIT 10");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}
		
		
		public function mc_details(){
			
			try {
				$ids = base64_decode($_GET['id']);
				$stmt =  $this->db1->prepare("SELECT * FROM quiz_info where id='$ids'");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				$result['datos'] = array($data);
				
				foreach($data as $d):
					$idss = unserialize($d['q_ids']);
				endforeach;
				 $or = implode(',', array_map('intval', $idss));
				//echo "SELECT * FROM multiple_choices where id IN (". implode(',', array_map('intval', $idss)) . ") ORDER BY FIELD(id,".$or.")";
				//exit();
				
				$stmt1 =  $this->db1->prepare("SELECT * FROM multiple_choices where id IN (". implode(',', array_map('intval', $idss)) . ") ORDER BY FIELD(id,".$or.")");
				$stmt1->execute();
				$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
				//print_r($data1);
				$result['datos1']= array($data1);
				
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $result;
			
		}
		
		public function mc_result(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM quiz_info");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}
		
		public function list_question(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM questions");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}
		public function redirect($url){
			header('location:'.$url);
		}
		
		public function mc_insert($data){
			$q = $data['question'];
			$ans = $data['answer'];
			$choice = serialize($data['choice']);
			
			
			
			try {
				
				$sql = "INSERT INTO multiple_choices (question,answer,choices)
				VALUES ('$q','$ans','$choice')";
				//print_r($sql);
				// use exec() because no results are returned
				 $this->db1->exec($sql);
				 
				echo '<div class="alert alert-success alert-dismissable">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Success!</strong> Indicates a successful or positive action.
					  </div>';
				//header('location:thankyou.php');
				}
			catch(PDOException $e)
				{
				echo $sql . "<br>" . $e->getMessage();
				}

			$conn = null;
			
		}
		public function mc_questions(){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM multiple_choices");
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//$sql = "SELECT * FROM myquiz order by id DESC";
				//$result = $this->db1->exec($sql);
				//$data  =  $result->fetch(PDO::FETCH_ASSOC);
				
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $data;
			
		}
		
		
									   

		
	}
?>