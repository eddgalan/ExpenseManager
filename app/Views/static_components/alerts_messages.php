<div class="mb-3">
    <?php /** Success */ ?>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                <?php if (is_array(session('success'))): ?>
                    <?php foreach(session('success') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li><?= esc(session('success')) ?></li>
                <?php endif; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php /** Warning */ ?>
    <?php if(session()->has('warning')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                <?php if (is_array(session('warning'))): ?>
                    <?php foreach(session('warning') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li><?= esc(session('warning')) ?></li>
                <?php endif; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php /** Error */ ?>
    <?php if(session()->has('errors')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                <?php if (is_array(session('errors'))): ?>
                    <?php foreach(session('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li><?= esc(session('errors')) ?></li>
                <?php endif; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>
