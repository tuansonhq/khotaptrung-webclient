$(document).ready(function () {

    var slug = $('.slug').val();
    var slug_category = $('.slug_category').val();

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

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(data.data);

                    $('.modal-content_accountlist').html('');
                    $('.modal-content_accountlist').html(data.htmlbuyacc);
                    $('.loading-data__buyacc').html('');
                    const jwt =  $('meta[name="jwt').attr('content');

                    if (jwt == null || jwt == '' || jwt == undefined || jwt === 'jwt'){
                        var html = '';
                        html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/' + data.id + '">Đăng nhập</a>';
                        html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';

                        $('.data__modal__buyacc').html('');
                        $('.data__modal__buyacc').html(html);

                        var htmlform = '';
                        htmlform += '<label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>';

                        $('.form__data__buyacc').html('');
                        $('.form__data__buyacc').html(htmlform);
                    }else {

                        if (parseInt(data.price) > parseInt(data.balance)){
                            var html = '';
                            html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>';
                            html += '<a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" href="/recharge-atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>';
                            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';

                            $('.data__modal__buyacc').html('');
                            $('.data__modal__buyacc').html(html);

                            var htmlform = '';
                            htmlform += '<div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>';

                            $('.form__data__buyacc').html('');
                            $('.form__data__buyacc').html(htmlform);

                        }else if (parseInt(data.price) <= parseInt(data.balance)){
                            var html = '';
                            html += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>';
                            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';

                            $('.data__modal__buyacc').html('');
                            $('.data__modal__buyacc').html(html);

                            var htmlform = '';
                            htmlform += '<div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>';

                            $('.form__data__buyacc').html('');
                            $('.form__data__buyacc').html(htmlform);
                        }
                    }

                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(html);

                    var htmlform = '';
                    htmlform += '<label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>';

                    $('.form__data__buyacc').html('');
                    $('.form__data__buyacc').html(htmlform);

                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    getDichVuLienQuan(slug_category)

    function getDichVuLienQuan(slug_category) {

        var url = '/related-acc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                slug:slug_category
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
