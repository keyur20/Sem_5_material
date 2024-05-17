<?php
if (isset($_POST['submit'])) 
{
    // You can set cookies for form fields like this
    setcookie('name', $_POST['name'], time() + 3600, '/');
    setcookie('email', $_POST['email'], time() + 3600, '/');
}
?>
<?php
if (isset($_COOKIE['name'])) 
{
    $name = $_COOKIE['name'];
    echo "Name: $name";
}

if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
    echo "Email: $email";
}
?>

