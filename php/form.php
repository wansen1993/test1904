<?php
	
	$u = $_REQUEST["user"];
	$p = $_REQUEST["pass"];
	
	$user = "Admin";
	$pass = 123;
	
	if($user == $u && $pass == $p){
		echo "ok";
	}else{
		echo "no ok";
	}
	
	
?>