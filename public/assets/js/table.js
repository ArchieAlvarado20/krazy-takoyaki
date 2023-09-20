 $(function () {
    $("#myTable").DataTable({
      "pagingType": "full_numbers",
      "bDestroy": true,
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print"],
      "lengthMenu":[
        [15, 25, 50, -1],
        [15, 25, 50, "All"],
      ],
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search here...",
      }
    }).buttons().container().appendTo('#myTable_wrapper .col-md-6:eq(0)');
  });
