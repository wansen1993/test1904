<?php

    $u = @$_GET["user"];
    $p = @$_GET["pass"];

    $data = "hello php,这是接收到的数据:".$u."---".$p;

    echo "fn('". $data ."')";

?>