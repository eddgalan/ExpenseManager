<nav class="navbar navbar-expand fixed-bottom bg-light text-center p-0 bottomNavbar">
    <div class="w-100 h-100">
        <div class="row m-0 px-0 h-100">
            <!-- Home/Dashboard -->
            <div class="col p-0 d-flex align-items-center justify-content-center">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center w-100 h-100" href="<?= route_to('dashboard'); ?>">
                    <i class="bi bi-house-door d-block"></i>
                    <span class="d-block">Inicio</span>
                </a>
            </div>
            <!-- Expenses -->
            <div class="col p-0 d-flex align-items-center justify-content-center">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center w-100 h-100"
                   href="<?= route_to('expenses'); ?>"><i class="bi bi-cash-coin t"></i>
                    <span class="d-block">Gastos</span>
                </a>
            </div>
            <!-- Income -->
            <div class="col p-0 d-flex align-items-center justify-content-center">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center w-100 h-100"
                   href="<?= route_to('income'); ?>"><i class="bi bi-arrow-down"></i>
                    <span class="d-block">Ingresos</span>
                </a>
            </div>
            <!-- Reports -->
            <div class="col p-0 d-flex align-items-center justify-content-center">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center w-100 h-100"
                   href="<?= route_to('reports'); ?>"><i class="bi bi-file-earmark-bar-graph"></i>
                    <span class="d-block">Reportes</span>
                </a>
            </div>
            <!-- Profile -->
            <div class="col p-0 d-flex align-items-center justify-content-center">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center w-100 h-100"
                   href="<?= route_to('profile'); ?>"><i class="bi bi-person-circle"></i>
                    <span class="d-block">Perfil</span>
                </a>
            </div>
        </div>
    </div>
</nav>