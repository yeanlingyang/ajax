<?php
    $con = mysql_connect("localhost", "root", "root");

    /*
    开放IP访问权限
    GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '' WITH GRANT OPTION;
    FLUSH PRIVILEGES;
    */

    if (!$con){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("test", $con);

    mysql_query("set character set 'utf8'");
    mysql_query("set names 'utf8'");

    // usleep(50000);
?>