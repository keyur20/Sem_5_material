<!DOCTYPE html>
<html lang="en">
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
    <title>Doctor's Information</title>
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
    }

    p {
        text-align: center;
        font-size: 26px;
    }

    body {
        margin: 0;
        padding: 0;
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
        width: 100%;
        height: 100vh;
        background-image: url(../pic/1.jpg);
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body class="container display-4">
    <h1 class="text-center font-weight-bold text-white">Doctor's Information</h1><br />

    <?php
    if (isset($_GET['s_id'])) {
        include("connection.php");
        $d_id = mysqli_query($db, $_GET['s_id']);
        $show_doctor_profile_query = "select * from doctor inner join schedule on schedule.d_id=doctor.id WHERE s_id='$_GET[s_id]'";
        $show_run_doctor_profile_query = mysqli_query($db, $show_doctor_profile_query);
        $row = mysqli_fetch_array($show_run_doctor_profile_query);
    ?>
        <!-- Grid -->
        <div class="w3-row">
            <!-- Blog entries -->
            <div class="w3-col 18 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-black">
                    <div class="w3-container">
                        <h1 class="text-center font-weight-bold text-warning">Personal Information</h1>
                        <hr color="#333333" />
                        <h3 class="text-white">ID : <?php echo $row['id'] . "<br />"; ?></h3>
                        <h3 class="text-white"> Name : <?php echo $row['f_name'] . $row['l_name'] . "<br />"; ?></h3>
                        <h3 class="text-white">Email/Gmail Address : <?php echo $row['email'] . "<br />"; ?></h3>
                        <h3 class="text-white"> Contact Number : <?php echo $row['contact'] . "<br />"; ?></h3>
                        <h3 class="text-white"> Clinic Address : <?php echo $row['address'] . "<br />"; ?></h3>
                        <h3 class="text-white"> Qualification : <?php echo $row['qualification'] . "<br />"; ?></h3>
                        <h3 class="text-white"> BMDC Registration Number: <?php echo $row['bmdc_reg_num'] . "<br />"; ?></h3>
                        <h3 class="text-white"> Specialism : <?php echo $row['specialist'] . "<br />" . "<br />" . "<br />"; ?></h3>
                        <h1 class="text-center font-weight-bold text-warning">Visiting/Appointment Information</h1>
                        <hr color="#333333" />
                        <p class="text-white font-weight-bold">Schedule ID : <?php echo $row['s_id'] . "<br />"; ?></p>
                        <li><?php echo $row['Day_Time1'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time2'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time3'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time4'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time5'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time6'] . "<br />"; ?></li>
                        <li><?php echo $row['Day_Time7'] . "<br />"; ?></li>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>
