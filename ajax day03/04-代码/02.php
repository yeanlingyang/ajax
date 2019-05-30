<?php

  header('content-type: text/html; charset=utf-8;');

  // 人员数组    ['张三', '李四', '王五']; => 复杂了  [{}, {}, {}]  js中一般会数组包对象 

  // $arr = array('张三', '李四', '王五');

  $arr = array(
    // 关联数组
    array( 'name' => '张三1', 'gender' => '男1', 'age' => 22, 'desc' => '不错1' ),
    array( 'name' => '张三2', 'gender' => '男2', 'age' => 40, 'desc' => '不错2' ),
    array( 'name' => '张三3', 'gender' => '男3', 'age' => 30, 'desc' => '不错3' ),
    array( 'name' => '张三4', 'gender' => '男4', 'age' => 60, 'desc' => '不错4' )
  );


  // php的数组或者关联数组直接给前端, 前端也不认识, 需要转换成 json 格式, 再传输

  // 后台怎么处理 json
  // 1. json_encode(数组/关联数组);   将数组或者关联数组, 转成 json 字符串
  // 2. json_decode(json字符串);      将json字符串, 转成php的数组或者关联数组


  echo json_encode($arr, JSON_UNESCAPED_UNICODE);

?>