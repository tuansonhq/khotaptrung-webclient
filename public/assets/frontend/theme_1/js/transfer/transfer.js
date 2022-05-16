$(document).ready(function(){

    // get profile

    // get tele
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    function getBank (){
        const url = '/get-bank';
        $.ajax({
            type: "GET",
            url: url,
            cache:false,
            data: {
                _token:csrf_token,
                jwt:token
            },
            beforeSend: function (xhr) {

            },
            success: function (data) {
                console.log(111)
                console.log(data)
                if(data.status === "LOGIN"){
                    window.location.href = '/logout';
                    // method = method || 'post';
                    return;
                }
                if(data.status === "ERROR"){
                    alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                }
                if(data.status == true){
                    $('select[name="id_bank"]').find('option:not(:first)').remove();
                    for(i = 0; i < data.bank.length; i++) {
                        console.log(data.bank[0])
                        bank = data.bank[i];
                        let html = '';
                        html +=''
                        html += '<option value="'+ bank['id'] +'" data-id = "'+bank['id']+'">'+ bank['title'] +'</option>';
                        $('select[name="id_bank"]').append(html);
                    };

                }
            },
            error: function (data) {
                alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                return;
            },
            complete: function (data) {

            }
        });
    }
    getBank();
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $("#bank_tranfer").on('change', function(){
        // var dataid = $("#bank_tranfer option:selected").attr('data-id');
        // id = $(this).data("id");

        // e.preventDefault();
        var money_bank = $('#tranfer_name').val();
        $('.hide').show();
        var dataid =  $("#bank_tranfer option:selected").attr('data-id');
        $.ajax({
            type: 'get',
            dataType: "json",
            data: {
                dataid: dataid,
                money_bank: money_bank
            },
            url: "/recharge-atm-bank",
            success: function (response) {

                $('.comfirm_tranfer_alert').css('display','block')
                let html = '';

                html +=' <input type="text" name="id_bank" class="form-control" hidden value="'+response.data.infoTranfer.id+'"/>';

                $('.comfirm_tranfer_alert_out').append(html)

            }
        });
    });
    $('#form-recharge').submit(function (e) {
        e.preventDefault();
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.text('Đang xử lý...');
        btnSubmit.prop('disabled', true);
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (data) {
                if(data.status == 1){
                    let html = '';
                    html +='<p>Khởi tạo đơn hàng thành công</p>';
                    html +='<p>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo nội dung sau:</p>';
                    html += '<p><b>'+data.data.title+' <i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.data.title+'" aria-hidden="true"></i> </b></p>' ;
                    html += '<p><b>Số tài khoản: </b> <b style="color:red">'+data.data.number_account+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.data.number_account+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Chủ tài khoản: </b> <b style="color:red">'+data.data.account_name+' </b>  <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.data.account_name+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Số tiền: </b> <b style="color:red">'+ formatNumber(data.data.price)+' VNĐ </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.data.price+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Nội dung chuyển khoản: </b> <b style="color:red">'+data.data.code+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.data.code+'" aria-hidden="true"></i></b></p>';
                    html += '<button type="button" class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px;margin-top: 10px" id="reload_complete">Hoàn thành</button>';
                    $('#recharge-info .recharge_atm').html(html);
                    $('#recharge-info .recharge_atm ').css('display','block');
                    formSubmit.remove();
                }
                else{
                    swal({
                        title: "Có lỗi xảy ra !",
                        text: data.message,
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
                }
            },
            error: function (data) {
                swal({
                    title: "Có lỗi xảy ra !",
                    text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                    icon: "error",
                    buttons: {
                        cancel: "Đóng",
                    },
                })
                btnSubmit.text('Xác nhận');
                btnSubmit.prop('disabled', false);
            },
            complete: function (data) {
                $('#reload').trigger('click');
                $('#form-recharge').trigger("reset");
            }
        });
    });

    formatNumberInput('#amount');
    function formatNumberInput(ele){
        $(ele).on( 'keyup' , function(e){
            if( e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40 ){
                var _this = this,
                    num = _this.value.replace(/\./g,'');
                if( !isNaN( num ) ){
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/,'');
                    _this.value = num;
                    var start = _this.selectionStart,
                        end = _this.selectionEnd;
                    _this.setSelectionRange(start, end);
                }
                else {
                    _this.value = _this.value.replace(/[^\d\.]*/g,'');
                }
            }
        })
    }
    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    $('body').on('click','.copyData',function(){
        data = $(this).data('copy');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim(data)).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Đã sao chép: '+ data);
    })
    $('body').on('click','#reload_complete',function(){
        window.location.reload()
    })

    let page = $('#hidden_page_atm').val();

    $(document).on('click', '.paginate__v1__vl .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_atm').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');


        loadDataTransferHistoryATM(page);
    });

    function loadDataTransferHistoryATM(page) {

        request = $.ajax({
            type: 'GET',
            url: '/get-bank',
            data: {
                page:page,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                console.log(data);
                $('.data_pay_card_history__atm').empty().html('');
                $('.data_pay_card_history__atm').empty().html(data.html);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})
