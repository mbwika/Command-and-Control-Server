<?php

$imei = $_SESSION['password'] ?? '';
if (!isset($smsMessages)) {
    $smsMessages = [];
}
// $sms = getMessages($email, $conn, $page_name); // Assuming this function returns the contacts associated with the device ID (IMEI)
?>

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <h3>SMSs</h3>
    <table class="w3-table w3-striped w3-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Sender/Receiver</th>
                <th>SMS</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($smsMessages)): ?>
                <?php foreach ($smsMessages as $smsMessages): ?>
                    <tr>
                        <td><?= htmlspecialchars($smsMessages['id']) ?></td>
                        <td><?= htmlspecialchars($smsMessages['type']) ?></td>
                        <td><?= htmlspecialchars($smsMessages['phone_no']) ?></td>
                        <td><?= htmlspecialchars($smsMessages['sms_body']) ?></td>
                        <td><?= htmlspecialchars($smsMessages['sms_date']) ?></td>
                        <td><a href="../public/delete_sms.php?uId=<?= $smsMessages['uId'] ?>&name=<?= urlencode($smsMessages['sms_body']) ?>" class="btn-danger">DELETE</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No messages found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>