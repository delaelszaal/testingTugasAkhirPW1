<section class="container py-4">
    <!-- Top Header sesuai Mockup 05 -->
    <div class="bg-white p-4 rounded-4 border shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">List Permohonan Booking Ruangan</h4>
            <p class="text-secondary small mb-0">Tinjau dan lakukan persetujuan permohonan fasilitas gereja</p>
        </div>
        <a href="index.php?page=rooms" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
            &larr; Kembali ke Katalog
        </a>
    </div>

    <!-- Tabel Daftar Permohonan -->
    <div class="bg-white p-4 rounded-4 border shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-3">Tanggal</th>
                        <th class="py-3">Ruangan</th>
                        <th class="py-3">Waktu</th>
                        <th class="py-3">Nama Kegiatan</th>
                        <th class="py-3">PIC</th>
                        <th class="py-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $b):
                        if ($b['status'] === 'Accepted') {
                            $badgeClass = 'bg-success-subtle text-success border border-success-subtle';
                            $dot = '🟢';
                        } elseif ($b['status'] === 'Pending') {
                            $badgeClass = 'bg-warning-subtle text-warning-emphasis border border-warning-subtle';
                            $dot = '🟡';
                        } else {
                            $badgeClass = 'bg-danger-subtle text-danger border border-danger-subtle';
                            $dot = '🔴';
                        }
                    ?>
                        <tr>
                            <td class="py-3 px-3 fw-semibold"><?php echo $b['tanggal']; ?></td>
                            <td class="text-secondary"><?php echo $b['ruangan']; ?></td>
                            <td class="text-secondary"><?php echo $b['waktu']; ?></td>
                            <td class="fw-medium"><?php echo $b['kegiatan']; ?></td>
                            <td class="text-secondary"><?php echo $b['pic']; ?></td>
                            <td class="text-center">
                                <span class="badge rounded-pill px-3 py-2 <?php echo $badgeClass; ?>">
                                    <?php echo $dot . ' ' . $b['status']; ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>