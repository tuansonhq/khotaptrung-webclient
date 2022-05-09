$(document).ready(function () {

    var slug = $('.slug').val();

    getShowAccDetail(slug)

    function getShowAccDetail(slug) {

        var url = '/acc/'+ slug + '/showacc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                if (data.status == 1){

                    $('.data__menuacc').html('');
                    $('.data__menuacc').html(data.datamenu);

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(data.data);

                    $('#showslideracc').html('');
                    $('#showslideracc').html(data.dataslider);
                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">Hiện tại không có tài khoản nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !</span></div></div>';

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(html);
                }
                console.log(data)
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})
