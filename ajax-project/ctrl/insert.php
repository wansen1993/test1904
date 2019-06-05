<?php
    // 1.接收前端的数据
    $a = @$_GET["aa"];
    $b = @$_GET["bb"];
    $c = @$_GET["cc"];

    
    // 2.连接mysql
    $link = @mysql_connect("localhost:3306","root","admin");
    if(!$link){
        echo 0;
    }
    // 3.选择数据库
    $db = @mysql_select_db("test1903");
    if(!$db){
        echo 1;
    }
    // 4.设置字符集
    $utf = @mysql_query("set names utf8");
    if(!$utf){
        echo 2;
    }
    // 5.插入数据
    $insert = mysql_query('INSERT project (bt,cont,msg) VALUES("'.$a.'","'.$b.'","'.$c.'")');
    if($insert){
        // 6.插入成功，返回所有数据
        echo select();
    }else{
        echo 3;
    }


    // 专门用来请求所有数据的函数
    function select(){
        $q = mysql_query('SELECT * FROM project');
        if($q){
            $str = "";
            while(true){
                $arr = mysql_fetch_assoc($q);
                if(!$arr){
                    break;
                }
                
                $str = $str.json_encode($arr).",";
            }
            return "[".substr($str,0,-1)."]";
        }else{
            return 4;
        }
    }
?>