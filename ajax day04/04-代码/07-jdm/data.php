<?php
  header('content-type:text/json;charset=utf-8');
  $navs = array(
    array("url"=>"http://www.baidu.com", "src"=>"images/nav01.png", "text"=> "京东超市"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav02.png", "text"=> "全球购"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav03.png", "text"=> "全球购1"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav04.png", "text"=> "京东超市2"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav05.png", "text"=> "京东超市3"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav06.png", "text"=> "京东超市4"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav07.png", "text"=> "京东超市5"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav08.png", "text"=> "京东超市6"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav09.png", "text"=> "京东超市7"),
    array("url"=>"http://www.baidu.com", "src"=>"images/nav10.png", "text"=> "京东超市8")
  );
  echo json_encode($navs, JSON_UNESCAPED_UNICODE);
?>