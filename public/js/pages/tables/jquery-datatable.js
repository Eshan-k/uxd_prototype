$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "language": {
            "search": "Search Keyword"
        },
        "order": [[ 0, "desc" ]]
    });

    $('.js-basic-example0').DataTable({
        responsive: true,
        "language": {
            "search": "Search Keyword"
        },
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "search": "Search Keyword"
        },
        "order": [[ 0, "asc" ]]
    });
});