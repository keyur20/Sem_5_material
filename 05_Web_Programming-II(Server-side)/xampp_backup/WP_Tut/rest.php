<?php
$data = array(
    array("id" => 1, "name" => "Keyur", "age" => 20),
    array("id" => 2, "name" => "Harsh", "age" => 22),
    array("id" => 3, "name" => "Aditya", "age" => 24),
    array("id" => 4, "name" => "Elvish", "age" => 27),
    array("id" => 5, "name" => "bhavya", "age" => 32)
);
$id = $_GET['id'];

echo json_encode($data[$id - 1], JSON_PRETTY_PRINT);
?>
