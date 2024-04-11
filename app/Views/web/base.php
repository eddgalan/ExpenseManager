<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?? 'My Website' ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5.2.3-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.css') ?>">
    <!-- Header Section -->
    <?= $this->renderSection('header_section'); ?>
</head>
<body>
    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Javascripts Section-->
    <script type="text/javascript" src="<?= base_url('assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <?= $this->renderSection('javascripts_section'); ?>
</body>
</html>
