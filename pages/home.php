<!-- BANNER BACKGROUND -->
<section class="hero-modern d-flex align-items-center text-center">
    <div class="container">
        <h2 class="fw-normal fs-4 text-white-50 mb-2">Sistem Booking Ruangan</h2>
        <h1 class="fw-extrabold display-5 mb-3">GKI RAYA HANKAM</h1>
    </div>
</section>

<!-- CONTAINER QUICKSEARCH -->
<section class="container quick-search-wrapper">
    <div class="quick-search-card p-4 mx-auto" style="max-width: 800px;">
        <div class="d-flex align-items-center gap-2 mb-3 text-primary-dark">
            <i class="bi bi-search fs-5 text-accent"></i>
            <h5 class="fw-bold mb-0">Cek Ruangan</h5>
        </div>

        <form id="quickCheckForm" class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="tglBook" class="form-label fw-semibold text-secondary small">TANGGAL PEMINJAMAN</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-calendar-event text-accent"></i></span>
                    <input type="date" id="tglBook" name="tanggal" class="form-control bg-light border-start-0" required>
                </div>
            </div>
            <div class="col-md-5">
                <label for="ruangBook" class="form-label fw-semibold text-secondary small">PILIH RUANGAN</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-door-open text-accent"></i></span>
                    <select id="ruangBook" name="ruangan" class="form-select bg-light border-start-0" required>
                        <option value="">-- Pilih Ruangan --</option>
                        <?php foreach ($rooms as $id => $r): ?>
                            <option value="<?php echo $r['nama']; ?>"><?php echo $r['nama']; ?> (<?php echo $r['kapasitas']; ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3 d-grid">
                <button type="submit" class="btn btn-primary fw-bold py-2">
                    Cek Ruangan
                </button>
            </div>
        </form>
        <div id="checkOutput" class="mt-4"></div>
    </div>
</section>