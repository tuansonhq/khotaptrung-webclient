$(document).ready(function(){

    $('.btn-news').click(function (e) {
        e.preventDefault();
        var querry = $('.input-news').val();

        var slug = $('.slug-article').val();

        window.location.href = '/tin-tuc/' + slug + '?page=1&querry=' + querry + '';
    })

});
