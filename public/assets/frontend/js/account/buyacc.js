$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();

        var id = $(this).data("id");
        getBuyAcc(id)
    });

    function getBuyAcc(id) {

        var url = '/acc/'+ id+ '/databuy';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                $('.loadModal__acount').modal('toggle');
                $('.modal-content_accountlist').html(data.data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }


});
