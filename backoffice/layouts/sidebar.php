<?php require_once __DIR__ . '/../../includes/config.php'; ?>

<div class="sidebar">
    <div class="sidebar-header">
        <h2>🛒 Natthaphong</h2>
        <small>Admin Panel</small>
    </div>
    <ul class="sidebar-menu">
        <li><a href="<?= BASE_PATH ?>/index.php">📊 Dashboard</a></li>
        <li><a href="<?= BASE_PATH ?>/backoffice/orders/orders.php">📋 Orders</a></li>
        <li><a href="<?= BASE_PATH ?>/backoffice/products/products.php">📦 Products</a></li>
        <li><a href="<?= BASE_PATH ?>/backoffice/customers/customers.php">👤 Customers</a></li>
        <li><a href="<?= BASE_PATH ?>/backoffice/users/users.php">👥 Users</a></li>
    </ul>
</div>
