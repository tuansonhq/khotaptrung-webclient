$(document).ready(function(){

    $('.account_category').click(function (e) {
        var slug = $(this).data('slug');

        var id = $(this).data('id');
        $('.account_category_form_' + slug + '').submit();
        // loadGameCategory(slug,id)
    })

    // function loadGameCategory(slug,id) {
    //     request = $.ajax({
    //         type: 'GET',
    //         url: '/danh-muc/' + slug,
    //         data: {
    //             id:id,
    //         },
    //         beforeSend: function (xhr) {
    //
    //         },
    //         success: (data) => {
    //             console.log(data);
    //         },
    //         error: function (data) {
    //
    //         },
    //         complete: function (data) {
    //
    //         }
    //     });
    // }
})
