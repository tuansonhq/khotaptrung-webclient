$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var chitiet_data = $('.chitiet_data').val();
        var id_data = $('.id_data').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data,sort_by_data,chitiet_data,id_data)
    });

    $(document).on('submit', '.form-charge__accountls', function(e){
        e.preventDefault();

        var serial = $('.serial').val();
        var key = $('.key').val();
        var price = $('.price').val();
        var status = $('.status').val();
        var started_at = $('.started_at').val();
        var ended_at = $('.ended_at').val();

        if (started_at == null || started_at == undefined || started_at == ''){
            $('.started_at_data').val('');
        }else {
            $('.started_at_data').val(started_at);
        }

        if (ended_at == null || ended_at == undefined || ended_at == ''){
            $('.ended_at_data').val('');
        }else {
            $('.ended_at_data').val(ended_at);
        }

        if (serial == null || serial == undefined || serial == ''){
            $('.serial_data').val('');
        }else {
            $('.serial_data').val(serial);
        }

        if (key == null || key == undefined || key == ''){
            $('.key_data').val('');
        }else {
            $('.key_data').val(key);
        }

        if (price == null || price == undefined || price == ''){
            $('.price_data').val('');
        }else {
            $('.price_data').val(price);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }


        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();
        var chitiet_data = $('.chitiet_data').val();
        var id_data = $('.id_data').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data,sort_by_data,chitiet_data,id_data)

    });

    $('body').on('click','.btn-all',function(e){

        $('.serial_data').val('');
        $('.key_data').val('');
        $('.price_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val('');
        $('.ended_at_data').val('');

        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var chitiet_data = $('.chitiet_data').val();
        var page = $('#hidden_page_service').val();
        var id_data = $('.id_data').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data,sort_by_data,chitiet_data,id_data)

    });

    $('body').on('change','.sort_by',function(e){

        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        var sort_by = $('.sort_by').val();
        $('.sort_by_data').val(sort_by);
        var sort_by_data = $('.sort_by_data').val();
        var chitiet_data = $('.chitiet_data').val();
        var page = $('#hidden_page_service').val();
        var id_data = $('.id_data').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data,sort_by_data,chitiet_data,id_data)

    });

    $('body').on('click','.show_chitiet',function(e){
        e.preventDefault();

        $('.chitiet_data').val(1);
        var chitiet_data = $('.chitiet_data').val();
        var id = $(this).data('id');
        $('.id_data').val(id);
        var id_data = $('.id_data').val();
        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data,sort_by_data,chitiet_data,id_data)
    });

    function loadDataAccountList(page,serial,key,price,status,started_at,ended_at,sort_by_data,chitiet_data,id_data) {

        request = $.ajax({
            type: 'GET',
            url: '/lich-su-mua-account',
            data: {
                page:page,
                serial:serial,
                key:key,
                price:price,
                status:status,
                started_at:started_at,
                ended_at:ended_at,
                sort_by_data:sort_by_data,
                chitiet_data:chitiet_data,
                id_data:id_data,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $('.chitiet_data').val(0);
                $('.id_data').val('');
                if (data.chitiet_data == 1){
                    $('#taikhoandamua_password').modal('show');

                    $.each(data.data.data,function(key,value){
                        if (data.id_data == value.id){
                            var html = '';

                            html += '<div class="form-group m-t-10 row">';
                            html += '<label class="col-md-3 control-label"><b>Tài khoản:</b></label>';
                            html += '<div class="col-md-6">';
                            html += '<input class="form-control c-square c-theme" type="text" placeholder="Tài khoản" readonly="" value="' + value.title + '">';
                            html += '</div>';
                            html += '</div>';

                            html += '<div class="form-group m-t-10 row">';
                            html += '<label class="col-md-3 control-label"><b>Mật khẩu:</b></label>';
                            html += '<div class="col-md-6">';
                            html += '<div class="input-group c-square">';
                            html += '<input type="text" style="color: transparent" class="form-control c-square c-theme show_password" name="password" id="password" placeholder="Mật khẩu" readonly value="' + data.key + '" >';
                            html += '<span class="input-group-btn">';
                            html += '<button class="btn btn-default c-font-dark copy_acc" type="button" id="getpass">Copy</button>';
                            html += '</span>';
                            html += '</div>';
                            html += '<span class="help-block">Click vào nút copy để sao chép mật khẩu hoặc nhấp đúp vào ô mật khẩu để thấy mật khẩu.</span>';
                            html += '</div>';
                            html += '</div>';

                            html += '<div class="form-group m-t-10 row">';
                            html += '<label class="col-md-3 control-label"><b>Thông tin bổ sung:</b></label>';
                            html += '<div class="col-md-6">';
                            html += '<input class="form-control c-square c-theme" type="text" placeholder="Email tài khoản" readonly="" value="long@gmail.com">';
                            html += '</div>';
                            html += '</div>';

                            html += '<div class="form-group m-t-10 row">';
                            html += '<label class="col-md-3 control-label"><b>Mật khẩu email:</b></label>';
                            html += '<div class="col-md-6">';
                            html += '<div class="input-group c-square">';
                            html += '<input type="text" class="form-control c-square c-theme show_password" id="passemail" placeholder="Mật khẩu email" readonly="" value="longtest" >';
                            html += '<span class="input-group-btn">';
                            html += '<button class="btn btn-default c-font-dark copy_acc" type="button" id="getpassemail">Copy</button>';
                            html += '</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';

                            html += '<div class="form-group m-t-10 row">';
                            html += '<label class="col-md-3 control-label"><b>T.tin bổ sung:</b></label>';
                            html += '<div class="col-md-6">';
                            html += '<textarea rows="4" class="form-control c-square c-theme" type="text" placeholder="Thông tin bổ sung" readonly="" >#090909#0909090#09090909#0909090#090909#41414141</textarea>';
                            html += '</div>';
                            html += '</div>';

                            // html += '<p class="c-font-bold c-font-blue" style="font-size: 16px;font-weight: bold;color: blue">';
                            // html += 'Đã lấy mật khẩu lần đầu tiên lúc: 01/04/2022 17:53:30';
                            // html += '</p>';

                            html += '<div class="alert alert-info c-font-dark">';
                            html += 'Sau khi nhận tài khoản mật khẩu bạn hãy thực hiện đổi mật khẩu để bảo mật.';
                            html += '<br>';
                            html += 'Bạn hãy click truy cập đường dẫn sau để chuyển qua trang đổi mật khẩu.';
                            html += '<br>';
                            html += '<a class="c-font-bold c-font-red" target="_blank" href="#" style="color: red;font-weight: bold">';
                            html += 'Đăng nhập và Đổi mật khẩu game Nick Free Fire Giá Rẻ';
                            html += '</a>';
                            html += '</div>';
                            $('.form__show__chitiet').html(html);

                            document.querySelector('#getpass').addEventListener('click', function (event) {
                                var copyTextarea = document.querySelector('#pass');
                                copyTextarea.select();

                                try {
                                    document.execCommand('copy');
                                } catch (err) {
                                    alert('Trình duyệt của bạn không thể thực hiện thao tác copy nhanh');
                                }
                                if (document.selection) {
                                    document.selection.empty();
                                } else if (window.getSelection) {
                                    window.getSelection().removeAllRanges();
                                }
                            });

                            document.querySelector('#getpassemail').addEventListener('click', function (event) {
                                var copyTextarea = document.querySelector('#passemail');
                                copyTextarea.select();

                                try {
                                    document.execCommand('copy');
                                } catch (err) {
                                    alert('Trình duyệt của bạn không thể thực hiện thao tác copy nhanh');
                                }
                                if (document.selection) {
                                    document.selection.empty();
                                } else if (window.getSelection) {
                                    window.getSelection().removeAllRanges();
                                }
                            });
                        }

                    })

                }

                $("#data_pay_account_history").empty().html('');
                $("#data_pay_account_history").empty().html(data.html);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})
