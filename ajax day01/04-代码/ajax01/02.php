<?php

  // 设置字符集
  header('content-type: text/html; charset=utf-8');

  // php中, 有一个系统内置的全局变量, $_GET, 可以用于获取, 所有用户通过get提交的数据
  // $_GET 是一个数组, 里面存着所有通过get提交的信息
  // echo 'hello world';

  // print_r($_GET);

  访问数组的属性,通过中括号语法
  $username = $_GET['username'];
  $password = $_GET['password'];


  if ($username === 'pp' && $password === '123456') {
    echo '登录成功';
  }
  else { 
    echo '登录失败';
  }




?>