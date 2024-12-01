<?php
$db = 'database.db';  // Path to your SQLite database file

try {
    // Try to establish a connection to the SQLite database
    $pdo = new PDO("sqlite:$db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If the connection is successful, display a success message
    echo "Connected successfully to the SQLite database: $db<br>";

    // If the form is submitted, proceed to insert data into the database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture the form data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $civility = $_POST['civility'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hash the password

        // Prepare the SQL query to insert data
        $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, email, phone, civility, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstname, $lastname, $email, $phone, $civility, $password]);

        // If insertion is successful, display a message
        echo "User registered successfully!";
    }
} catch (PDOException $e) {
    // If connection fails, display the error message
    echo "Connection failed: " . $e->getMessage();
}
?>
