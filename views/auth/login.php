<?php include 'views/layouts/header.php'; ?>
<div class="auth-wrapper d-flex align-items-center justify-content-center bg-light min-vh-100">
    <div class="card border-0 shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Sign In</h3>
            <p class="text-muted">Masuk ke akun Premium Pickup</p>
        </div>
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <form action="<?= base_url('auth/login') ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control bg-light border-0 py-2" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control bg-light border-0 py-2" required>
            </div>
            <button type="submit" class="btn btn-orange w-100 py-2 fw-bold">LOGIN</button>
        </form>
        <p class="text-center mt-4 mb-0">Belum punya akun? <a href="<?= base_url('auth/register') ?>" class="text-orange fw-bold text-decoration-none">Daftar</a></p>
    </div>
</div>
<?php include 'views/layouts/footer.php'; ?>