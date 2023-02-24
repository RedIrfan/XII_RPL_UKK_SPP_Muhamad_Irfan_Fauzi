$(document).ready(function() {
    var datatableParams;
    if (typeof getDatatableParams === "function"){
        datatableParams = getDatatableParams();
    }
    var datatable = $('#datatable').DataTable({
        responsive: true,
        scrollX : true,
        "language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Data tidak ditemukan",
            "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(difilter dari _MAX_ data)",
            "search" : "Cari:",
            "paginate" : {
                "first" : "Pertama",
                "last" : "Terakhir",
                "next" : "Berikutnya",
                "previous" : "Sebelumnya"
            }
        },
    });
});