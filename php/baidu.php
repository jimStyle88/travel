<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/qunartravel/travellist/travellist?query=%22%22&page=1';
    $header = array(
        'apikey:2cf5b84e556934258c29335d55d724ee',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>