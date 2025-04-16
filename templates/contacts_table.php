<?php
require_once __DIR__ . '/../includes/functions.php';

$imei = $_SESSION['password'] ?? '';
$contacts = getContactsByUser($imei); // Assuming this function returns the contacts associated with the device ID (IMEI)
?>

<div class="tabs">
        <table class="tab-nav">
            <tr>
                <th class="active"><a href="contacts.php">Contacts</a></th>
                <th><a href="../public/messages.php">Messages</a></th>
                <th><a href="../public/call_logs.php">Call Logs</a></th>
                <th><a href="../public/apps.php">Installed Apps</a></th>
            </tr>
        </table>
    </div>

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <h3>Contacts</h3>
    <table class="w3-table w3-striped w3-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($contacts)): ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= htmlspecialchars($contact['id']) ?></td>
                        <td><?= htmlspecialchars($contact['name']) ?></td>
                        <td><?= htmlspecialchars($contact['phoneNumber']) ?></td>
                        <td><?= htmlspecialchars($contact['email']) ?></td>
                        <td><a href="../public/delete_contact.php?uId=<?= $contact['uId'] ?>&name=<?= urlencode($contact['name']) ?>" class="btn-danger" >X</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No contacts found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>