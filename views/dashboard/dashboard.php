<?php include 'views/layouts/header.php'; ?>

<div class="d-flex min-vh-100">
    <!-- SIDEBAR -->
    <div class="bg-dark text-white p-4" style="width: 280px; min-height: 100vh;">
        <h4 class="fw-black text-uppercase mb-5" style="font-family: 'Arial Black', sans-serif;"><span class="text-orange">PREMIUM</span> RENTAL</h4>
        <ul class="nav flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link text-white bg-orange rounded-3 py-2 px-3 d-flex align-items-center" href="<?= base_url('?page=dashboard') ?>">
                    <i class="bi bi-speedometer2 me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50 py-2 px-3 d-flex align-items-center" href="#">
                    <i class="bi bi-truck me-3"></i> Data Armada
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50 py-2 px-3 d-flex align-items-center" href="#">
                    <i class="bi bi-journal-check me-3"></i> Transaksi Sewa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50 py-2 px-3 d-flex align-items-center" href="#">
                    <i class="bi bi-people me-3"></i> Pengguna
                </a>
            </li>
            <hr class="border-secondary my-4">
            <li class="nav-item">
                <a class="nav-link text-danger py-2 px-3 d-flex align-items-center" href="<?= base_url('?page=logout') ?>">
                    <i class="bi bi-box-arrow-left me-3"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- MAIN BODY -->
    <div class="flex-grow-1 bg-light">
        <!-- HEADER TOP -->
        <nav class="navbar navbar-light bg-white px-4 py-3 shadow-sm">
            <span class="navbar-brand mb-0 h1 fw-bold text-dark">System Dashboard</span>
            <div class="d-flex align-items-center gap-3">
                <a href="<?= base_url() ?>" class="btn btn-outline-dark btn-sm rounded-2"><i class="bi bi-globe me-1"></i> View Website</a>
                <div class="d-flex align-items-center">
                    <span class="me-2 fw-bold text-dark small"><?= Session::get('nama') ?></span>
                    <div class="bg-orange text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 35px; height: 35px; font-size: 0.85rem;">
                        <?= strtoupper(substr(Session::get('nama'), 0, 1)) ?>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- DASHBOARD CONTAINER -->
        <div class="p-4">
            <!-- WELCOME CARD -->
            <div class="card border-0 bg-orange text-white p-4 mb-4 rounded-4 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="fw-bold m-0">Selamat Datang, <?= Session::get('nama') ?>!</h3>
                        <p class="mb-0 opacity-90 mt-1">Anda masuk ke sistem informasi pickup rental menggunakan level otorisasi eksekutif.</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <span class="badge bg-dark px-3 py-2 text-uppercase font-monospace text-orange fw-bold" style="letter-spacing: 1px;"><?= Session::get('role') ?></span>
                    </div>
                </div>
            </div>

            <!-- CARDS GRID -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted small text-uppercase fw-bold mb-1">Total Terdaftar</p>
                                <h2 class="fw-black text-dark m-0"><?= $totalUsers ?> Users</h2>
                            </div>
                            <div class="text-orange bg-light rounded-4 p-3 fs-2 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;"><i class="bi bi-people"></i></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted small text-uppercase fw-bold mb-1">Level Otoritas</p>
                                <h3 class="fw-bold text-dark m-0 mt-1 text-uppercase font-monospace text-orange"><?= Session::get('role') ?></h3>
                            </div>
                            <div class="text-dark bg-light rounded-4 p-3 fs-2 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;"><i class="bi bi-shield-lock"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted small text-uppercase fw-bold mb-1">Waktu Sesi Aktif</p>
                                <h5 class="fw-bold text-dark m-0 mt-2"><?= Session::get('login_time') ?></h5>
                            </div>
                            <div class="text-secondary bg-light rounded-4 p-3 fs-2 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;"><i class="bi bi-clock-history"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'views/layouts/footer.php'; ?>