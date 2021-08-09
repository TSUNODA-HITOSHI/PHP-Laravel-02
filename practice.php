<?php


$height = 160;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 
$value = "AAA";
echo $value . "BBB";
//課題3番
echo 'hello php!';

echo "\n";


$hello = "Hello, ";
$name = "HITOSHI TSUNODA";
$world = "'s World!";
echo $hello . $name . $world ;
echo "\n";

//課題4番
$tech_boost = "tech ";
$tech_boost .= 'boost';
echo $tech_boost;

//課題5番
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];


echo "\n";