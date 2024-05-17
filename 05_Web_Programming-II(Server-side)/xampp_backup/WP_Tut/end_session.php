<?php
session_start();

if (isset($_SESSION['start_time'])) {
    $current_time = time();
    $start_time = $_SESSION['start_time'];
    $session_duration = $current_time - $start_time;

   
    session_destroy();
    $_SESSION = [];
} else {
    $session_duration = "Session has already ended.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Ended</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: aqua;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: red;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #666;
        }

        p {
            color: #fff; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Session Ended</h1>
        
        <h2>Session Duration:</h2>
        <p><?php echo $session_duration; ?> seconds</p>
    </div>
</body>
</html>
