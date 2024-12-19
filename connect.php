<?php
// Database connection
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "biblio"; // Your database name
$table = "use"; // Your table name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists with the given email and verify the password
    $check_sql = "SELECT * FROM $table WHERE email = ? AND password = ?";
    $check_stmt = $conn->prepare($check_sql);

    if ($check_stmt) {
        $hashed_password = hash('sha256', $password); // Hash the entered password for comparison
        $check_stmt->bind_param("ss", $email, $hashed_password);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            // User exists, now verify the password
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                echo "Login successful! Welcome, " . $user['name'] . ".";
                // Redirect to home page or user dashboard
                header("Location: home.php");
                exit();
            } else {
                echo "Error: Incorrect password.";
            }
        } else {
            echo "Error: No user found with this email and password.";
        }

        $check_stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }
}

$conn->close();
?>
