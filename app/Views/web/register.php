<?= $this->extend('base'); ?>

<?= $this->section('content'); ?>
<div class="container vh-100 pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?= route_to('registerPost'); ?>">
                        <?= csrf_field(); ?>
                        <h2 class="text-center mt-4 mb-5">Register</h2>
                        <?= view('static_components/alerts_messages.php'); ?>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname: <spam class="text-danger">*</spam></label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="" 
                                   minlength="1" maxlength="150" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname: <spam class="text-danger">*</spam></label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="" 
                                   minlength="1" maxlength="150" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email: <spam class="text-danger">*</spam></label>
                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password: <spam class="text-danger">*</spam> </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="* * * * * * * *" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 p-3">Submit</button>
                    </form>
                </div>
            </div>
            <div class="mt-3 mb-3 text-center">
                <a href="<?= route_to('loginForm') ?>" class="text-decoration-none">Login</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
