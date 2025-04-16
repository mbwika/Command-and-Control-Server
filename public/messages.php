

<?php
// session and dependencies
session_start();
include_once '../includes/db_functions.php';
include_once '../includes/db.php';
include_once '../includes/auth.php';
include_once '../includes/functions.php';

redirectIfNotLoggedIn();

if (!isset($_SESSION['password'])) {
    echo 'Please log in to view this page';
    echo "<script language='javascript' type='text/javascript'> location.href='../index.php'; </script>";
    exit;
}

$email = $_SESSION['password'];
$page_name = 'messages.php';
$db = new Database();
$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Connection failed: " . mysqli_connect_error());

// Get user profile
function getUserProfile($email, $link) {
    $sql = "SELECT name, surname FROM users WHERE imei = '$email' ";
    return mysqli_fetch_array(mysqli_query($link, $sql));
}

// Get profile image
function getProfileImage($email, $link) {
    $sql = "SELECT image FROM users WHERE imei = '$email' ";
    return mysqli_query($link, $sql);
}

// Get phone info
function getPhoneInfoTable($conn, $email) {
    $sql = "SELECT * FROM device_info WHERE device_id = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<div id='norecord'>Database query error: " . mysqli_error($conn) . "</div>";
        return;
    }

    if (mysqli_num_rows($result) > 0) {
        include '../templates/device_table.php';
    } else {
        echo "<div id='norecord'>No records in the Database</div>";
    }
}


// Get messages with pagination
function getMessages($email, $conn, $page_name) {
    $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
    $limit = 100;
    $eu = max(0, $start);
    $this1 = $eu + $limit;
    $back = $eu - $limit;
    $next = $eu + $limit;

    $numeResult = mysqli_query($conn, "SELECT COUNT(id) as total FROM sms WHERE ukey = '$email'");
    $nume = mysqli_fetch_assoc($numeResult)['total'];

    $sql = "SELECT sms_id, type, phone_no, sms_body, sms_date FROM sms WHERE ukey = '$email' ORDER BY sms_id ASC LIMIT $eu, $limit";
    $res = mysqli_query($conn, $sql);

    include '../templates/sms_table.php'; // Pass $res inside this file or refactor if needed

    if ($nume > $limit) {
        echo "<div class='pagination'><div class='nav'>";
        if ($back >= 0) echo "<a href='$page_name?start=$back'>Prev</a> ";

        $l = 1;
        for ($i = 0; $i < $nume; $i += $limit) {
            if ($i != $eu) {
                echo "<a href='$page_name?start=$i'>$l</a> ";
            } else {
                echo "<strong>$l</strong> ";
            }
            $l++;
        }

        if ($this1 < $nume) echo "<a href='$page_name?start=$next'>Next</a>";
        echo "</div></div>";
    }
}

$profile = getUserProfile($email, $link);
$first_name = $profile['name'] ?? '';
$surname = $profile['surname'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$first_name $surname"; ?></title>

</head>
<body>
    <div class="messages-section">
        <?php 
        $userEmail = $_SESSION['password'];
        $user = getUserByImei($userEmail);
        $deviceData = getDeviceInfo();
        $profileImage = getUserImage($userEmail);
        
        $pageTitle = $user['name'] . ' ' . $user['surname'];
        
        include '../templates/header.php';
        include '../templates/profile_card.php';
        include '../templates/device_table.php';
        include '../templates/sms_table.php';
        include '../templates/footer.php';       
        ?>
    </div>
</body>
</html>
