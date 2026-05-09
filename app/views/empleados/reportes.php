<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?> - Panel de Administración</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
</head>

<body>
    
<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<!-- CONTENIDO PRINCIPAL -->
<main>
    <nav class="breadcrumb">
        <span>Dashboard</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Empleados</span>
        <i class="fa-solid fa-chevron-right></1>
        <span id="breadcrumb-page">Reportess</span>
    </nav>
    <div class="main-content">
        <div class="table-responsive">
            <?php print_r($empleados) ?? 'Todavia no'; ?>
        </div>
    </div>
</main>
<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
</body>

</html>
