<?php
$name = "Kimura";
if($name === "Kimura"){
    echo "私はあなたの名前です";
} else {
    echo "あなたの名前ではありません";
}

$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total =$total+ $i;
    $i = 10000;
}
echo $total;

$fruits = array("strawberry", "apple", "orange", "lemon","melon");

foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
    echo "\n";

$target = ['hoge', 'fuga']; // 元となるデータ
$list = ['hoge', 'fuga']; // 削除対象の文字列のリスト
foreach($target as $str){
 if(in_array($str,$list)){
   $target = ['fuga'];
 }
}
print_r($target);