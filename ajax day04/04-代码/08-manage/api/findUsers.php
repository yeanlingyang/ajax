<?php 
    header('Content-Type:application/json;charset=utf-8');

    require 'db.php';

    $sql="select *,(select count(*) from user) as total from user order by id desc";

    $result = mysql_query($sql);

    $list = array();
    $total = 0;

    while($row = mysql_fetch_array($result)){
        $item = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'sex' => $row['sex'],
            'academy' => $row['academy'],
            'introduce' => $row['introduce'],
            'createTime' => $row['createTime'],
        );
        array_push($list,$item);
        $total = $row['total'];
    }

    echo json_encode(
        array(
            'list'=>$list,
            'total'=> intval($total)
        )
    );

    mysql_close($con);

?>