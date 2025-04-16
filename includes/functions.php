
<?php

// includes/functions.php
require_once __DIR__ . '/db.php';

function getUserByImei($imei) {
    $db = new Database();
    $link = $db->getDbConnection();

    $stmt = $link->prepare("SELECT name, surname FROM users WHERE imei = ?");
    if (!$stmt) {
        die("Prepare failed: " . $link->error);
    }

    $stmt->bind_param("s", $imei);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $stmt->close();
    $link->close();

    return $user;
}

function getUserImage($imei) {
    $db = new Database();
    $link = $db->getDbConnection();
    $stmt = $link->prepare("SELECT image FROM users WHERE imei = ?");
    $stmt->bind_param("s", $imei);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc()['image'] ?? null;
}

function getDeviceInfo() {
    $db = new Database();
    return $db->getDbConnection();
}

function getContactsByUser($imei, $start = 0, $limit = 100) {
    $dbo = new Database();
    $dbo = $dbo->getDbConnection();
    $stmt = $dbo->prepare("SELECT * FROM contacts WHERE uId = ? ORDER BY id ASC LIMIT ?, ?");
    $stmt->bind_param("sii", $imei, $start, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    $contacts = [];
    while ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
    return $contacts;
}

function countContacts($imei) {
    $dbo = new Database();
    $dbo = $dbo->getDbConnection();
    $stmt = $dbo->prepare("SELECT COUNT(id) FROM contacts WHERE uId = ?");
    $stmt->bind_param("s", $imei);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    return $row[0] ?? null;
}
