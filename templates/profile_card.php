<div class="profile-card">
    <h4><?php echo htmlspecialchars($user['name'] . ' ' . $user['surname']); ?></h4>
    <img src="/images/<?php echo htmlspecialchars($profileImage); ?>" alt="Profile" class="w3-circle" height="150" width="150">
    <a href="__DIR__ . '/logout.php"><i>Logout</i></a>
</div>