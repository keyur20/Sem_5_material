function displayPara(num) {
    const paraContainer = document.getElementById("paraContainer");
    let paraText = "";
  
    switch (num) {
      case 1:
        paraText = `<pre><code>try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // INSERT data
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
      $name = $_POST["name"];
      $rollNo = $_POST["roll_no"];
      $marks = $_POST["marks"];
  
      $stmt = $conn->prepare("INSERT INTO student (name, roll_no, marks) VALUES (:name, :roll_no, :marks)");
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':roll_no', $rollNo);
      $stmt->bindParam(':marks', $marks);
      $stmt->execute();
    }
  
    // UPDATE data
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
      $rollNo = $_POST["roll_no"];
      $newName = $_POST["new_name"];
      $newRollNo = $_POST["new_roll_no"];
      $newMarks = $_POST["new_marks"];
  
      $stmt = $conn->prepare("UPDATE student SET name = :new_name, roll_no = :new_roll_no, marks = :new_marks WHERE roll_no = :roll_no");
      $stmt->bindParam(':roll_no', $rollNo);
      $stmt->bindParam(':new_name', $newName);
      $stmt->bindParam(':new_roll_no', $newRollNo);
      $stmt->bindParam(':new_marks', $newMarks);
      $stmt->execute();
    }
  
    // DELETE data
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
      $deleteRollNo = $_POST["delete_roll_no"];
  
      $stmt = $conn->prepare("DELETE FROM student WHERE roll_no = :delete_roll_no");
      $stmt->bindParam(':delete_roll_no', $deleteRollNo);
      $stmt->execute();
    }
  
    // SELECT data
    $stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();
  
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }</code></pre>`;
        break;
      case 2:
        paraText = `<pre><code> 
        
  $servername = "localhost";
  $username = "your_username";
  $password = "your_password";
  $dbname = "your_database_name";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
  
  
        
        
        
        </code></pre>`;
        break;
      case 3:
        paraText = `<pre><code>
        $dbname = "result";
  
  try {
      $conn = new PDO("sqlite:$dbname");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
        
        
        </code></pre>`;
        break;
      case 4:
        paraText = `<pre><code>
        $host = "localhost";
  $dbname = "result";
  $username = "your_username_here";
  $password = "your_password_here";
  
  try {
      $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
        </code></pre>`;
        break;
      case 5:
        paraText = `<pre><code>
        require __DIR__.'/vendor/autoload.php';
  
  use Kreait\Firebase\Factory;
  $factory = (new Factory())-> withProjectId('database-a818f')
  ->withServiceAccount('c:/xampp/htdocs/Keyur/MultipleDb/database-a818f-firebase-adminsdk-xjo10-8d9bf0776b.json')
  ->withDatabaseUri('https://database-a818f-default-rtdb.firebaseio.com/');
  
  
  $database = $factory->createDatabase();
        
        </code></pre>`;
        break;
      default:
        paraText = "Invalid button.";
    }
  
    paraContainer.innerHTML = `<p>${paraText}</p>`;
  }
  

  