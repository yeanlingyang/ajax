<?php
  // 设置字符集
  header('content-type: text/html; charset=utf-8;');

  if ($_POST['username'] === 'pp' && $_POST['password'] === '123456') {
    echo '登录成功';
  }
  else {
    echo '登录失败';
    // 要跳回去, 让用户重新输入
    // 服务器端的跳转, 重定向
    // header('location: 地址')
    header('location: 10-用户登录案例 - 表单登录的缺点.html');
  }


?>