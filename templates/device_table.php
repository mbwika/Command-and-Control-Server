

<?php
require_once __DIR__ . '/../includes/functions.php';

$imei = $_SESSION['password'] ?? '';
$user = getUserByImei($imei); // // This function returns the user associated with the device ID (IMEI)
?>

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <h3>User Info</h3>
    <?php if (!empty($user)): ?>
        <table class="w3-table w3-bordered">
            <tr>
                <th>Name</th>
                <td><?= htmlspecialchars($user['name']) ?></td>
            </tr>
            <tr>
                <th>Surname</th>
                <td><?= htmlspecialchars($user['surname']) ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>No user found for this device.</p>
    <?php endif; ?>
</div>

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <h3>Device Details</h3>

    <?php if (!empty($device_rows)): ?>
        <table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Device ID</th>
                    <th>Android Version (API)</th>
                    <th>Build</th>
                    <th>Kernel</th>
                    <th>Security Patch</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($device_rows as $device): ?>
                    <tr>
                        <td><?= htmlspecialchars($device['brand']) ?></td>
                        <td><?= htmlspecialchars($device['model']) ?></td>
                        <td><?= htmlspecialchars($device['device_id']) ?></td>
                        <td>v. <?= htmlspecialchars($device['os_version']) ?>, No. <?= htmlspecialchars($device['api_version']) ?></td>
                        <td><?= htmlspecialchars($device['baseband_version']) ?></td>
                        <td><?= htmlspecialchars($device['kernel']) ?></td>
                        <td><?= htmlspecialchars($device['securityPatch']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No device records found.</p>
    <?php endif; ?>
</div>

