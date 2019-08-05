<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数  

function double($i) {
   $result = $i*2;
   return $result;
}
  
  echo double(5);
    
  

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数
    
 function f($a, $b){
    $sum = $a + $b;
    
    return $sum;
}
    echo f(2,7);
    

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

 function multipli($arr){
     $result = 1;
     
    foreach($arr as $num){
        $result =  $result*$num;
        echo $result;
    }
         return $result;
 }
    multipli(array(1, 3, 5 ,7, 9));

    
    
//4. 配列の中で一番大きい値を返す max_array という関数

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
      $max_number = $arr[0];
      foreach($arr as $a){
 
  if($max_number < $a) {
        return $a;
}  else{
        return $max_number;
      }
      }
   }
    
   
   
 //5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags




//array_push
//配列への追加

 $animals = ['cat', 'dog', 'bird'];
 
//array_pushを使用して要素を追加する
array_push($animals, 'elephant', 'Squirrel');
 
print_r($animals);


//array_merge
//複数の配列を連結する

$data1 = array(5, 8, 9, 15);
$data2 = array(3, 10, 8, 12);
$data3 = array_merge($data1, $data2);
print_r($data3);


//time, mktime

 echo time();

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2018);
echo $timestamp;

//date
echo date("Y/m/d H:i:s")
 
?>

