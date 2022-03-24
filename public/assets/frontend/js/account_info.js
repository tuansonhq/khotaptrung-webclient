$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    function getInfo(){
        const url = '/user/account_info';
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: {
                _token:csrf_token
            },
            beforeSend: function (xhr) {
                
            },
            success: function (data) {
                if(data.status === "LOGIN"){

                }
                if(data.status === "ERROR"){

                }
            },
            error: function (data) {
               
            },
            complete: function (data) {
              
            }
        });
    }
    getInfo();
});