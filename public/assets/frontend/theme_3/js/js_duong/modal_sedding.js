function showDiv() {
    setTimeout(function () {
        $(".modal-sedding-notification").addClass('modal-sedding-notification_show').delay( 10000);
        setTimeout(function () {
            $(".modal-sedding-notification").removeClass('modal-sedding-notification_show').delay( 10000);
        },10000)
    }, 10000);

}
showDiv();

$(".close-sedding").click(function(){
    $("#myDiv").hide();
})
