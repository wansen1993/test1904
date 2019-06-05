<?php

    $u = @$_GET["user"];
    $p = @$_GET["pass"];
    $fnName = @$_GET["cb"];

    $data = "hello php,这是接收到的数据:".$u."---".$p;


    echo $fnName."('". $data ."')";

?>