<?php
    $id="";
    $url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=&large_area=Z011&id=".$id."&format=json";
    //検索条件を変数化することで受け取った変数を検索条件に加えられる
    $json = file_get_contents($url);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json,true);

    if ($arr === NULL) {
        echo("応答なし");
    }else{
        $i=0;
        while($arr["results"]["shop"][$i]!=NULL){
            echo ($arr["results"]["shop"][$i]["name"]."<br/>"); //APIから受け取った情報を絞り込んで表示
            $i++;
        }
    }
?>