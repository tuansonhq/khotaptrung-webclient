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
                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(html);
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    getDichVuLienQuan(slug)

    function getDichVuLienQuan(slug) {

        var url = '/dich-vu-lien-quan';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                slug:slug
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){

                    $('#showslideracc').html('');
                    $('#showslideracc').html(data.dataslider);
                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(html);
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})
