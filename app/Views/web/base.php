<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?? 'My Website' ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5.2.3-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.css') ?>">
</head>
<body>
    <!-- Content -->
    <?= $this->renderSection('content'); ?>
</body>
</html>
