<?php include 'views/layouts/header.php'; ?>
<?php include 'views/layouts/navbar.php'; ?>

<section class="hero-section text-white d-flex align-items-center py-5" style="background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=2000'); background-size: cover; background-position: center; min-height: 85vh;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="display-4 fw-black mb-3 text-uppercase" style="letter-spacing: -1px; font-weight: 900;">PREMIUM <br>CAR <span class="text-orange">RENTAL</span> <br>IN JAKARTA</h1>
                <p class="lead mb-4 opacity-90 fs-6">"Layanan rental mobil pickup terpercaya dengan armada berkualitas, harga kompetitif, dan sistem pemesanan yang efisien untuk mendukung kebutuhan logistik Anda."</p>
                <div class="mb-3">
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-orange px-4 py-2 fw-bold rounded-1 text-white">Hubungi kami : 0812-3456-7890</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative d-inline-block">
                    <img src="https://i.ibb.co/6wXvM6Y/hero-vehicles.png" alt="Armada Pickup" class="img-fluid floating-img" style="max-height: 380px; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="unit" class="py-5 bg-light-gray">
    <div class="container py-4">
        <h2 class="fw-black mb-5 text-uppercase text-start" style="letter-spacing: -1px; font-weight: 900;">CAR CATEGORY</h2>
        <div class="row g-4">
            <?php 
            $categories = [
                ['name' => 'L300', 'harian' => '350.000', 'mingguan' => '1.800.000', 'bulanan' => '5.300.000', 'img' => 'https://i.ibb.co/Mgs7zYm/l300-box.webp'],
                ['name' => 'Carry', 'harian' => '300.000', 'mingguan' => '1.600.000', 'bulanan' => '5.000.000', 'img' => 'https://i.ibb.co/6bW8YvM/pickup-putih.webp'],
                ['name' => 'L300', 'harian' => '300.000', 'mingguan' => '1.600.000', 'bulanan' => '5.000.000', 'img' => 'https://i.ibb.co/wSgXg9M/l300.webp'],
                ['name' => 'GranMax', 'harian' => '450.000', 'mingguan' => '1.850.000', 'bulanan' => '5.300.000', 'img' => 'https://i.ibb.co/YyY1m7n/granmax.webp'],
                ['name' => 'Viar', 'harian' => '250.000', 'mingguan' => '1.500.000', 'bulanan' => '4.000.000', 'img' => 'https://i.ibb.co/YptX48q/viar.webp'],
                ['name' => 'Carry box', 'harian' => '400.000', 'mingguan' => '1.800.000', 'bulanan' => '5.300.000', 'img' => 'https://i.ibb.co/TL6gYgS/pickup-box.webp']
            ];
            foreach($categories as $c): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100 border-0 shadow-sm p-3 rounded-4 bg-white">
                    <div class="text-center py-3 bg-white border-orange-container rounded-4 position-relative">
                        <img src="<?= $c['img'] ?>" alt="<?= $c['name'] ?>" class="img-fluid object-fit-contain px-2" style="height: 160px; width: 100%;">
                    </div>
                    <div class="card-body px-1 pt-3 pb-0">
                        <h4 class="text-center fw-bold bg-orange text-white py-2 rounded-3 text-uppercase mb-3 fs-5" style="letter-spacing: 0.5px;"><?= $c['name'] ?></h4>
                        <div class="price-info small mb-3 text-dark fw-bold">
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <span>Sewa Harian/24 jam :</span>
                                <span class="text-orange">Rp.<?= $c['harian'] ?>,-</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <span>Sewa Mingguan :</span>
                                <span class="text-orange">Rp.1.800.000,-</span>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <span>Sewa Bulanan :</span>
                                <span class="text-orange">Rp.<?= $c['bulanan'] ?>,-</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center px-1 bg-light py-2 rounded-2 border">
                            <span class="small fw-bold text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i>Mesin prima</span>
                            <span class="small fw-bold text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i>Bisa nego</span>
                            <span class="small fw-bold text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i>Terpercaya</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="about" class="py-5 bg-secondary-gray" style="background-color: #cccccc;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="fw-black text-uppercase mb-4" style="font-weight: 900; letter-spacing: -1px;">ABOUT US</h2>
                <p class="text-dark lh-base mb-4" style="text-align: justify; font-size: 0.95rem;">Kami hadir sebagai partner terpercaya untuk kebutuhan angkut Anda, memberikan layanan rental mobil pick up yang praktis, cepat, dan tanpa ribet. Dengan armada yang selalu siap pakai dan terawat, kami siap mendukung berbagai kebutuhan mulai dari pindahan hingga operasional bisnis. Didukung pelayanan yang responsif, proses booking yang mudah, dan harga yang bersahabat, kami berkomitmen memberikan pengalaman terbaik agar setiap kebutuhan transportasi Anda jadi lebih ringan dan efisien.</p>
                <div class="d-flex align-items-center gap-3">
                    <img src="https://i.ibb.co/vYm6F6V/badge-100.png" alt="100% Quality Guaranteed" style="height: 60px;">
                    <a href="#unit" class="btn btn-light bg-white border px-4 py-2 text-dark font-monospace btn-sm rounded-2 shadow-sm text-uppercase fw-bold">Lihat unit</a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="https://i.ibb.co/Mgs7zYm/l300-box.webp" alt="About Pickup" class="img-fluid rounded-3" style="max-height: 260px; object-fit: contain;">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-4 text-center">
        <h4 class="fw-bold text-dark mb-2">Kami Menyediakan Layanan Sewa Mobil Terbaik di Jakarta</h4>
        <p class="text-muted small mb-5">Kami hadir dengan bangga sebagai mitra perjalanan Anda yang terpercaya.</p>
        
        <div class="row g-4 max-width-container mx-auto" style="max-width: 1000px;">
            <div class="col-md-4">
                <div class="card p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <div class="text-orange fs-1 mb-3"><i class="bi bi-cash-coin"></i></div>
                    <h6 class="fw-bold text-dark mb-2">Harga sangat kompetitif</h6>
                    <p class="text-muted small mb-0 lh-base">Harga yang kami berikan sangat kompetitif murah, namun tidak mengurangi sedikitpun kualitas pelayanan yang kami berikan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <div class="text-orange fs-1 mb-3"><i class="bi bi-telephone-inbound"></i></div>
                    <h6 class="fw-bold text-dark mb-2">Layanan Fleksibilitas</h6>
                    <p class="text-muted small mb-0 lh-base">Kami siap mendukung berbagai keperluan perjalanan anda. Fleksibilitas layanan dari kami yang sesuai dengan kebutuhan anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <div class="text-orange fs-1 mb-3"><i class="bi bi-truck-flatbed"></i></div>
                    <h6 class="fw-bold text-dark mb-2">Armada mobil berkualitas</h6>
                    <p class="text-muted small mb-0 lh-base">Dengan perawatan mobil secara berkala dan kebersihan yang terjaga, kami menjamin kenyamanan dan keamanan perjalanan anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-5 text-dark" style="background: linear-gradient(to bottom, #ffffff, #b3b3b3);">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-md-6">
                <h5 class="fw-bold mb-4 text-uppercase">Hubungi kami</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 small fw-medium">
                    <li><i class="bi bi-envelope-fill text-dark me-2"></i> support@rentalpickupjkt.com</li>
                    <li><i class="bi bi-telephone-fill text-dark me-2"></i> Telepon: 0812-3456-7890</li>
                    <li><i class="bi bi-globe text-dark me-2"></i> www.rentalmobilpickupjkt.com</li>
                    <li class="d-flex align-items-start"><i class="bi bi-geo-alt-fill text-dark me-2 mt-1"></i> <span>jl.mangga dua Rt.1/Rw.1, kec.Grogol selatan,<br>kota Jakarta selatan, Daerah Khusus<br>Ibukota Jakarta 12220</span></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold mb-4 text-uppercase">Media sosial</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 small fw-medium">
                    <li><a href="#" class="text-decoration-none text-dark"><i class="bi bi-facebook me-2"></i> @pickupjakarta</a></li>
                    <li><a href="#" class="text-decoration-none text-dark"><i class="bi bi-instagram me-2"></i> @rental_pickup_jakarta</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'views/layouts/footer.php'; ?>