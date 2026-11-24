<section class="container py-2">
    <div class="bg-white p-2 p-md-3 rounded-3 border shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-3">
            <div class="brand-icon rounded-circle d-flex align-items-center justify-content-center text-white">
                <i class="bi bi-list"></i>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="index.php?page=home" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active">List Booking</li>
                    </ol>
                </nav>
                <h5 class="fw-bold mb-0">List Booking</h5>
            </div>
        </div>
        <a href="index.php?page=home" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            &larr; Kembali ke Home
        </a>
    </div>
    <!-- Tabel Daftar Permohonan -->
    <div class="bg-white p-4 rounded-2 border shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">PIC</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
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