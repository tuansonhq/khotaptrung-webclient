$(document).ready(function () {
    var product_list = new Swiper('.list-nap-game', {
        autoplay: false,
        navigation: {
            nextEl: '.swiper-nap-game .swiper-button-next',
            prevEl: '.swiper-nap-game .swiper-button-prev',
        },
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 4.5,
        slidesPerGroup: 3,
        speed: 800,
        spaceBetween: 16,
        touchMove: true,
        freeMode:true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 3.2,
            },
            768:{
                slidesPerView: 3.2,
            },
            480: {
                slidesPerView: 1.5,

            }
        }
    });
    $('#idFilterForm').on('submit', function (e) {
        e.preventDefault();
       let id =  $(this).find('input[name=search]').val();
       $('#data_sort input[name=id_data]').val(id);
       loadData();
       loadDataTable();
    });
    $('.item-sort-nick-label').on('click', function (e) {
        let url = window.location.href;
        let id = $(this).attr('for');
        let sortData = $(`#${id}`).val();
        let updatedURL = updateQueryStringParameter(url, 'sort_by_data', sortData);
        window.history.pushState({}, null, updatedURL);
        let query = {
            page:1,
            sort_by_data: sortData,
        }
        loadDataTable(query);
    });

    $(document).on('click', '.buy-random-acc',function (e){
        e.preventDefault();

        let id = $(this).data("id");
        var html = $('.formDonhangAccount' + id + '').html();

        $('.data-account-random').empty();
        $('.data-account-random').html(html);

        $('#openOrder').modal('show');
    });

    $(document).on('submit', '#openOrder .formDonhangAccount', function(e){
        e.preventDefault();

        let formSubmit = $(this);
        let url = formSubmit.attr('action');
        let btnSubmit = formSubmit.find(':submit');
        let btnText = $(btnSubmit).text();
        $(btnSubmit).text('Đang xử lý...');
        btnSubmit.prop('disabled', true);

        let accountID = formSubmit.data('id');

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {

                $('#openOrder').modal('hide');
                if(response.status == 1){
                    $('#successModal').modal('show');
                }
                else if (response.status == 2){
                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $(btnSubmit).prop('disabled', false);
                    $(btnSubmit).text(btnText);
                }else {
                    swal(
                        'Lỗi!',
                        response.message,
                        'error'
                    )
                    $(btnSubmit).prop('disabled', false);
                    $(btnSubmit).text(btnText);
                }
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {

                        formSubmit.find('.order-errors .purchaseError').empty();
                        formSubmit.find('.order-errors .purchaseError').html(`<small>${itemData[0]}</small>`);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                }
                else {
                    alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    });
    $('.js-toggle-content').click(function () {
        handleToggleContent('.content-video-in');
    });

    // Function when user search
    $('.media-form-search').submit(function (e) {
        e.preventDefault();
        let searchValue = $(this).find('input.input-search-ct').val().toLowerCase();
        $('.body-detail-nick-col-ct').css('display', 'block');
        $('.body-detail-nick-col-ct').each(function () {
            let title = $(this).data('title').toLowerCase();
            if (title.indexOf(searchValue) < 0) {
                $(this).css('display', 'none');
            }
        });
    });
});

function loadDataTable(query = {page:1,id_data:'',title_data:'',price_data:'',status_data:'',select_data:'',sort_by_data:''}) {
    let url = window.location.href;
    let slug = $('.slug').val();
    let url_ajax = '/mua-acc/' + slug;
    //Load old data on url
    if (hasQueryParams(url)){
        const urlSearchParams = new URLSearchParams(window.location.search);
        const params = Object.fromEntries(urlSearchParams.entries());
        Object.keys(params).forEach(key => {
            query[key] = params[key];
            let input = $(`#data_sort [name=${key}]`);
            input.val(params[key]);
        });
        $('#data_sort select').niceSelect('update');
    }

    $.ajax({
        type: 'GET',
        url: url_ajax,
        data: query,
        beforeSend: function (xhr) {
            $('#listLoader').css('min-height', `500px`);
            $("#account_data").empty().html('');
            $("#listLoader").removeClass('d-none');
        },
        success: (res) => {
            $('.loading').css('display','none');
            if (res.status){
                last_page = res.last_page;
                if (checkLastPage()){
                    return;
                }
                $("#account_data").html(res.data);
            }else {
                let html = '';
                html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + res.message + '</span></div></div>';
                $("#account_data").html(html);
            }
        },
        error: function (data) {

        },
        complete: function (data) {
            $("#listLoader").addClass('d-none');
            $("#listLoader").removeAttr("style");
            // Scroll to top of account_data div
            $('html, body').animate({
                scrollTop: $('#account_data').offset().top - 300
            }, 600 );
        }
    });
}

function handleToggleContent(selector){
    $('.js-toggle-content .view-less').toggle();
    $('.js-toggle-content .view-more').toggle();
    let elm = $(selector);
    elm.toggleClass('content-video-in-add');
    if ($('.view-less').is(":visible")) {
        let initialHeight = elm.css('max-height', 'initial').height();
        elm.animate({maxHeight: initialHeight + 16},250)
    } else {
        elm.animate({maxHeight: 280},250)
    }
}
