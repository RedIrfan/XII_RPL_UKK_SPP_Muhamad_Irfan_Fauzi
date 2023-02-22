var 
$(window).ready(function() {
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
        }
    });

    datatable.on('search.dt', function(){
        var values = $('.dataTables_filter input').val().split(":");
        

    });
});
function initDatatable(){
    

    var tfoots = $('.dataTables_scrollFootInner tfoot tr th');
    var searchColumns = getDatatableParams();
    console.log(searchColumns[2]);
    
    $.each([0, tfoots.length], function(i) {
        var item = tfoots.eq(i);
        var currentColumn = searchColumns[i];
        var title = item.text();
        
        item.html( '<input type="text" placeholder="Cari ' + title + '" />');
    });
}