<?php include 'views/layouts/header.php'; ?>
<?php include 'views/layouts/navbar.php'; ?>

<div class="container d-flex align-items-center justify-content-center min-vh-100 py-5" style="background-color: #e6e6e6;">
    <div class="card border-0 shadow-lg p-4 rounded-4 bg-white" style="max-width: 450px; width: 100%;">
        <div class="text-center mb-4">
            <h2 class="fw-black text-dark text-uppercase" style="font-family: 'Arial Black', sans-serif; font-weight: 900; letter-spacing: -1px;">SIGN <span class="text-orange">IN</span></h2>
            <p class="text-muted small">Masuk untuk mengelola rental pickup premium Anda</p>
        </div>

        <?php if ($error = Session::get('error')): ?>
            <div class="alert alert-danger border-0 rounded-3 small py-2 alert-dismissible fade show" role="alert">
                <?= $error; ?>
                <?php Session::set('error', null); ?>
                <button type="button" class="btn-close small py-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <?php if ($success = Session::get('success')): ?>
            <div class="alert alert-success border-0 rounded-3 small py-2 alert-dismissible fade show" role="alert">
                <?= $success; ?>
                <?php Session::set('success', null); ?>
                <button type="button" class="btn-close small py-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('?page=login') ?>" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                    <input type="text" name="username" class="form-control bg-light border-start-0" placeholder="Masukkan username" required>
                    <div class="invalid-feedback">Username wajib diisi!</div>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label small fw-bold text-dark">Password</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-muted"></i></span>
                    <input type="password" name="password" class="form-control bg-light border-start-0" placeholder="Masukkan password" required>
                    <div class="invalid-feedback">Password wajib diisi!</div>
                </div>
            </div>

            <button type="submit" class="btn btn-orange text-white w-100 py-2.5 fw-bold text-uppercase shadow-sm rounded-3">Sign In</button>
        </form>

        <div class="text-center mt-4">
            <p class="small text-muted mb-0">Belum memiliki akun? <a href="<?= base_url('?page=register') ?>" class="text-orange fw-bold text-decoration-none">Daftar Sekarang</a></p>
        </div>
    </div>
</div>

<?php include 'views/layouts/footer.php'; ?>