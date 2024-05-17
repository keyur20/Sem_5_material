<?php

echo "hello";
echo "<br>";
echo "hello";

$fname = "keyur";
$lname = "patel";
$name = $fname. " " . $lname;
echo '<br>';
echo '<b>';
echo $name ;
echo '<br>';
$str = strlen($name);

echo $str;

echo '<br>';
$substring = substr($name,0,7);
echo $substring;
echo '<br>';

echo strrev($name);

echo "<br>";
$a = 56.789;
$check = var_dump(is_float($a));

echo $check;

echo (min(0,8,8,9,-159));
echo '<br>';
$x = 10;  
echo $x++;

echo '<br>';

for($y=0;$y <= 10; $y++)
{
    echo "the number is:" . $y;
    echo '<br>';
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $age => $age) {
  echo "$age = $age<br>";
}




?>










