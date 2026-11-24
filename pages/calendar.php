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
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </nav>
                <h5 class="fw-bold mb-0">Daftar Ruangan</h5>
            </div>
        </div>
        <a href="index.php?page=home" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            &larr; Kembali ke Home
        </a>
    </div>

    <div class="row g-4">
        <div class="col-lg-7">
            <div class="bg-white p-4 rounded-2 border shadow-sm h-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary bg-opacity-10 text-accent p-3 rounded-3 fs-4">
                            <i class="bi bi-calendar-month"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">Oktober 2026</h5>
                            <small class="text-secondary">Pilih tanggal untuk memeriksa ketersediaan ruangan</small>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-chevron-left"></i></button>
                        <button type="button" class="btn btn-outline-secondary btn-sm fw-semibold">Hari Ini</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>

                <!-- HEADER HARI -->
                <div class="calendar-grid mb-2">
                    <div class="calendar-day-header text-danger">MIN</div>
                    <div class="calendar-day-header">SEN</div>
                    <div class="calendar-day-header">SEL</div>
                    <div class="calendar-day-header">RAB</div>
                    <div class="calendar-day-header">KAM</div>
                    <div class="calendar-day-header">JUM</div>
                    <div class="calendar-day-header">SAB</div>
                </div>

                <!-- TANGGAL -->
                <div class="calendar-grid">
                    <?php for ($d = 1; $d <= 28; $d++):
                        $isDefaultSelected = ($d == 26) ? 'active-date' : '';
                        $dotColor = ($d % 3 == 0) ? 'bg-warning' : 'bg-success';
                    ?>
                        <div class="calendar-cell <?php echo $isDefaultSelected; ?>" data-tanggal="Senin, <?php echo $d; ?> Oktober 2026">
                            <span><?php echo $d; ?></span>
                            <span class="dot-indicator <?php echo $dotColor; ?>"></span>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="bg-white p-4 rounded-2 border shadow-sm h-100">
                <h5 class="fw-bold mb-1">Status Ketersediaan Fasilitas</h5>
                <p class="small text-accent fw-semibold mb-4 selected-date-text">
                    <i class="bi bi-clock me-1"></i>Tanggal: Senin, 26 Oktober 2026
                </p>

                <div class="d-flex flex-column gap-3">
                    <?php foreach ($rooms as $id => $r): ?>
                        <div class="p-3 rounded-3 border bg-light-subtle d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2 px-3 fw-bold">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0"><?php echo $r['nama']; ?></h6>
                                    <small class="text-secondary selected-date-text">Tanggal: Senin, 26 Oktober 2026</small>
                                </div>
                            </div>
                            <a href="index.php?page=booking&id=<?php echo $id; ?>" class="btn btn-dark btn-sm rounded-2 px-3 fw-semibold">
                                + Book
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>