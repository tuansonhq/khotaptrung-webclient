$(document).ready(function () {

    function convertToSlug(title) {
        var slug;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        // trả về kết quả
        return slug;
    }

    $('body').on('click','.submit--search',function(e){
        e.preventDefault();
        let recentModal = $(this).closest('.modal-nick-auto-lol');
        let keyword = convertToSlug($(recentModal).find('.keyword--search').val());

        let index = 0;
        let listItem = recentModal.find('.item-nick-lmht');
        $(listItem).each(function (i,elm) {
            $(recentModal).find('.body-modal__nick__text-error').css('display','none');
            let slug_item = $(elm).find('img').attr('alt');
            slug_item = convertToSlug(slug_item);
            $(this).toggle(slug_item.indexOf(keyword) > -1);
            if (slug_item.indexOf(keyword) > -1){
                index = index + 1
            }else {}

            if (index == 0){
                $(recentModal).find('.body-modal__nick__text-error').css('display','block');
            }

        })
    })

    $(document).on('click', '.lm_xemthem_tuong', function (e) {
        e.preventDefault();
        $('#modal-champion-list').modal('show');
    });

    $(document).on('click', '.lm_xemthem_linhthu', function (e) {
        e.preventDefault();
        $('#modal-champion-tft').modal('show');
    });

    $(document).on('click', '.lm_xemthem_trangphuc', function (e) {
        e.preventDefault();
        $('#modal-lol-custom').modal('show');
    });

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__buyacc').html('');
        $('.loading-data__buyacc').html(htmlloading);

        // var id = $(this).data("id");

        $('.loadModal__acount').modal('toggle');
        $('.loading-data__buyacc').html('');
        // getBuyAcc(id)
    });

    $(document).on('submit', '.formDonhangAccount', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__muangay').html('');
        $('.loading-data__muangay').html(htmlloading);

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);
        $('.loginBox__layma__button__displayabs').prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {

                if(response.status == 1){
                    $('.loadModal__acount').modal('hide');
                    $('#successModal').modal('show');
                    swal({
                        title: "Mua tài khoản thành công",
                        text: "Thông tin chi tiết tài khoản vui lòng về lịch sử đơn hàng.",
                        type: "success",
                        confirmButtonText: "Về lịch sử đơn hàng",
                        showCancelButton: true,
                        cancelButtonText: "Đóng",
                    })
                        .then((result) => {
                            var slug_category = $('.slug_category').val();
                            console.log(slug_category)
                            if (result.value) {
                                window.location = '/lich-su-mua-account';
                            } else if (result.dismiss === "Đóng") {
                                window.location = '/mua-acc/'+ slug_category;
                            }else {
                                window.location = '/mua-acc/'+ slug_category;
                            }
                        })
                }
                else if (response.status == 2){
                    $('.loadModal__acount').modal('hide');

                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }else {
                    $('.loadModal__acount').modal('hide');
                    swal(
                        'Lỗi!',
                        response.message,
                        'error'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
                $('.loading-data__muangay').html('');
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {

                        formSubmit.find('.notify-error').text(itemData[0]);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+response.message+'</span>');
                }
                else {
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+'Kết nối với hệ thống thất bại.Xin vui lòng thử lại'+'</span>');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    })

});
