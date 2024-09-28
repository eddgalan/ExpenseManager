<?= $this->extend('frontendBase'); ?>

<?= $this->section('content'); ?>
<!-- Contenido de la página -->
<div class="container">
    <h1>Bienvenido a la aplicación</h1>
    <p>Aquí va el contenido de tu aplicación.</p>
</div>

<!-- Bottom Navigation Bar -->
<nav class="navbar navbar-expand fixed-bottom bg-light text-center">
    <div class="w-100">
        <div class="row m-0 px-0">
            <!-- Home/Dashboard -->
            <div class="col"><a class="nav-link" href="#"><i class="bi bi-house-door"></i></a></div>
            <!-- Gastos -->
            <div class="col"><a class="nav-link" href="#"><i class="bi bi-cash-coin"></i></a></div>
            <!-- Ingresos -->
            <div class="col"><a class="nav-link" href="#"><i class="bi bi-arrow-down"></i></a></div>
            <!-- Reports -->
            <div class="col"><a class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i></a></div>
            <!-- Perfil -->
            <div class="col"><a class="nav-link" href="#"><i class="bi bi-person-circle"></i></a></div>
        </div>
    </div>
</nav>
<?= $this->endSection(); ?>
