

<?php
    
	class Users{
		private $db1;

		
			 public function __construct($db){
				 $this->db1 = $db;
			 }

	public function getuser($email,$userid){
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM users WHERE id='$userid' AND email='$email'");
				$stmt->execute();
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
				if($user){
					foreach($user as $u):
					$username = $u['firstname'].' '.$u['lastname'];
					$course   = $u['course'];
					$section  = $u['section'];
					$status    = $u['status'];
					$email = $u['email'];
					$uid = $u['id'];
				endforeach;

			  setcookie("user", $username, time() + (86400 * 30), "/");
			  setcookie("section", $section,time() + (86400 * 30), "/");
			  setcookie("course", $course, time() + (86400 * 30), "/");
			  setcookie("email", $email, time() + (86400 * 30), "/");
			  setcookie("status", $status, time() + (86400 * 30), "/");
			  setcookie("uid", $uid, time() + (86400 * 30), "/");
			    header('location:index.php');
				}else{
			 
				}
				
			  
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $user;
			
		}	
		
		public function get_admin_user($email,$password){ 
			
			try {
				$stmt =  $this->db1->prepare("SELECT * FROM admin WHERE password='$password' AND email='$email'");
				$stmt->execute();
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
				if($user){
					foreach($user as $u):
					$email = $u['email'];
					$uid = $u['id'];
				endforeach;
				
			  setcookie("email", $email, time() + (86400 * 30), "/");
			  setcookie("uid", $uid, time() + (86400 * 30), "/");
			    //header('location:index.php');
				}else{
			 
				}
				
			  
				}
			catch(PDOException $e)
				{
				echo $stmt . "<br>" . $e->getMessage();
				}
				
			return $user;
			
		}	

		
}
?>