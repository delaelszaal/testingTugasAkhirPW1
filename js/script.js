$(document).ready(function () {
    // 1. Fitur Quick Check pada Halaman Home (01-Dashboard)
    $('#quickCheckForm').on('submit', function (e) {
        e.preventDefault();
        let tgl = $('#tglBook').val();
        let ruang = $('#ruangBook').val();

        $('#checkOutput')
            .hide()
            .html(`
                <div class="alert alert-success border-0 rounded-3 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2 mb-0 mt-3 shadow-sm">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill fs-5"></i>
                        <span><strong>${ruang}</strong> tersedia pada tanggal <strong>${tgl}</strong>!</span>
                    </div>
                    <a href="index.php?page=booking" class="btn btn-success btn-sm px-3 fw-semibold rounded-2">Lanjut Booking &rarr;</a>
                </div>
            `)
            .fadeIn(200);
    });

    // 2. Interaksi Klik Tanggal pada Halaman Kalender (03_Calendar)
    $('.calendar-cell').on('click', function () {
        $('.calendar-cell').removeClass('active-date');
        $(this).addClass('active-date');
        let tglDipilih = $(this).data('tanggal');
        $('.selected-date-text').text('Tanggal: ' + tglDipilih);
    });
});
