$(document).ready(function() {
    var oTable = $('#example').DataTable({
        "lengthChange": false,
        "pageLength": 10,
        "columnDefs": [
            { "targets": 0, "type": "html-num" },
            { "targets": 0, "orderable": false }
        ],
        "stripeClasses": [],
        initComplete: function () {
            this.api().columns(4).every( function () {
                var column = this;
                var selector = $("#filterpayment");
                var select = selector
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });
    search_column = 1;

    $( "#searchOption" ).change(function() {
        search_column = $(this).val();
        console.log($(this).val());
    });
    $('#searchInput').on('keyup change', function () {
        oTable.column(search_column).search($(this).val()).draw();
    });

    $("#totalOrder").inputFilter(function(value) {
        return /^\d*$/.test(value);
    });

    $(".clearTable").click(function(){
        $('#searchInput').val('');
        oTable.column(1).search('').draw();
        oTable.column(3).search('').draw();
    });

} );