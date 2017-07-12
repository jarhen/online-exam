<?php 
	ob_start();
	session_start();
	session_destroy();
			
				
			  setcookie('user', '',  time() - (86400 * 30), "/");
              setcookie('fbuser', '',  time() - (86400 * 30), "/");
			   //setcookie('fbuser', '', time()-60*60*24*90, '/', '', 0, 0);
              unset($_COOKIE['fbuser']);
			  
			  //setcookie("user", "", time());
			  setcookie("section", "",time());
			  setcookie("course", "", time());
			  setcookie("email", "", time() );
			  setcookie("status", "", time());
			  setcookie("uid", "", time());
			  
			  header('location:login.php');

?>