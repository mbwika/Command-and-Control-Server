<?php
require_once 'db.php';

// Starts a session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirects user to login page if not logged in
function redirectIfNotLoggedIn() {
    if (!isset($_SESSION['password'])) {
        header("Location: ../index.php");
        exit();
    }
}

// Optional: Logout function
function logout() {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}

// Example login validation function
function login($email, $password) {
    $imei = $password; // because 'password' is actually the device ID (IMEI)
    global $link;
    
    $stmt = $link->prepare("SELECT * FROM users WHERE email = ? AND imei = ?");
    $stmt->bind_param("ss", $email, $imei);
    $stmt->execute();
    
    $result = $stmt->get_result();
    if ($result && $result->num_rows === 1) {
        $_SESSION['password'] = $imei; // Store the IMEI in session
        return true;
    }
    
    return false;
}
?>
