<?php
  // 设置字符集
  header('content-type: text/html; charset=utf-8;');

  $arr = array(
    '爱过',
    '情不知所以',
    '你妹',
    '不约',
    '你怎么穿着品如的衣服',
    '晚上有空么'
  );

  // 从数组中随机出来一个
  // array_rand(数组名, 随机出来几个下标) 
  // $rand = array_rand($arr, 2);
  // print_r($rand);

  $rand = array_rand($arr,1);  // 随机的下标

  // php里面, 延时响应
  sleep(1);

  echo $arr[$rand];
?>