<?php 

$data = json_decode('[
    {
      "category": "product",
      "link" : "/",
      "image": "prd01.png",
      "title": "無煙グリル調理器\nゼロスモークDX",
      "id" : 1
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd02.png",
      "title": "温調付き3枚プレート\nホットプレートミックス",
      "id" : 2
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd03.png",
      "title": "コンパクト炊飯器\nGOHANDAKI",
      "id" : 3
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd04.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 4
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd04.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 5
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd04.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 6
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd01.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 7
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd02.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 8
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd03.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 9
    },
    {
      "category": "product",
      "link" : "/",
      "image": "prd04.png",
      "title": "ホームメイドアイスメーカー\nネオ",
      "id" : 10
    },
    {
      "category": "news",
      "link" : "/",
      "title": "【TV放映】フジテレビ「めざましテレビ」の「スゴ撮」にて無煙グリル ゼロスモークDX(RM-103TE)が紹介されました。",
      "time" : "2021.05.27",
      "tag" : "#MEDIA"
    },
    {
      "category": "news",
      "link" : "/",
      "title": "【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。",
      "time" : "2021.05.27",
      "tag" : "#MEDIA"
    },
    {
      "category": "news",
      "link" : "/",
      "title": "【WEBメディア掲載】GetNavi webでゼロスモークDX　RM-103TEが紹介されました。",
      "time" : "2021.05.27",
      "tag" : "#MEDIA"
    }
]',true);


$id = $_GET['id'];

$result = null;

foreach($data as $item){
   if(isset($item['id']) && $item['id'] == $id){
       $result = $item;
   }
}

echo json_encode($result);


?>