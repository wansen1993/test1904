<?php
	
	//索引数组
	$arr = array(2,3,4,"a","b","c");
	echo $arr;
	echo "<br>";
	print $arr;
	echo "<br>";
	echo $arr[0];
	echo "<br>";
	echo $arr[1];
	echo "<br>";
	echo $arr[2];
	echo "<br>";
	echo $arr[3];
	echo "<br>";
	echo $arr[4];
	echo "<br>";
	echo count($arr);
	
	for($i=0;$i<count($arr);$i++){
		echo $arr[$i];
		echo "<br>";
	}
	
	print_r($arr);
	echo "<br>";
	
	//关联数组
	$arr = array("name"=>"admin","age"=>16);
	print_r($arr);
	echo "<br>";
	echo $arr["name"];
	echo "<br>";
	
	foreach($arr as $key=>$value){
		echo $value;
		echo "<br>";
	}
	echo count($arr);
	echo "<br>";
	
	echo json_encode($arr);
	echo "<br>";
		
	class obj{
		var $name="hello";
		function show($data){
			echo $this->name . $data;
		}
	}
	$o = new obj();
	
	print_r($o);
	echo "<br>";
	echo $o->show("admin");
	
	
	//接收前端的数据
	//连接mysql，读取数据
	
	
	
	
	
	
	
	
	?>