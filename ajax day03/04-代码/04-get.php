<?php

  $username = $_GET['username'];

  $arr = array('pp', 'jj', 'pengpeng', 'dapeng', 'dajun', 'junjun');

  // 判断用户名在 $arr中是否存在
  if (in_array($username, $arr)) {
    // 存在
    $result = array(
      'code' => 1,
      'msg' => '用户名已存在, 该用户名不可用'
    );
  }
  else {
    // 不存在
    $result = array( 
      'code' => 0,
      'msg' => '该用户名可用'
    );
  }

  
  echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>