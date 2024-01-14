// googleMapsAPIを持ってくるときに,callback=initMapと記述しているため、initMap関数を作成
function initMap() {
    // map.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
    map = document.getElementById("map");
    // o大分の緯度は33.20640,経度は131.56633と事前に調べておいた
    let tokyoTower = { lat: 33.20640, lng: 131.56633 };
    // オプションを設定
    opt = {
        zoom: 13, //地図の縮尺を指定
        center: oita, //センターを東京タワーに指定
    };
    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
    mapObj = new google.maps.Map(map, opt);
}