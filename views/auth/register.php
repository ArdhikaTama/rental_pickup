<?php include 'views/layouts/header.php'; ?>
<?php include 'views/layouts/navbar.php'; ?>

<div class="container d-flex align-items-center justify-content-center min-vh-100 py-5" style="background-color: #e6e6e6;">
    <div class="card border-0 shadow-lg p-4 rounded-4 bg-white" style="max-width: 500px; width: 100%;">
        <div class="text-center mb-4">
            <h2 class="fw-black text-dark text-uppercase" style="font-family: 'Arial Black', sans-serif; font-weight: 900; letter-spacing: -1px;">SIGN <span class="text-orange">UP</span></h2>
            <p class="text-muted small">Buat akun untuk mulai menikmati layanan logistik premium</p>
        </div>

        <?php if ($error = Session::get('error')): ?>
            <div class="alert alert-danger border-0 rounded-3 small py-2 alert-dismissible fade show" role="alert">
                <?= $error; ?>
                <?php Session::set('error', null); ?>
                <button type="button" class="btn-close small py-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('?page=register') ?>" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Nama Lengkap</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-card-text text-muted"></i></span>
                    <input type="text" name="nama" class="form-control bg-light border-start-0" placeholder="Nama Lengkap" required>
                    <div class="invalid-feedback">Nama lengkap wajib diisi!</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                    <input type="text" name="username" class="form-control bg-light border-start-0" placeholder="Username unik" required>
                    <div class="invalid-feedback">Username wajib diisi!</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                    <input type="email" name="email" class="form-control bg-light border-start-0" placeholder="name@example.com" required>
                    <div class="invalid-feedback">Masukkan alamat email yang valid!</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Password</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-muted"></i></span>
                    <input type="password" name="password" class="form-control bg-light border-start-0" placeholder="Minimal 6 karakter" minlength="6" required>
                    <div class="invalid-feedback">Password wajib diisi (Minimal 6 karakter)!</div>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold text-dark">Konfirmasi Password</label>
                <div class="input-group has-validation">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-shield-lock text-muted"></i></span>
                    <input type="password" name="confirm_password" class="form-control bg-light border-start-0" placeholder="Ulangi password" minlength="6" required>
                    <div class="invalid-feedback">Ulangi password Anda dengan benar!</div>
                </div>
            </div>

            <button type="submit" class="btn btn-orange text-white w-100 py-2.5 fw-bold text-uppercase shadow-sm rounded-3">Register</button>
        </form>

        <div class="text-center mt-4">
            <p class="small text-muted mb-0">Sudah memiliki akun? <a href="<?= base_url('?page=login') ?>" class="text-orange fw-bold text-decoration-none">Sign In</a></p>
        </div>
    </div>
</div>

<?php include 'views/layouts/footer.php'; ?>