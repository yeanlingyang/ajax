<?php
  // 设置字符集
  header('content-type: text/html; charset=utf-8');


  // 在这里编写 php 的代码
  // 1. echo 就表示 document.write 往页面中追加输出一段内容
  // 2. php的代码必须以 ; 结尾  (除了最后一个分号, 可以省略)
  // echo 'hello world';
  // echo 'hello world';



  // 1. php的变量  php中定义变量 使用 $ 开头
  // $name = 'zs';
  // $age = 18;

  // echo $name;   // 使用的时候, 也需要加上 $


  // 2. php的数据类型
  // $name = 'zs';
  // $age = 18;
  // $flag = true;
  // $num = 18.111;


  // 3. 字符串拼接,  php中 + 只有运算的功能,  字符串拼接 . 
  // 字符串的使用中, 单双引号都可以, 区别在于: 双引号, 可以解析变量!!!

  // $name = "鹏鹏";
  // echo $name . "真帅" . ",不错";

  // $name = "鹏鹏";
  // echo "$name 真帅,不错";


  // 4. 数组   和 js 数组类似
  // $arr = array('张三', '李四', '王五');     // 等价于 ['张三', '李四', '王五']
  
  // 获取数组的值, 通过下标
  // echo $arr[0];
  // echo $arr[1];

  // 获取数组的长度 $arr.length 不支持,  count($arr) 可以统计数组的长度
  // echo count($arr);

  // echo $arr; // echo只能输出简单类型
  // print_r($arr);  // print_r 可以打印复杂类型


  // 遍历数组
  // for ($i = 0; $i < count($arr); $i++) {
  //   echo $arr[$i];
  // }


  // 5. 关联数组(键值对存储)  和 js 对象类似    { name: 'zs',  age: 18 }
  $arr = array('name' => 'pp', 'age' => 18);  // 从关联数组中取值, 类似于 js 对象的 中括号语法

  // print_r($arr);
  echo $arr['name'];
  echo $arr['age'];



?>