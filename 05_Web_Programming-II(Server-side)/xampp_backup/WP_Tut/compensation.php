<?php
session_start();

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

if (!isset($_SESSION['activities'])) {
    $_SESSION['activities'] = [
        'Arithmetic Operation' => 0,
        'String Operation' => 0,
        'View YouTube Video' => 0,
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activity = $_POST['activity'];
    if (array_key_exists($activity, $_SESSION['activities'])) {
        $_SESSION['activities'][$activity]++;
    }
}

$current_time = time();
$start_time = $_SESSION['start_time'];
$session_duration = $current_time - $start_time;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie and Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:aqua;
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        form {
            margin-top: 10px;
        }

        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cookie and Session</h1>
        
        <h2>Active Session Time:</h2>
        <p><?php echo $session_duration; ?> seconds</p>
        
        <h2>User Activities:</h2>
        <ul>
            <?php foreach ($_SESSION['activities'] as $activity => $count): ?>
                <li><?php echo $activity . ": " . $count; ?></li>
            <?php endforeach; ?>
        </ul>

        <form method="POST">
            <h2>Perform Activity:</h2>
            <label for="activity">Choose an activity:</label>
            <select id="activity" name="activity">
                <option value="Arithmetic Operation">Arithmetic Operation</option>
                <option value="String Operation">String Operation</option>
                <option value="View YouTube Video">View YouTube Video</option>
            </select>
            <button type="submit">Perform</button>
        </form>

        <a href="end_session.php">End Session</a>
    </div>
</body>
</html>

