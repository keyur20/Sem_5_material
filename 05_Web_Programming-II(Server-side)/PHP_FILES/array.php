<?php
$cars = array("Maruti", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<?php
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

<?php
//indexed array
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota", "Grand vitara", "KIA");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<?php
//associative array
echo "<br>";
echo "<br>";
$age = array("Tirth"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Tirth is " . $age['Tirth'] . " years old.";
?>

<?php
echo "<br>";
echo "<br>";
$Marks = array (
  array("Tirth",22,18),
  array("Krishiv",15,13),
  array("Harsh",5,2),
  array("Kushal",17,15)
);
  
echo $Marks[0][0]." DAM: ".$Marks[0][1].", AD ".$Marks[0][2].".<br>";
echo $Marks[1][0]." DAM: ".$Marks[1][1].", AD ".$Marks[1][2].".<br>";
echo $Marks[2][0]." DAM: ".$Marks[2][1].", AD ".$Marks[2][2].".<br>";
echo $Marks[3][0]." DAM: ".$Marks[3][1].", AD ".$Marks[3][2].".<br>";

?>

<?php
//sorting array
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>

<?php
echo "<br>";
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
?>








