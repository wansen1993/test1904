<?php
    // 1.接收前端的数据
    $a = @$_GET["aa"];
    $b = @$_GET["bb"];
    $c = @$_GET["cc"];
    $id = @$_GET["id"];


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

    // 5.更新数据
    $update = mysql_query('UPDATE project SET bt="'.$a.'",cont="'.$b.'",msg="'.$c.'" WHERE id='.$id);
    if($update){
        echo 6;
    }else{
        echo 3;
    }



?>