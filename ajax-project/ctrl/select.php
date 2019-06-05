<?php

    // 1.连接mysql
    $link = @mysql_connect("localhost:3306","root","admin");
    if(!$link){
        echo 0;
    }
    // 2.选择数据库
    $db = @mysql_select_db("test1903");
    if(!$db){
        echo 1;
    }
    // 3.设置字符集
    $utf = @mysql_query("set names utf8");
    if(!$utf){
        echo 2;
    }

    
    echo select();


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