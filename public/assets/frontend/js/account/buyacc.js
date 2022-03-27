$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var id = $(this).data("id");
        // console.log(slug + slug_category);
        getBuyAcc(id)
    });

    function getBuyAcc(id) {
        request = $.ajax({
            type: 'GET',
            url: '/buy-acc/' + id + '/databuy',
            data: {
                // id:id
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

});
