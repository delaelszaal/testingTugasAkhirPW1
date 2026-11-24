$(document).ready(function () {
    // CEK RUANGAN
    $("#quickCheckForm").submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "ajax/cek_jadwal.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $("#checkOutput").html(data);
            }
        });
    });

    // GANTI GAMBAR PREVIEW RUANGAN
    $("#pilihRuangan").change(function () {
        var gambar = $("#pilihRuangan option:selected").attr("data-gambar");

        if (gambar != "") {
            $("#previewRuangan").html('<img src="' + gambar + '" class="rounded-3 w-100 h-100" style="object-fit: cover;">');
        } else {
            $("#previewRuangan").html('<div class="text-center text-muted"><i class="bi bi-image fs-1 mb-1 d-block"></i><span class="small fw-semibold">Pilih ruangan untuk melihat gambar</span></div>');
        }
    });

    // CALENDAR CLICK
    $(".calendar-cell").click(function () {
        $(".calendar-cell").removeClass("active-date");
        $(this).addClass("active-date");

        var tgl = $(this).text();
        $(".selected-date-text").text("Tanggal: " + tgl + " Oktober 2026");
    });
});