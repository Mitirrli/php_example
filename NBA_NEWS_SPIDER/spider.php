<?php

require_once './config.php';

set_time_limit(0);

$url = 'http://sports.sina.com.cn/nba/';//爬取新浪微博NBA新闻

$html = file_get_contents($url);

preg_match_all('/><a href="(.*?)" target="_blank">(.*?)</',$html,$match);//正则匹配

$arr = array();
foreach($match[1] as $key => $val){
    $arr[$key]['url'] = $match[1][$key];
    $arr[$key]['title'] = $match[2][$key];
}

print_r($arr);
