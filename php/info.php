<?php

    $url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=e92ce33edab8424b&format=json";
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json,true);

    if ($arr === NULL) {
        echo("応答なし");
    }else{
        echo("応答あり");
        $bc_id = array();
        $bc_title = array();
        $bc_write_day_year = array();
        $bc_write_day_month = array();
        $bc_write_day_day = array();
        $bc_author = array();
        $bc_tag = array();
        $bc_report = array();
    }
?>