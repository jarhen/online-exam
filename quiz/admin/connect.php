<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "quiz";
try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	include_once('session.class.php');
	include_once('functions.class.php');
	
	$user = new Users($conn1);
	$conn = new process($conn1);

?>