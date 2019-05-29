<?php
  // 设置字符集
  header('content-type: text/html; charset=utf-8;');

  echo '大家好, 我是' . $_GET['username'] . '我的密码是' . $_GET['password'];

?>