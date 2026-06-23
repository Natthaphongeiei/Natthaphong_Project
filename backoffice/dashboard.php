<?php 
    ob_start();
?>

<h1>Welcome to Admin Dashboard</h1>
<p>Hello </p>

<?php 
    $content = ob_get_clean();
    $title = 'Dashboard';
    include __DIR__ . '/layouts/layout.php';
?>