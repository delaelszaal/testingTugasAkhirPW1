<?php
$selected_id = isset($_GET['id']) && isset($rooms[$_GET['id']]) ? (int)$_GET['id'] : 1;
$room = $rooms[$selected_id];
?>
<section class="container py-4">
    <!-- Breadcrumbs Bar sesuai Mockup 04 -->

    <div class="bg-white p-3 p-md-4 rounded-4 border shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">
            <div class="brand-icon rounded-circle d-flex align-items-center justify-content-center text-white">
                <i class="bi bi-calendar2-week"></i>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="index.php?page=home" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $room['nama']; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <a href="index.php?page=rooms" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            &larr; Kembali ke Katalog
        </a>
    </div>
    <div class="row g-4">
        <!-- Kolom Kiri (Preview Gambar & Spesifikasi Ruangan) -->
        <div class="col-lg-8">
            <div class="bg-white  p-3 rounded-4 border shadow-sm mb-4 ">
                <i class="bi bi-image  fs-1 mb-1"></i>
                <span class="small fw-semibold">
                    <p>[Placeholder]</p>
                </span>
            </div>

            <div class="bg-white p-4 rounded-4 border shadow-sm">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Spesifikasi Ruangan</h5>

                <h6 class="fw-bold text-accent">Deskripsi</h6>
                <p class="text-secondary mb-4"><?php echo $room['deskripsi']; ?></p>

                <h6 class="fw-bold text-accent mb-3">Fasilitas Tersedia</h6>
                <div class="row g-2">
                    <?php foreach ($room['fasilitas'] as $fasilitas): ?>
                        <div class="col-sm-6">
                            <div class="p-2 px-3 rounded-3 bg-light border d-flex align-items-center gap-2 small fw-semibold">
                                <i class="bi bi-patch-check-fill text-success"></i>
                                <span><?php echo $fasilitas; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan (Form Pilih Waktu & Book) -->
        <div class="col-lg-4">
            <div class="bg-white p-4 rounded-4 border shadow-sm sticky-lg-top" style="top: 90px;">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Pilih Waktu & Book</h5>
                <form id="formBookingRuangan">
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">RUANGAN DIPILIH</label>
                        <select class="form-select bg-light fw-semibold" id="inputRuangan">
                            <?php foreach ($rooms as $id => $r): ?>
                                <option value="<?php echo $r['nama']; ?>" <?php echo ($id == $selected_id) ? 'selected' : ''; ?>>
                                    <?php echo $r['nama']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">TANGGAL PEMINJAMAN</label>
                        <input type="date" class="form-control bg-light" id="inputTanggal" value="2026-10-26" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">PILIH WAKTU JAM</label>
                        <select class="form-select bg-light" id="inputWaktu" required>
                            <option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
                            <option value="10.00 - 13.00 WIB" selected>10.00 - 13.00 WIB</option>
                            <option value="15.00 - 18.00 WIB">15.00 - 18.00 WIB</option>
                            <option value="19.30 - 22.00 WIB">19.30 - 22.00 WIB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">NAMA KEGIATAN / ACARA</label>
                        <input type="text" class="form-control bg-light" id="inputKegiatan" placeholder="Contoh: Latihan Musik Natal" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold small">NAMA PIC / PENANGGUNG JAWAB</label>
                        <input type="text" class="form-control bg-light" id="inputPIC" placeholder="Contoh: Dela Elsa" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 fw-bold">
                        <i class="bi bi-send-check me-1"></i>Book Sekarang!
                    </button>
                </form>
                <div id="bookingAlert" class="mt-3" style="display:none;"></div>
            </div>
        </div>
    </div>
</section>