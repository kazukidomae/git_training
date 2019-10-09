<?php
    $url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=e92ce33edab8424b
    &id".$id."&name=".$name."name_kana=".$kana."name_any=".$any."tel=".$tel.
    "&format=json";
    //検索条件を変数化することで受け取った変数を検索条件に加えられる
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json,true);

    if ($arr === NULL) {
        echo("応答なし");
    }else{
        echo ("<pre>");
        var_dump($arr["results"]["shop"][0]["id"]);//デバッグ用なので実際は使わない
        echo ("</pre>"); 
        echo ($arr["results"]["shop"][0]["name_kana"]);//APIから受け取った情報を絞り込んで表示
    }
?>