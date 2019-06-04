<?php 
    header('Content-Type:text/json;charset=utf-8');

    require 'db.php';

    date_default_timezone_set('PRC');
    $createTime = date("Y-m-d H:i:s",time());

    $sql="INSERT INTO user (name, sex, academy,introduce,createTime)
    VALUES
    ('$_POST[name]','$_POST[sex]','$_POST[academy]','$_POST[introduce]','$createTime')";


    if (!mysql_query($sql,$con)){
      die('Error: ' . mysql_error());
    }


    echo '{"status":"ok"}';

    mysql_close($con)

?>