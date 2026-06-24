<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 border-bottom shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold font-monospace text-dark fs-4" href="<?= base_url() ?>">
            PREMIUM PICKUP
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-2 mt-3 mt-lg-0">
                <li class="nav-item"><a class="nav-link text-dark px-3 fw-bold small" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3 fw-bold small" href="#about">About us</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3 fw-bold small" href="#unit">Gallery</a></li>
                <li class="nav-item me-lg-4"><a class="nav-link text-dark px-3 fw-bold small" href="#contact">Contact</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-item"><a class="btn btn-orange text-white px-4 py-2 rounded-2 small fw-bold shadow-sm" href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="btn btn-outline-warning text-orange border-orange px-4 py-1-5 rounded-2 small fw-bold me-1" style="border-color: #ff7a00;" href="<?= base_url('auth/register') ?>">Sign Up</a></li>
                    <li class="nav-item"><a class="btn btn-orange text-white px-4 py-1-5 rounded-2 small fw-bold shadow-sm" href="<?= base_url('auth/login') ?>">Sign In</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>