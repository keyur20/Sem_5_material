<!DOCTYPE html>
<html lang = "en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>

<style>
h1 {
    font-size: 50px;
    text-align: center;
    padding-top: 30px;
    color: #000066;
}

img {
    float: left;
    width: 77px;
}

li {
    font-size: 24px;
}

h3 {
    font-size: 24px;
    letter-spacing: 4px;
}

body {
    margin: 0;
    padding: 0;
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    width: 100%;
    height: 100vh;
    background-image: url(../pic/1.jpg);
    background-size: cover;
}
</style>

<body class="container display-4">
    <!-- Grid -->
    <div class="w3-row">
        <!-- Blog entries -->
        <div class="w3-col 18 s12">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-black">
                <div class="w3-container">
                    <h1 class="text-center font-weight-bold text-warning">Personal Profile</h1>
                    <hr color="#333333" />
                    <h3>
                        <?php
                        session_start();
                        include("connection.php");
                        error_reporting(0);
                        include 'translate.php';
                        $d_email = $_SESSION['email'];
                        $edit_doctor_profile_query = "select * from doctor where email='$d_email'";
                        $edit_run_doctor_profile_query = mysqli_query($db, $edit_doctor_profile_query);

                        while ($drow = mysqli_fetch_array($edit_run_doctor_profile_query)) {
                            echo "ID : " . $drow['id'] . " <br />";
                            echo " Name : " . $drow['f_name'] . " " . $drow['l_name'] . " <a href=d_fl_name.php>edit</a><br />";
                            echo "Email Address : " . $drow['email'] . " <br ";
                            echo "Contact Number : " . $drow['contact'] . " <a href=d_contact.php>edit</a><br />";
                            echo "Address : " . $drow['address'] . "  <a href=d_address.php>edit</a><br />";
                            echo "Change Password : <a href=d_pswd.php>edit</a><br />";
                            echo "Specialist: " . $drow['specialist'] . "</br>";
                            echo "Qualification: " . $drow['qualification'] . "</br>";
                        }
                        ?>
                    </h3>
                    <div class="container">
                        <ul class="pager font-weight-bold text-monospace">
                            <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
                            <li class="next"><a href="doctor_appointment_schedule_updating.php">Next</a></li>
                        </ul>
                    </div>
                    <script src="https://ajax.googleapis.com/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
