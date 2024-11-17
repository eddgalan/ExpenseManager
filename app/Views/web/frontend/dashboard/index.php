<?php /** @var App\Helpers\SessionManager $managerSession */ ?>

<?= $this->extend('web/frontend/base'); ?>

<?= $this->section('content'); ?>
<h1>Bienvenido a la aplicación <strong><?= $managerSession->getFirstname(); ?></strong></h1>
    <p>Aquí va el contenido de tu aplicación.</p>
<?= $this->endSection(); ?>
