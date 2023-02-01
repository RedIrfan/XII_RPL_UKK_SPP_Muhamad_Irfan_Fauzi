$(document).ready(function() {
    $('#datatable').DataTable( {
        "language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Data tidak ditemukan",
            "info": "Menampilkan _PAGE_ dari _PAGES_",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(difilter dari _MAX_ data)",
            "search" : "Cari:",
            "paginate" : {
                "first" : "Pertama",
                "last" : "Terakhir",
                "next" : "Berikutnya",
                "previous" : "Sebelumnya"
            }
        }
    } );
} );