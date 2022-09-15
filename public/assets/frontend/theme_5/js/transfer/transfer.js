// Get auto ATM
getIdCode();
function getIdCode () {
    var url = '/api/transfer-code';
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            if (data.status == 1 ) {
                $('#transactionContent').text(data.data)
            } else {
                $('#atm_card .atm-recharge-error').html( '<p class="atm-recharge-error fz-13 fw-400">Vui lòng đăng nhập để nhận được nội dung chuyển tiền! </p>');
            }
        },
        error: function () {
            swal({
                title: "Lỗi !",
                text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                icon: "error",
                buttons: {
                    cancel: "Đóng",
                },
            })
        },
        complete: function () {
            $('#atm_card .loader-container').remove();
            $('#atm_card .content-block').removeClass('d-none');
        }
    });
}
