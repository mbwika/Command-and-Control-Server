<?php
session_start();
require_once '../config/config.php';
require_once '../includes/db.php';
require_once '../includes/auth.php';
require_once __DIR__ . '/../includes/functions.php';

redirectIfNotLoggedIn();

$userEmail = $_SESSION['password'];
$user = getUserByImei($userEmail);
$contacts = getContactsByUser($userEmail);
$deviceData = getDeviceInfo();
$profileImage = getUserImage($userEmail);
$totalContacts = countContacts($userEmail);

$pageTitle = $user['name'] . ' ' . $user['surname'];

include '../templates/header.php';
include '../templates/profile_card.php';
include '../templates/device_table.php';
include '../templates/contacts_table.php';
include '../templates/footer.php';
?>

<?php include __DIR__ . '/../templates/header.php'; ?>

