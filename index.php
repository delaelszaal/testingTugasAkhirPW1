<?php
// Panggil file data dan header menggunakan teknik file include
require_once 'includes/data.php';
include 'includes/header.php';

// Tangkap parameter 'page' dari URL, jika kosong arahkan ke 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Struktur navigasi dengan PHP switch statement
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'rooms':
        include 'pages/rooms.php';
        break;
    case 'calendar':
        include 'pages/calendar.php';
        break;
    case 'booking':
        include 'pages/booking.php';
        break;
    case 'list_booking':
        include 'pages/list_booking.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'credits':
        include 'pages/credits.php';
        break;
    default:
        echo "<div class='container py-5 text-center'><h3>Halaman tidak ditemukan!</h3></div>";
        break;
}

// Panggil footer
include 'includes/footer.php';
