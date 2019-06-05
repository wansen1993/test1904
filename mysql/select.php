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
    // 查
    $select = @mysql_query('SELECT * FROM stu');
    if($select){
        // echo $select;
        // 解析资源型数据:fetch方法每次只能解析一条数据，如果想解析所有，配合死循环

        // mysql_fetch_array()     关联数组+索引数组
        // while(true){
        //     $arr = mysql_fetch_array($select);
        //     if(!$arr){
        //         break;
        //     }
        //     print_r($arr);
        //     // echo $arr[3];
        //     echo "<br>";
        // }

        // mysql_fetch_row()        索引数组
        // while(true){
        //     $arr = mysql_fetch_row($select);
        //     if(!$arr){
        //         break;
        //     }
        //     // print_r($arr);
        //     echo $arr[3];
        //     echo "<br>";
        // }


        // mysql_fetch_assoc()      关联数组
        while(true){
            $arr = mysql_fetch_assoc($select);
            if(!$arr){
                break;
            }
            // print_r($arr);
            // echo $arr["age"];
            echo json_encode($arr);
            echo "<br>";
        }


        // mysql_fetch_object()
        // while(true){
        //     $arr = mysql_fetch_object($select);
        //     if(!$arr){
        //         break;
        //     }
        //     // print_r($arr);
        //     echo $arr->name;
        //     echo "<br>";
        // }
    }else{
        echo "select error";
    }


?>