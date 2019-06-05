<?php

    $u = @$_GET["user"];
    $p = @$_GET["pass"];

    $user = "admin";
    $pass = 123456;

    if($u == $user && $p == $pass){
        echo "1";
    }else{
        echo "0";
    }

?>