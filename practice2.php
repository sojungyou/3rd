<?php 
$name="sojung";
if($name="sojung"){
echo "私はあなたの名前です";}
else {
echo "あなたの名前ではありません";}
echo PHP_EOL;
$total=0;
for($i=0;$i<= 10000;$i++)
{
  $total+=$i;
} 
echo $total;
echo PHP_EOL;
$fruits = array ("Banana","apple","strawberry","kiwi","blueberry");
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}
echo PHP_EOL;


$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
 if($i % 5 == 0){
    echo $i
  ;}
}