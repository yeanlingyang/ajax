<?php

  // 通过数组, 模拟数据库, 以下名字别人不能注册
  $arr = array('pengpeng', 'pp', 'xiaopengzi', 'xiaolaodi', 'peng', 'junjun');

  // 通过get请求发送
  $username = $_GET['username'];


  // php有一个方法, 
  // in_array(值, 数组)  可以判断值, 在数组中是否存在  
  // 如果存在, 返回 true
  // 如果不存在, 返回 false
  if (in_array($username, $arr)) { 
    // 存在
    echo 'yes';
  }
  else {
    // 不存在
    echo 'no';
  }


?>