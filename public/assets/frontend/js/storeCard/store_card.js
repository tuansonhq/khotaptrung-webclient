$(document).ready(function(){
    alert(111);
    console.log(1111)
    $('#loading-data').remove();
    $('#loading-data-total').remove();
    $('#loading-data-pay').remove();
    $('#formStoreCard').removeClass('hide');
    $('#StoreCardTotal').removeClass('hide');
    $('#StoreCardPay').removeClass('hide');

    $(document).ready(function () {
        $('#btnbeforePurchase').click(function () {
            $('#success_storecard').modal('show');
        });
    });
    $('body').on('click','.copyData',function(){
        data = $(this).data('copy');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim(data)).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Đã sao chép: '+ data);
    })
});
