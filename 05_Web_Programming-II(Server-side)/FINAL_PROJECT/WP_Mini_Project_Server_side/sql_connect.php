<?php
$conn = mysql_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_post['submit']))
{
    $name=mysql_real_escape_string($conn,$_post['name']);
    $email=mysql_real_escape_string($conn,$_post['email']);
    $number = $_post['number'];
    $date = $_post['date'];

    $insert = mysqli_query($conn, "INSERT INTO 'contact_form'(name,email,number,date) VALUES ('$name','$email','$date')");

    if($insert)
    {
        $message[] = 'appointment made successfully';
    }
    else
    {
        $message[] = 'appointment failed';
    }


}



?>