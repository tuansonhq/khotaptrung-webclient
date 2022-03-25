$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var id = $(this).data("id");
        getBuyAcc(id)
    });

    function getBuyAcc(id) {
        request = $.ajax({
            type: 'GET',
            url: '/acc/' + id + '/data',
            data: {

            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                console.log("Thành công")

                $('#LoadModal').modal('toggle');
                $('.modal-content').html(data.data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    // $(document).on('click', '.atmacc',function(e){
    //     e.preventDefault();
    //     var id = $(this).data("id");
    //     getBuyAtmAcc(id)
    // });
    //
    // function getBuyAtmAcc(id) {
    //     request = $.ajax({
    //         type: 'GET',
    //         url: '/acc/' + id + '/atmdata',
    //         data: {
    //
    //         },
    //         beforeSend: function (xhr) {
    //
    //         },
    //         success: (data) => {
    //             console.log("Thành công")
    //
    //             $('#LoadModal').modal('toggle');
    //             $('.modal-content').html(data.data);
    //         },
    //         error: function (data) {
    //
    //         },
    //         complete: function (data) {
    //
    //         }
    //     });
    // }
});
