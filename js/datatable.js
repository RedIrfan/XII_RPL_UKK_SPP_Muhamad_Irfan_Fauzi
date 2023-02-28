$(document).ready(function() {
    var datatable;
    var datatable_start = true;
    
    if (typeof datatableStart === "function"){
        datatable_start = datatableStart();
    }   
    if (datatable_start == true){
        datatable = initializeDatatable();
    }
});

function initializeDatatable(datatableParams={}){
    var params = {
        searching: true,
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
    };
    if ( Object.entries(datatableParams).length > 0){
        $.each(datatableParams , function(i, item) {
            params[i] = item;
        });
    }
    return $('#datatable').DataTable(params);
    datatableFunction(datatable);
}