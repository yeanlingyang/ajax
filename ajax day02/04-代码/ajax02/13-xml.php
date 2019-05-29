<?php
  // xml解析时, 一定要设置 content-type 类型 text/xml
  // 设置字符集
  header('content-type: text/xml; charset=utf-8;');

  // 读取xml格式的数据, 并且返回给前端
  // 读取内容
  echo file_get_contents('data.xml');

?>