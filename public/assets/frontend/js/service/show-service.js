$(document).ready(function(){
    let page = $('#hidden_page_service').val();
    let append = $('#append-service').val();
    let is_over = false;
    let not_loaded = true;
    //let slug = $('#slug').val();

    loadDataService();

    $(window).scroll(function () {

        if ($(window).scrollTop() == $(document).height() - $(window).height() && !is_over && not_loaded) {

            page++;
            not_loaded = false;
            $('#hidden_page_service').val(page);
            $('#append-service').val(1);
            append = $('#append-service').val();

            loadDataService(page,append)
        }
    });

    function loadDataService(page, append = false) {
        let slug = $('#slug').val();
        console.log(slug);
        request = $.ajax({
            type: 'GET',
            url: '/dich-vu/'+ slug +'/data',
            data: {
                page:page,
                append:append,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                console.log(data)
                let dataappen = parseInt(data.append);

                let html = "";

                if (data.is_over){
                    is_over = true;
                } else {
                    data.data.forEach(function (data) {
                        html += '<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">';
                        html += '<div class="game-list-content">';
                        html += '<div class="game-list-image">';
                        html += '<a href="/dich-vu/' + data.slug + '">';
                        html += '<img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">';
                        html += '<img class="game-list-image-in" src="https://nick.vn/storage/images/CbbP8yFiqg_1623227606.jpg" alt="">';
                        html += '</a>';
                        html += '</div>';

                        html += '<div class="game-list-title">';
                        html += '<a href="/dich-vu/' + data.slug + '">';
                        html += '<p><strong>' + data.title + '</strong></p>';
                        html += '</a>';
                        html += '</div>';

                        html += '<div class="game-list-description">';
                        html += '<div class="countime"> </div>';
                        html += '<p>Đã quay: 388</p>';
                        html += '<span class="game-list-description-old-price">49,000đ</span>';
                        html += '<span class="game-list-description-new-price">49,000đ</span>';
                        html += '</div>';


                        html += '<div class="game-list-more">';
                        html += '<div class="game-list-more-view" >';
                        html += '<a href="/dich-vu/' + data.slug + '">';
                        html += '<img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">';
                        html += '</a>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    });
                    $('#showcategoryservice_data').append(html);

                    not_loaded = true;
                }

                if (data.data.length == 0){
                    
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

})
