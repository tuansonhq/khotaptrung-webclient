$(document).ready(function () {
    let card
    $.ajax({
        url:'/store-card/get-telecom',
        type:'GET',
        beforeSend:addLoading(),
        success:function (res) {
            handleData(res);
        },
        complete:removeLoading()
    });

    function handleData(res) {
        console.log(res)
    }
    function addLoading(elm) {
        if (!elm.hasClass('is-load')){
            elm.addClass('is-load');
            let loading =  '<div class="loading-wrap"><span class="modal-loader-spin"></span></div>';
            elm.prepend(loading);
        }
    }
    function removeLoading(elm) {
        /*Dừng loading khi tải xong*/
        elm.removeClass('is-load')
        elm.find('.loading-wrap').remove();
    }
})
