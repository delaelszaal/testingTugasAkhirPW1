<section class="container py-2">
    <!-- BREADCRUMB -->
    <div class="bg-white p-2 p-md-3 rounded-3 border shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">
            <div class="brand-icon rounded-circle d-flex align-items-center justify-content-center text-white">
                <i class="bi bi-list"></i>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="index.php?page=home" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active">Ruangan-ruangan</li>
                    </ol>
                </nav>
                <h5 class="fw-bold mb-0">Daftar Ruangan</h5>
            </div>
        </div>
        <a href="index.php?page=home" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            &larr; Kembali ke Home
        </a>
    </div>
    <div class="row g-4" id="roomCatalogGrid">
        <?php
        for ($i = 0; $i < count($rooms); $i++):
            $roomKey = ($i % count($rooms)) + 1;
            $item = $rooms[$roomKey];
        ?>
            <div class="col-12 col-sm-6 col-lg-3 room-card-item">
                <div class="room-card-modern h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="position-relative">

                            <div class="bg-secondary-subtle text-secondary d-flex flex-column align-items-center justify-content-center border-bottom" style="height: 185px;">
                                <img src="<?php echo htmlspecialchars($item['gambar']); ?>"
                                    alt="Foto <?php echo htmlspecialchars($item['nama']); ?>"
                                    class="w-100 border-bottom"
                                    style="height: 185px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold text-primary-dark mb-1 room-title"><?php echo $item['nama']; ?></h6>
                            <p class="small text-secondary mb-2"><?php echo $item['ringkasan']; ?></p>
                            <div class="d-flex align-items-center gap-2 small text-dark fw-semibold">
                                <i class="bi bi-people-fill text-accent"></i>
                                <span>Kapasitas: <?php echo $item['kapasitas']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 pt-0">
                        <a href="index.php?page=booking&id=<?php echo $roomKey; ?>" class="btn btn-primary w-100 rounded-3 fw-semibold btn-sm py-2">
                            View Details <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>