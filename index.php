<?php
    $html = file_get_contents('home.html');
    $html = str_replace("20221210",$_REQUEST['id'],$html);
    echo($html);
?>