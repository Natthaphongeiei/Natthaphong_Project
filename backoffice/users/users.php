<?php
require_once '../../includes/db.php';
require_once '../../includes/config.php';
session_start();

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<?php ob_start(); ?>

<div class="table-header">
    <h2>👥 รายชื่อผู้ใช้</h2>
    <a href="create_user.php" class="button">+ สร้างผู้ใช้</a>
</div>

<!-- กล่องค้นหา -->
<div class="search-box">
    <input type="text" placeholder="ค้นหา..." />
    <button>🔎</button>
</div>

<!-- ตารางรายชื่อผู้ใช้ -->
<table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>ชื่อผู้ใช้</th>
            <th>อีเมล</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $user['id'] ?>">✏️</a> |
                    <a href="#" onclick="confirmDelete('delete_user.php?id=<?= $user['id'] ?>')">🗑️</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
$title = "Users";
include __DIR__ . '/../layouts/layout.php';
?>
