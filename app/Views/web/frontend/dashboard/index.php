<?php /** @var string $firstname */ ?>

<?= $this->extend('web/frontend/base'); ?>

<?= $this->section('content'); ?>
<h1>Bienvenido a la aplicación <strong><?= $firstname ?></strong></h1>
    <p>Aquí va el contenido de tu aplicación.</p>
<?= $this->endSection(); ?>
