
<?php

$conn = mysqli_connect('localhost','root','','final') or die('connection failed');

if(isset($_POST['submit']))
{
   

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
   

   $insert = mysqli_query($conn, "INSERT INTO `dataform`(name, email, number, password,gender) VALUES('$name','$email','$number','$password','$gender')") or die('query failed');

   if($insert)
   {
      $message[] = 'data entered successfully!';
   }
   else
   {
      $message[] = ' failed';
   }
}
?>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $message = array();

    $name = $email = $number = $password = $gender = "";

    function sanitizeInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $number = sanitizeInput($_POST["number"]);
    $password = sanitizeInput($_POST["password"]);
    $gender = sanitizeInput($_POST["gender"]);
    
    if(empty($name))
    {
        $message[] =  "name is required";

    }elseif(!preg_match("/^[a-zA-Z ]*$/" , $name))
    {
        $message[] =  "only letters and whitespaces are allowed";
    }


    
    if(empty($email))
    {
        $message[] =  "Email is required";
    }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        $message[] =  "Invald email format";
    }


    
    if(empty($number))
    {
        $message[] = "nummber is required";
    }elseif(!preg_match("/^\d{10}$/" , $number))

    {
        $message[] = "10 digit numeric value is required.";
    }

    
    if(empty($password))
    {
        $message[] =  "Password is required";
    }elseif(strlen($password) < 6)
    {
        $message[] =  "Password Length should be greater than 6.";
    }else{
        $hashedPassword = md5($password);
    }

    
    if(empty($gender))
    {
        $message[] =  "gender is required";
    }

    if (empty($message)) {
        // Perform any desired actions, such as saving the data to a database
        // or displaying a success message.
        echo "Form submitted successfully!";
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "box">
        <h3>Form registration</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post" class ="box" >
            <?php
                if(isset($message))
                {
                    foreach($message as $message)
                    {
                        echo '<p class = "message">' .$message. '</p>';
                    }
                }
            ?>  
            <label for="name"><strong>Name</strong></label><br>
            <input type="text" placeholder="your name" id = "name" name = "name"><br><br> 
            <label for="email"><strong>Email</strong></label><br>
            <input type="text" placeholder="your email" name = "email" id = "email"> <br><br> 
            <label for="number"><strong>Number</strong></label><br>
            <input type="number" placeholder="your number" name = "number" id = "number"> <br><br> 
            <label for="pwd"><strong>Password</strong></label><br>
            <input type="password" placeholder="password" name = "password" id = "password"> <br><br> 
            <div>
                <label for="gender"><strong>Gender</strong></label><br>
                <input type="radio" name = "gender" id = "gender">Male <br> 
                <input type="radio" name = "gender" id = "gender"> Female <br><br> 
            </div>
            <label for="Submit"><strong>Submit</strong></label><br>
            <input type="submit" value = "submit" name = "submit" id = "Submit"><br><br>  
        </form>
    </div>
    


</body>
</html>