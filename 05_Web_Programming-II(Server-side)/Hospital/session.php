<?php 
session_start();

?>

<?php
if (isset($_POST['submit'])) {
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['address'] = $_POST['address'];
    // You can store other form data in the session as well
}

?>

<?php
if (isset($_SESSION['number'])) {
    $number = $_SESSION['number'];
    echo "Number: $number";
}

if (isset($_SESSION['address'])) {
    $address = $_SESSION['address'];
    echo "Address: $address";
}
?>


