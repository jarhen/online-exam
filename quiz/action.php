<?php


include 'connect.php';

$fieldname = array();
	$value = array();
	foreach($_POST as $d => $key):
		$fieldname[] = $d ;
		$value[$d] = $key ;
	endforeach;
	   $fieldname[] ='status';
		$value['status'] ='Active';
	echo'<pre>';
	 echo $f = implode(",",$fieldname);
	 echo'</pre><br>';
	 echo'<pre>';
	echo $fv =":".implode(",:",$fieldname);
	 echo'</pre><br>';
	print_r($value);

				 
		# the shortcut!
	 print_r($STH = $conn1->prepare("INSERT INTO users ($f) values ($fv)"));
		$STH->execute($value);
			
	
?>