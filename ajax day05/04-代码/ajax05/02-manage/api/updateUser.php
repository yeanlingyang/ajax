<?php 
    header('Content-Type:text/json;charset=utf-8');

    require 'db.php';

    date_default_timezone_set('PRC');
    $createTime = date("Y-m-d H:i:s",time());

    $sql = "UPDATE user SET name='$_POST[name]',sex='$_POST[sex]',academy='$_POST[academy]',introduce='$_POST[introduce]',createTime='$createTime' where id='$_POST[id]'";

    if (!mysql_query($sql,$con)){
      die('Error: ' . mysql_error());
    }

    echo '{"status":"ok"}';

    mysql_close($con)

?>