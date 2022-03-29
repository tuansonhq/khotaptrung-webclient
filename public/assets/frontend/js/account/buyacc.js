$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var id = $(this).data("id");
        // console.log(slug + slug_category);
        getBuyAcc(id)
    });

    function getBuyAcc(id) {

        var url = '/buy-acc/'+ id+ '/databuy';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                console.log(data)

                $('#LoadModal').modal('toggle');
                $('.modal-content').html(data.data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

});
