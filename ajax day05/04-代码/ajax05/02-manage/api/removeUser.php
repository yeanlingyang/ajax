<?php
    header('Content-Type:text/json;charset=utf-8');

    require 'db.php';

    $sql = "DELETE FROM user WHERE id = $_POST[id]";

    mysql_query($sql,$con);

    echo '{"status":"ok"}';

    mysql_close($con);


?>