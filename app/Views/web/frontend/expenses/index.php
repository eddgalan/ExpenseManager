<?= $this->extend('web/frontend/base'); ?>

<?= $this->section('content'); ?>
<ul class="list-group">
    <li class="list-group-item p-0">
        <a href="" class="text-decoration-none text-dark d-flex justify-content-between align-items-center w-100 p-3">
            A list item
            <span class="badge bg-danger rounded-pill">$50.00</span>
        </a>
    </li>
    <li class="list-group-item p-0">
        <a href="" class="text-decoration-none text-dark d-flex justify-content-between align-items-center w-100 p-3">
            A second list item
            <span class="badge bg-danger rounded-pill">$50.00</span>
        </a>
    </li>
    <li class="list-group-item p-0">
        <a href="" class="text-decoration-none text-dark d-flex justify-content-between align-items-center w-100 p-3">
            A third list item
            <span class="badge bg-danger rounded-pill">$50.00</span>
        </a>
    </li>
</ul>
<?= $this->endSection(); ?>
