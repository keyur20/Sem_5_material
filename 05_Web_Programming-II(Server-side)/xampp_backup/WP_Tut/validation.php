<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize them as empty

    $message = array();
    $fname = $email = $number = $pwd = $gender = "";

    // Retrieve data from the form
    $fname = sanitizeInput($_POST["fname"]);
    $email = sanitizeInput($_POST["email"]);
    $number = sanitizeInput($_POST["number"]);
    $pwd = sanitizeInput($_POST["pwd"]);
    $gender = sanitizeInput($_POST["gender"]);

    // Validate the Name field (required and no special characters)
    if (empty($fname)) {
        $fnameError = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
        $fnameError = "Only letters and white space allowed";
    }

    // Validate the Email field (required and a valid email format)
    if (empty($email)) {
        $emailError = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    // Validate the Number field (required and numeric)
    if (empty($number)) {
        $numberError = "Number is required";
    } elseif (!is_numeric($number)) {
        $numberError = "Number must be a numeric value";
    }

    // Validate the Password field (required)
    if (empty($pwd)) {
        $pwdError = "Password is required";
    }

    // Check if Gender is selected
    if (empty($gender)) {
        $genderError = "Gender is required";
    }

    // If there are no errors, you can proceed with further processing
    if (empty($fnameError) && empty($emailError) && empty($numberError) && empty($pwdError) && empty($genderError)) {
        // Perform any desired actions, such as saving the data to a database
        // or displaying a success message.
        echo "Form submitted successfully!";
    }
}

// Function to sanitize user input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<?php



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $message = array();


    $fname = sanitizeInput($_POST['fname']);
    $email = sanitizeInput($_POST['email']);
    $number = sanitizeInput($_POST['number']);
    $password = sanitizeInput($_POST['pwd']);
    $gender = sanitizeInput($_POST['gender']);
    
    function sanitizeInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    


   
    if(empty($fname))
    {
        $message[] = echo "name is required";
    }elseif(!preg_match("/^[a-zA-Z]*$/" , $fname))
    {
        $message[] = echo "only letters and whitespaces are allowed";
    }


    
    if(empty($email))
    {
        $message[] = echo "Email is required";
    }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        $message[] = echo "Invald email format";
    }


    
    if(empty($number))
    {
        $message[] = echo "nummber is required";
    }elseif(!preg_match("/^\d{10}$/" , $number))
    {
        $message[] = echo "10 digit numeric value is required.";
    }

    
    if(empty($password))
    {
        $message[] = echo "Password is required";
    }elseif(strlen($password) > 6)
    {
        $message[] = echo "Password Length should be greater than 6.";
    }

    
    if(empty($gender))
    {
        $message[] = echo "gender is required";
    }
}
?>








