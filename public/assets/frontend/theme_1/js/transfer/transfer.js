$(document).ready(function(){

    // get profile

    // get tele
    function getIdCode(){
        var url = '/recharge-atm-code';
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                console.log(data)
                if(data.status == 1){
                    let html = '';
                    html += '<p class="text-danger">'+ data.data +'</p>  <span style="padding-left: 8px;cursor: pointer"><i class="fas fa-copy"  data-id="'+ data.data +'"></i></span>';
                    $('.transfer-code').html(html)


                }
            },
            error: function (data) {
                swal({
                    title: "Lỗi !",
                    text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                    icon: "error",
                    buttons: {
                        cancel: "Đóng",
                    },
                })
            },
            complete: function (data) {
            }
        });
    }
    getIdCode();
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
