<?php

header('content-Type:text/json;charset=utf-8');

$mobile = $_GET['mobile'];

$arr = array(
  "15751776629",
  "15751771111",
  "15751772222",
  "15751773333",
  "15751774444",
  "15751775555"
);

if(in_array( $mobile, $arr )){
  $result = array(
    "code" => 101,
    "msg" => $mobile."手机号已经存在",
    "mobile" => $mobile
  );
}else {
  $result = array(
    "code"=> 100,
    "msg"=>"验证码发送成功",
    "mobile" => $mobile
  );
}
// sleep(1);

echo json_encode($result, JSON_UNESCAPED_UNICODE);