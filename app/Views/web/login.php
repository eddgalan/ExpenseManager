<?= $this->extend('web/base'); ?>

<?= $this->section('content'); ?>
<div class="container vh-100 pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('register'); ?>">
                        <h2 class="text-center mt-4 mb-5">Login</h2>
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <ul class="m-0">
                                    <li><?= esc(session('success')) ?></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username or email: <spam class="text-danger">*</spam> </label>
                            <input type="text" class="form-control" id="username" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password: <spam class="text-danger">*</spam> </label>
                            <input type="password" class="form-control" id="password" placeholder="********">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 p-3">Login</button>
                        <div class="mt-3 text-center">
                            <a href="<?= base_url('register') ?>" class="text-decoration-none">Register now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
