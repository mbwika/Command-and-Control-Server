
<?php
if (isset($_POST['login'])) {
    include __DIR__ . '/../includes/db.php';
    include __DIR__ . '/../includes/common.php';

    session_start();

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $_SESSION['password'] = $pass;

    // Create a new DB connection
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare the statement
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ? AND imei = ?");
    $stmt->bind_param("ss", $email, $pass); // "ss" means two strings

    $stmt->execute();
    $result = $stmt->get_result();

    // Check if we found a user
    if ($result->num_rows > 0) {
        // Redirect to contacts.php
        header("Location: contacts.php");
        exit();
    } else {
        echo "<script>alert('Login credentials are invalid!');</script>";
    }

    $stmt->close();
    $mysqli->close();
}