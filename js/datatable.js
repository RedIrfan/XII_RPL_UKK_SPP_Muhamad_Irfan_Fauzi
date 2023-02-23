$(document).ready(function() {
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
    var datatableParams = getDatatableParams();
    var filterTerm;

    // datatable.on('search.dt', function(){
    //     var values = $('.dataTables_filter input').val().split(":");
        
    //     if (values.length > 1) {
    //         $.each([datatableParams], function(i, item){

    //         })
    //     }
    // });

    $('.dataTables_filter input').off().on('keyup change', function(){
        var values = this.value.split(":");
        filterTerm = this.value.trim();
        
        if (values.length >= 2){
            var columnName = datatableParams['search'];
            console.log(columnName.data());
            // datatable.columns('.' . datatableParams['search'][values[0]]).search().draw();
        }
        else{
            datatable.search(filterTerm).draw();
        }
        
        console.log(values.length);
    });

    // $.fn.dataTable.ext.search.push(
        
    //     function(settings, rowData, dataIndex){
    //         console.log(rowData)
    //         return true
    //     }
    // )
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