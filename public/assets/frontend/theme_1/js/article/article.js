$(document).ready(function(){

    $('.btn-news').click(function (e) {
        e.preventDefault();
        var querry = $('.input-news').val();

        window.location.href = '/tin-tuc?page=1&querry=' + querry + '';
    })

});
