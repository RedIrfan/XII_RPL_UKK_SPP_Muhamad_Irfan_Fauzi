$(document).ready(function() {
    var datatableParams = getDatatableParams();
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
        initComplete: function(){
            $('.dataTables_filter input').off();

            this.api().columns().every(function(){
                var column = this;
    
                $('.dataTables_filter input').on('keyup change clear', function(){
                    var values = this.value.split(":");
                    var term = values[0];
                    
                    if (values.length >= 2){
                        columnIndex = datatableParams['search'][values[0]];
                        term = values[1];
                    }
                    
                    console.log(column.data().filter());
                    if (column.data().filter(item => item.indexOf(term) > -1).length > 0){
                        column.search(term).draw();
                    }
                });
            });
        }
    });

    // $('.dataTables_filter input').off().on('keyup change', function(){
    //     var values = this.value.split(":");

    //     if (values.length >= 2){
    //         var columnIndex = datatableParams['search'][values[0]];
            
    //         datatable.columns(columnIndex).search(values[1]).draw();
    //     }
    //     else{
    //         console.log("gk");
    //         datatable.search(values[0]).draw();
    //     }    

    //     datatable.columns().every(function(){
    //         var column = this;


    //     });

    //     datatable.draw();
    //     console.log(datatable);
    // });

});