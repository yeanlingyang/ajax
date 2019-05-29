<?php

  // 设置字符集
  header('content-type: text/html; charset=utf-8;');

  if ($_POST['username'] === 'pp' && $_POST['password'] === '123456') {
    echo 'yes';
  }
  else {
    echo 'no';
  }


?>