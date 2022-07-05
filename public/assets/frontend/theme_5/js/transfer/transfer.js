$(document).ready(function(){
    // get tele
    function getIdCode(){
        var url = '/transfer-code';
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                // console.log(data)
                if(data.status == 1){

                    // let html = '';
                    // html +=''
                    // html += '<p class="text-danger">'+ data.data +'</p>  <span style="padding-left: 8px;cursor: pointer"><i class="fas fa-copy"  data-id="'+ data.data +'"></i></span>';
                    $('.transfer-code').html(data.data)


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



})
