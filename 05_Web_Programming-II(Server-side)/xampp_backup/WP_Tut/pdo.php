<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $db = new mysqli("localhost", "root", "", "final");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $stmt = $db->prepare("INSERT INTO dataform (fname, email,number,password,gender) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $number, $password, $gender);

    if ($stmt->execute()) {
        echo "Data entry successful.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();


    $sql = $db->prepare("SELECT fname, email, number,password,gender FROM dataform");
    $sql->execute();

   
    $sql->bind_result($name, $email, $number, $password, $gender);

    echo "Retrieved data:<br>";

    while ($sql->fetch()) {
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Number: " . $number . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Gender: " . $gender . "<br><br>";
        
    }

    $sql->close();
    $db->close();
}
?> 
