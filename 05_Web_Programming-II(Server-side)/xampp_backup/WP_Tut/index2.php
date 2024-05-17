<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php 

    ?>
    <div class="box">
        <h3>Form registration</h3>
        <form action="<?php echo $_SERVER[$PHP_SELF];?>" method = "post" class = "box">

            <label for="name"><strong>Name</strong></label><br>
            <input type="text" name = "name" placeholder = "your name"><br><br>
            <label for="email"><strong>Email</strong></label><br>
            <input type="email" name = "email" placeholder = "your email"><br><br>
            <label for="password"><strong>Password</strong></label><br>
            <input type="password" name = "password" placeholder = "your password"><br><br>
            <label for="gender"><strong>Gender</strong></label><br>
            <div>
                <input type="radio" name = "gender" id = "gender">Male
                <input type="radio" name = "gender" id = "gender">Female<br><br>
            </div>
            <label for="submit"><strong>Submit</strong></label><br>
            <input type="submit" name = "submit" value = "submit"><br><br>
        </form>
    </div>
    
</body>
</html>