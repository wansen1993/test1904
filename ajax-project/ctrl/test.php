<?php

    $link = @mysql_connect("localhost:3306","root","admin");
    if(!$link){
        echo 0;
    }

    $db = @mysql_select_db("test1903");
    if(!$db){
        echo 1;
    }

    $utf = @mysql_query("set names utf8");
    if(!$utf){
        echo 2;
    }

    select();

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
            echo "[".substr($str,0,-1)."]";
        }else{
            return 4;
        }
    }
?>