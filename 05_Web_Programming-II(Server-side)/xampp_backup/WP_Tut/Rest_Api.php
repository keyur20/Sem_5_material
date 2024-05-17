<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Api</title>
</head>
<body>
    <form method="get">
        <input type="text" name="empId" id="empId" placeholder="Enter Employee ID">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['empId'])) {
        $empId = $_GET['empId'];
        $url = "http://localhost/WP_Tut/rest.php/?id=" . $empId;
        $client = curl_init();
        curl_setopt_array($client, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ]);
        $result = curl_exec($client);
        curl_close($client);
        echo "Response from the server";
        echo "<pre>" . print_r($result, true) . "</pre>"; 
    }
    ?>
</body>
</html>
