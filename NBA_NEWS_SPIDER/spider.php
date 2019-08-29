<?php

require_once __DIR__ . '/core/load.php';
require_once __DIR__ . '/config/db.php';

set_time_limit(0);

$url = 'http://sports.sina.com.cn/nba/';//爬取新浪微博NBA新闻

$html = file_get_contents($url);

preg_match_all('/><a href="(.*?)" target="_blank">(.*?)</', $html, $match);//正则匹配

$arr = [];
foreach ($match[1] as $key => $val) {
    $arr[$key]['url'] = $match[1][$key];
    $arr[$key]['title'] = $match[2][$key];
}

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}

$mysqli->set_charset("utf8mb4");

$num = 0;
foreach ($arr as $key => $val) {
    $hash = hash('sha1', $val['url']);
    //判断hash值是否已经存在
    $sql = "SELECT * FROM spider WHERE content_hash = '{$hash}'";
    if ($mysqli->query($sql)->num_rows === 0) {
        $sql = "INSERT INTO spider (content,content_hash,url) VALUES ('{$val['title']}','{$hash}','{$val['url']}')";// 插入数据
        $result = $mysqli->query($sql);
        $num++;
    }
}

$mysqli->close();
