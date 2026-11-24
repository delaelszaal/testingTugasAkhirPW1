<?php
// DATA RUANGAN
$rooms = [
    1 => [
        'nama' => 'Ruang Galilea',
        'ringkasan' => 'Ruangan untuk pertemuan kecil / pendalaman Alkitab.',
        'kapasitas' => '1 - 10 orang',
        'deskripsi' => 'Ruangan cocok untuk kegiatan yang bermuatan 1 - 10 orang hingga maksimal 10 orang.',
        'fasilitas' => ['AC', 'Proyektor LCD', 'Papan Tulis', 'Kursi Lipat 15 Unit'],
        'gambar' => 'img/galilea.png'
    ],
    2 => [
        'nama' => 'Ruang Yerusalem',
        'ringkasan' => 'Ruangan ibadah / ruang rapat kapasitas besar.',
        'kapasitas' => '20 - 50 orang',
        'deskripsi' => 'Ruangan berukuran sedang untuk persekutuan komisi, katekisasi, atau rapat majelis.',
        'fasilitas' => ['AC Central', 'Sound System', 'Smart TV 65 Inch', 'Mimbar Kecil'],
        'gambar' => 'img/yerusalem.png'
    ],
    3 => [
        'nama' => 'Ruang Yerikho',
        'ringkasan' => 'Studio musik & ruang latihan paduan suara.',
        'kapasitas' => '1 - 15 orang',
        'deskripsi' => 'Ruangan kedap suara yang dilengkapi instrumen musik untuk latihan pemusik gereja.',
        'fasilitas' => ['Peredam Suara', 'Full Band Set', 'PC', 'Sound System'],
        'gambar' => 'img/yerikho.png'
    ],
    4 => [
        'nama' => 'Ruang Nazareth',
        'ringkasan' => 'Ruang ibadah / ruang rapat kapasitas sedang.',
        'kapasitas' => '1 - 20 orang',
        'deskripsi' => 'Ruangan cukup besar untuk pertemuan dengan kapasitas sedang.',
        'fasilitas' => ['AC', 'Proyektor', 'Meja', 'Stop Kontak'],
        'gambar' => 'img/nazareth.png'
    ]
];

// DATA LIST TABLE LIST BOOKING
$bookings = [
    ['tanggal' => '2026-10-26', 'ruangan' => 'Yerikho', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Pemusik Ibadah Latihan', 'pic' => 'Dela', 'status' => 'Accepted'],
    ['tanggal' => '2026-11-18', 'ruangan' => 'Galilea', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Pendalaman Alkitab', 'pic' => 'Dela', 'status' => 'Pending'],
    ['tanggal' => '2026-10-25', 'ruangan' => 'Yerusalem', 'waktu' => '19.30 - 22.00', 'kegiatan' => 'Kids Corner', 'pic' => 'Dela', 'status' => 'Declined']
];
