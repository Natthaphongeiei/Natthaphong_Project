<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Backoffice' ?></title>
    <!-- Modern Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Main Backoffice Stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <?php include 'sidebar.php' ?>
    
    <div class="main-wrapper">
        <?php include 'navbar.php' ?>
        
        <div class="content">
            <?php if (isset($content)) echo $content; ?>
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>

</html>