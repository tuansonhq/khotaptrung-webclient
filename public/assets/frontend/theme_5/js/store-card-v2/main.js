$(document).ready(function () {
    /*ajax get card*/
    $.ajax({
        url: '/store-card/get-telecom',
        type: 'GET',
        success: function (res) {
            setCard(res);
        },
    });
    function setCard(response) {
        console.log()
    }
});
