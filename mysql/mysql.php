<?php
    // 1.连接mysql
    $link = @mysql_connect("localhost:3306","root","admin");
    if(!$link){
        echo mysql_error();
    }

    // 2.选择数据库
    $db = @mysql_select_db("test1903");
    if(!$db){
        echo mysql_error();
    }

    // 3.设置字符集
    $utf = @mysql_query("set names utf8");
    if(!$utf){
        echo mysql_error();
    }
    
    // 数据的
    
    // 增
    // $insert = @mysql_query('INSERT stu (name,sex,age) VALUES("lisi","1",15)');
    // if($insert){
    //     echo "insert success";
    // }else{
    //     echo "insert error";
    // }
    
    // 删
    // $delete = @mysql_query('DELETE FROM stu WHERE id=18');
    // if($delete){
    //     echo "delete success";
    // }else{
    //     echo "delete error";
    // }
    
    // 改
    // $update = @mysql_query('UPDATE stu SET name="heihiehie" WHERE id=25');
    // if($update){
    //     echo "update success";
    // }else{
    //     echo "update error";
    // }

    // 查
    $select = @mysql_query('SELECT * FROM stu');
    if($select){
        echo $select;
        // 解析资源型数据
        
    }else{
        echo "select error";
    }


?>