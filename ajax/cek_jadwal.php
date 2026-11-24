<?php
require_once '../includes/data.php';

if (isset($_POST['tanggal']) && isset($_POST['ruangan'])) {
    $tanggal = $_POST['tanggal'];
    $ruangan = $_POST['ruangan'];
    $bentrok = false;
    $infoKegiatan = "";

    foreach ($bookings as $b) {
        // CEK NAMA RUANGAN & TANGGAL
        if ($b['tanggal'] == $tanggal && stripos($ruangan, $b['ruangan']) !== false && $b['status'] != 'Declined') {
            $bentrok = true;
            $infoKegiatan = $b['kegiatan'] . " (" . $b['waktu'] . ")";
            break;
        }
    }

    if ($bentrok) {
        echo "<div class='alert alert-danger mb-0'>
                <strong>Tidak Tersedia:</strong> $ruangan pada $tanggal sudah digunakan untuk <em>$infoKegiatan</em>.
              </div>";
    } else {
        $urlBooking = "index.php?page=booking&tanggal=" . urlencode($tanggal) . "&ruangan=" . urlencode($ruangan);

        echo "<div class='alert alert-success d-flex justify-content-between align-items-center mb-0'>
                <span><strong>Tersedia:</strong> $ruangan kosong pada $tanggal.</span>
                <a href='$urlBooking' class='btn btn-success btn-sm'>Lanjut Booking &rarr;</a>
              </div>";
    }
} else {
    echo "Something wrong!";
}
