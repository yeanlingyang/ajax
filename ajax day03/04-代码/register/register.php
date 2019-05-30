<?php
header('content-Type:text/json;charset=utf-8');
$name = $_POST['name'];
$pass = $_POST['pass'];
$mobile = $_POST['mobile'];
$code = $_POST['code'];

// 已注册过的用户名
$arr = array(
  "pp",
  "peng",
  "pengpeng",
  "jiangpeng"
);

if( in_array($name, $arr) ){
  $result = array(
    "code"=>101,
    "msg"=>"用户名已经存在",
    "name"=>$name
  );
} else if( $code != "1234" ) {
  $result = array(
    "code"=>102,
    "msg"=>"验证码错误",
    "name"=>$name
  );
}else {
  $result = array(
    "code"=>100,
    "msg"=>"注册成功",
    "name"=>$name
  );
}

sleep(1);

echo json_encode( $result, JSON_UNESCAPED_UNICODE );