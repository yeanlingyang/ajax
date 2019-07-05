<?php

  // 假定: 所有后端的代码, 部署在后端服务器  www.back.com
  // 接口地址: http://www.back.com/ajax05/03-back/01.php

  $callback = $_GET['callback'];

  $result = array(
    'name' => 'zs',
    'age' => 18
  );

  // echo json_encode($result);
  sleep(10);

  echo $callback . '(' . json_encode($result) . ')';

?>