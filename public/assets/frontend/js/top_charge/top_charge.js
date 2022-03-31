$(document).ready(function(){
    function getTopCharge(){
        var url = '/top-charge';
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                console.log(data.data)
                if(data.status == 1){
                    let html = '';
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            html += '<li>';
                            html += '<p>'+key+'</p>';
                            html += '<span>'+value.username+'</span>';
                            // html += '<label>'+value.username+'<sup>đ</sup></label>';
                            html += '<label>'+value.amount+'<sup>đ</sup></label>';
                            html +='</li>';
                        });
                    }
                    else{
                    }
                    $('.content-banner-card-top').html(html)
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
    getTopCharge();
});
