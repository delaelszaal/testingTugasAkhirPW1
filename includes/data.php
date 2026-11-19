<?php
// Data ruangan untuk Katalog, Dropdown, dan Kalender
$rooms = [
    1 => [
        'nama' => 'Ruang Galilea',
        'ringkasan' => 'Ruangan untuk pertemuan kecil.',
        'kapasitas' => '1 - 20 orang',
        'deskripsi' => 'Ruangan cocok untuk kegiatan yang bermuatan 1 - 10 orang hingga maksimal 20 orang.',
        'fasilitas' => ['AC', 'Proyektor LCD', 'Papan Tulis', 'Kursi Lipat 20 Unit']
    ],
    2 => [
        'nama' => 'Ruang Yerusalem',
        'ringkasan' => 'Ruangan ibadah komisi & rapat gabungan.',
        'kapasitas' => '20 - 50 orang',
        'deskripsi' => 'Ruangan berukuran sedang untuk persekutuan komisi, katekisasi, atau rapat majelis.',
        'fasilitas' => ['AC Central', 'Sound System', 'Smart TV 65 Inch', 'Mimbar Kecil']
    ],
    3 => [
        'nama' => 'Ruang Yerikho',
        'ringkasan' => 'Studio musik & ruang latihan paduan suara.',
        'kapasitas' => '10 - 25 orang',
        'deskripsi' => 'Ruangan kedap suara yang dilengkapi instrumen musik untuk latihan pemusik gereja.',
        'fasilitas' => ['Peredam Suara', 'Full Band Set', 'Keyboard', 'Speaker Monitor']
    ],
    4 => [
        'nama' => 'Ruang Betlehem',
        'ringkasan' => 'Ruang kelas Sekolah Minggu.',
        'kapasitas' => '1 - 20 orang',
        'deskripsi' => 'Ruangan ramah anak dengan meja bundar untuk kelas Sekolah Minggu.',
        'fasilitas' => ['AC', 'Karpet Edukasi', 'Alat Peraga', 'Lemari Buku']
    ]
];

// Data riwayat permohonan untuk halaman List Booking (05_Admin_Dashboard)
$bookings = [
    ['tanggal' => '2026-10-26', 'ruangan' => 'Yerikho', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Pemusik Natal Latihan', 'pic' => 'Dela', 'status' => 'Accepted'],
    ['tanggal' => '2026-10-26', 'ruangan' => 'Yerikho', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Pemusik Natal Latihan', 'pic' => 'Dela', 'status' => 'Pending'],
    ['tanggal' => '2026-10-26', 'ruangan' => 'Yerikho', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Pemusik Natal Latihan', 'pic' => 'Dela', 'status' => 'Declined']
];
