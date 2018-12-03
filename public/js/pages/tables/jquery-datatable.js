$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "language": {
            "search": "Filter records:"
        }
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "search": "Filter records:"
        }
    });
});