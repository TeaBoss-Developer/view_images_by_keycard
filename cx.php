<?php
    $arr = explode("nk",$_REQUEST['id']);
    for ($i=0; $i<sizeof ($arr); $i++)
    {
        echo("<hr/><img src=\"" . $arr[$i] . "\"  alt=\" . $arr[$i] . \" />");
    }
?>
