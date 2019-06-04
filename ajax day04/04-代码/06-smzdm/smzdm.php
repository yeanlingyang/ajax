<?php

    header('content-type:application/json;charset=utf-8');

    // 读取数据 -> 一共 10 条数据
    $arr = json_decode(file_get_contents('data/smzdm_novels.json'));

    // 总个数
    $totalNum = count($arr);

    // 定义返回的信息
    $message = '数据获取成功';


    // 获取输出的个数
    if( isset( $_GET['num'] ) ){
        $outputNum = $_GET['num'];

        // 判断是否超过总个数
        if( $outputNum > $totalNum ) {
           $message = 'num 超出最大值,全部返回';
           $outputNum = $totalNum;
        }

        // 如果小于等于0 按 1 处理
        if ( $outputNum <= 0 ) {
           $message = '至少会返回 1 条数据';
           $outputNum = 1;
        }

    }else{
        // 没传, 按最大值处理
        $message = 'num 未设置 全部返回';
        $outputNum = $totalNum;
    }

    // 从数组中随机取出几个下标
    // 需要注意: 如果取出一个返回一个下标, 取出多个返回的是索引数组形式, 所以需要对取出一个进行处理
    $randomKeyArr = array_rand($arr, $outputNum);
    if ( $outputNum == 1 ) {
		$randomKeyArr = [ "0" => $randomKeyArr ];
	}

    // 定义 新数组, 根据索引从数组中取数据
    $items = [];
    for( $i = 0; $i < count( $randomKeyArr ); $i++ ){
        $items[ $i ] = $arr[ $randomKeyArr[$i] ];
    }

    echo json_encode( array(
        'message'=> $message,
        'items' => $items
    ));

    // 延迟
    // sleep(1);
?>