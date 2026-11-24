<?php
// TEKNIK INCLUDES (mengambil data header.php & data.php)
require_once 'includes/data.php'; //require_once menunjukkan jika sudah ada tidak akan diinclude lagi
include 'includes/header.php';


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// NAVIGASI
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

// FOOTER
include 'includes/footer.php';
