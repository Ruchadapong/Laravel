$(document).on('click', '.deleteRecord', function (e) {
    var id = $(this).attr('rel');
    var deleteFunction = $(this).attr('rel1');
    swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this Record Again!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            window.location.href = deleteFunction + "/" + id;
        });


});

$(document).ready(function () {

    $(".mydatepicker").datetimepicker({

        format: 'hh:ii',
        weekStart: 1,
        todatBtn: true,
        autoclose: true,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0


    })


});
