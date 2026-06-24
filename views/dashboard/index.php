<?php include 'views/layouts/header.php'; ?>
<div class="d-flex">
    <div class="bg-dark text-white min-vh-100 p-4" style="width: 280px;">
        <h4 class="fw-bold mb-5"><span class="text-orange">PREMIUM</span> PICKUP</h4>
        <ul class="nav flex-column gap-3">
            <li class="nav-item">
                <a class="nav-link text-white active bg-orange rounded-3" href="#"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50" href="#"><i class="bi bi-truck me-2"></i> Data Armada</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50" href="#"><i class="bi bi-people me-2"></i> Pelanggan</a>
            </li>
            <hr class="border-secondary">
            <li class="nav-item">
                <a class="nav-link text-white-50" href="<?= base_url('auth/logout') ?>"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
            </li>
        </ul>
    </div>

    <div class="flex-grow-1 bg-light">
        <nav class="navbar navbar-light bg-white px-4 shadow-sm">
            <span class="navbar-brand mb-0 h1">Dashboard Overview</span>
            <div class="d-flex align-items-center">
                <span class="me-3 fw-bold"><?= $_SESSION['nama'] ?></span>
                <div class="bg-orange text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-person-fill"></i>
                </div>
            </div>
        </nav>
        
        <div class="p-4">
            <div class="card border-0 shadow-sm p-4 mb-4 rounded-4 bg-orange text-white">
                <h4>Selamat Datang, <?= $_SESSION['nama'] ?>!</h4>
                <p class="mb-0">Akses dashboard sebagai <strong><?= strtoupper($_SESSION['role']) ?></strong></p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-0">Total Users</p>
                                <h2 class="fw-bold"><?= $totalUsers ?></h2>
                            </div>
                            <div class="text-orange fs-1"><i class="bi bi-people"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4">
                        <p class="text-muted mb-0">Role Anda</p>
                        <h2 class="fw-bold"><?= ucfirst($_SESSION['role']) ?></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4">
                        <p class="text-muted mb-0">Waktu Login</p>
                        <h4 class="fw-bold mt-2"><?= date('d M Y, H:i') ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'views/layouts/footer.php'; ?>