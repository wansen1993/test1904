<?php
	
	$a = 10;
	function fn(){
		global $b,$a;
		$b = 20;
		echo $a;
		echo "<br>";
		echo $b;
	}
	fn();
	echo "<br>";
	echo $a;
	echo "<br>";
	echo $b;
	echo "<br>";
	
	
	function fn2(){
		static $a = 10;
		$a++;
		echo $a;
		echo "<br>";
	}
	fn2();
	fn2();
	fn2();
	fn2();
	fn2();
	fn2();
	
?>