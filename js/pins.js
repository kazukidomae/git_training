function start(){
    var map;
    var marker = [];
    var infoWindow = [];
    var markerData = [{
       name: '株式会社 アドグローブ',
        lat: 35.654489,
        lng: 139.707866
    }, {
        name: '渋谷駅',
        lat: 35.658743,
        lng: 139.701327
    }, {
        name: '恵比寿駅',
        lat: 35.646778,
        lng: 139.710050
    }, {
        name: '渋谷警察署',
        lat: 35.657841,
        lng: 139.703950
    }, {
        name: 'スクランブル交差点',
        lat: 35.659497,
        lng: 139.700453
    }, {
        name: 'ここら辺ハチ公',
        lat: 35.659092,
        lng: 139.700673
    }];
 
    function initMap() {
        // 地図の作成
        var mapLatLng = new google.maps.LatLng({lat: markerData[0]['lat'], lng: markerData[0]['lng']}); // 緯度経度のデータ作成
        map = new google.maps.Map(document.getElementById('sample'), { // #sampleに地図を埋め込む
            center: mapLatLng, // 地図の中心を指定
            zoom: 15 // 地図のズームを指定
        });
 
        // マーカー毎の処理
        for (var i = 0; i < markerData.length; i++) {
            markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
            marker[i] = new google.maps.Marker({ // マーカーの追加
                position: markerLatLng, // マーカーを立てる位置を指定
                map: map // マーカーを立てる地図を指定
            });
        }
    }
}