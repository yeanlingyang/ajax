<?php

  // 如果是专业的后台程序员, 一般在返回json格式数据时, 也会告诉前端, 返回的格式是json格式的!!!
  header('content-type: text/json; charset=utf-8');

  // 实际开发中, 后台哪怕是最简单的数据, 也会返回 json 格式!!!
  if ($_POST['username'] === 'pp' && $_POST['password'] === '123456') {
    $result = array(
      'status' => 1,  // 1表示登陆成功
      'msg' => '恭喜您, 登陆成功'
    );
  }
  else {
    $result = array(
      'status' => 0,  // 0表示登陆失败
      'msg' => '大兄弟, 用户名或者密码错误'
    );
  }

  // 需要将 关联数组 转成 json 格式, 再传递给前端  JSON_UNESCAPED_UNICODE 256
  echo json_encode($result, JSON_UNESCAPED_UNICODE);


?>