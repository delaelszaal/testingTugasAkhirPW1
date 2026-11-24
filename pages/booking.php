<?php
$prefillTanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
$prefillRuangan = isset($_GET['ruangan']) ? $_GET['ruangan'] : '';
$selected_id = isset($_GET['id']) && isset($rooms[$_GET['id']]) ? (int)$_GET['id'] : 1;
$room = $rooms[$selected_id];

$gambarAwal = '';
foreach ($rooms as $r) {
    if ($prefillRuangan == $r['nama']) {
        $gambarAwal = $r['gambar'];
        break;
    }
}
?>
<section class="container py-4">
    <!-- BREADCRUMBS -->
    <div class="bg-white p-2 p-md-3 rounded-3 border shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">

            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="index.php?page=rooms" class="text-decoration-none">Ruangan-Ruangan</a></li>
                        <li class="breadcrumb-item active">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
        <a href="index.php?page=home" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            &larr; Kembali ke Home
        </a>
    </div>
    <div class="row g-4">
        <!-- KOLOM KIRI -->
        <div class="col-lg-8">
            <div id="previewRuangan" class="bg-white p-3 rounded-4 border shadow-sm mb-4 d-flex align-items-center justify-content-center" style="height: 320px;">
                <?php if ($gambarAwal != ''): ?>
                    <img src="<?php echo $gambarAwal; ?>" alt="<?php echo $prefillRuangan; ?>" class="rounded-3 w-100 h-100" style="object-fit: cover;">
                <?php else: ?>
                    <div class="text-center text-muted">
                        <i class="bi bi-image fs-1 mb-1 d-block"></i>
                        <span class="small fw-semibold">Pilih ruangan untuk melihat gambar</span>
                    </div>
                <?php endif; ?>
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

        <!-- KOLOM KANAN -->
        <div class="col-lg-4">
            <div class="bg-white p-4 rounded-4 border shadow-sm " style="top: 90px;">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Pilih Waktu & Book</h5>
                <form id="formBookingRuangan">
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">RUANGAN DIPILIH</label>
                        <select id="pilihRuangan" name="ruangan" class="form-select" required>
                            <option value="" data-gambar="">-- Pilih Ruangan --</option>
                            <?php foreach ($rooms as $id => $r): ?>
                                <option value="<?php echo $r['nama']; ?>" data-gambar="<?php echo $r['gambar']; ?>" <?php echo ($prefillRuangan == $r['nama']) ? 'selected' : ''; ?>>
                                    <?php echo $r['nama']; ?> (<?php echo $r['kapasitas']; ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">TANGGAL PEMINJAMAN</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo htmlspecialchars($prefillTanggal); ?>" required>
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