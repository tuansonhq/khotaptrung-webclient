$(document).ready(function (e) {
    function handleToggleContent(){
        $('.js-toggle-content .view-less').toggle();
        $('.js-toggle-content .view-more').toggle();
        if ($('.view-less').is(":visible")) {

            $('.content-video-in').css('max-height', 'initial')
            $('.content-video-in').removeClass('content-video-in-add')

        } else {
            $('.content-video-in').addClass('content-video-in-add')
            $('.content-video-in::after').show()
            $('.content-video-in').css('max-height', '')
        }
    }

    $('.js-toggle-content').click(function () {
        handleToggleContent();
    });

    $('body').on('click','.nick-findter',function(){
        $('#openFinter').modal('show')
    })

    $('.wide').niceSelect();

    //Manage filter
    var filterCount = 0;
    var formData = {};
    
    $('#accountFilter').submit(function (e) { 
        e.preventDefault();
        //Filter item html
        filterCount = 0;
        let html = '';
        let itemSelected = '';

        //Get data of each input in form and append into the formData object => if null then remove the null property
        var id_data = $('.input-defautf-ct.id').val();
        var price_data = $('.wide.price').val();
        var status_data = $('.wide.status').val();
        // var select_data = $('.select_data').val();
        // var sort_by_data = $('.sort_by_data').val();
        $('select.account-filter-field').each(function (idx, elm) {
            if (itemSelected != '') {
                itemSelected += '|';
            }

            if ($(elm).val()) {
                itemSelected += $(elm).val();
                let selectTitle = $(elm).data('title');
                let innerText = selectTitle + ': ' + $(elm).find('option:selected').text();
                html+= '<div class="col-auto prepend-nick" style="position: relative" data-key="item_selected" data-value='+ $(elm).val() +'>' +
                            '<a href="javascript:void(0)">' + innerText + '</a>' +
                            '<img class="lazy close-item-nick" src="/assets/frontend/theme_3/image/nick/close.png" alt="">' +
                        '</div>';
                filterCount++;
            }
        });

        if (itemSelected) {
            formData = {...formData, item_selected: itemSelected };
        } else {
            delete formData['item_selected']
        }

        if (id_data) {
            filterCount++ ;
            formData = {...formData, id_data: id_data };
            html+= '<div class="col-auto prepend-nick" style="position: relative" data-key="id_data">' +
                        '<a href="javascript:void(0)" id="prependNickLink"> ID: ' + id_data + '</a>' +
                        '<img class="lazy close-item-nick" src="/assets/frontend/theme_3/image/nick/close.png" alt="">' +
                    '</div>';
        } else {
            delete formData['id_data'];
        }

        if (price_data) {
            filterCount++ ;
            let innerText = $('.nice-select.wide.price .option.selected').text();
            formData = {...formData, price_data: price_data };
            html+= '<div class="col-auto prepend-nick" style="position: relative" data-key="price_data">' +
                        '<a href="javascript:void(0)">' + innerText + '</a>' +
                        '<img class="lazy close-item-nick" src="/assets/frontend/theme_3/image/nick/close.png" alt="">' +
                    '</div>';
        } else {
            delete formData['price_data'];
        }

        if (status_data) {
            filterCount++ ;
            let innerText = $('.nice-select.wide.status .option.selected').text();
            formData = {...formData, status_data: status_data };
            html+= '<div class="col-auto prepend-nick" style="position: relative" data-key="status_data">' +
                        '<a href="javascript:void(0)">' + innerText + '</a>' +
                        '<img class="lazy close-item-nick" src="/assets/frontend/theme_3/image/nick/close.png" alt="">' +
                    '</div>';
        } else {
            delete formData['status_data'];
        }

        //Empty current than add new html
        $('.nick-findter-data').empty();
        $('.nick-findter-data').append(html);
        
        //Check filter count and update count text
        $('.overlay-find').text(filterCount);
        if (filterCount > 0) {
            $('.overlay-find').css('display', 'block');
        } else {
            $('.overlay-find').css('display', 'none');
        }
        loadDataAccountList(1, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
        $('#openFinter').modal('hide');
    });

    //Reset form
    $('.reset-find').click(() => {
        $('#accountFilter').trigger('reset');

        $('.wide').niceSelect('update');
    });

    //Action when click on delete button in filter-activated
    $(document).on('click', '.close-item-nick', (event) => {
        let deleteButton = event.target;
        let filterElement = $(deleteButton).parent();
        let key = filterElement.data('key');
        if (key == "item_selected") {
            let value = filterElement.data('value');
            formData[key] = formData[key].replace(value, '');
        } else {
            delete formData[key];
        }

        $(filterElement).remove();

        //Check filter count and update count text
        filterCount-- ;
        $('.overlay-find').text(filterCount);
        if (filterCount > 0) {
            $('.overlay-find').css('display', 'block');
        } else {
            $('.overlay-find').css('display', 'none');
        }

        loadDataAccountList(1, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
    });

    //Radio button action at .item-sort-nick-label
    $('.item-sort-nick-label').on('click', function (e) {
        e.preventDefault();
        let inputElement = $(this).parent().find('input[type="radio"][name="sort"]');
        if ($(inputElement).is(":checked")) {
            $(inputElement).prop('checked', false);
            delete formData['sort_data'];
            loadDataAccountList(1, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
        } else {
            $(inputElement).prop('checked', true);
            formData = {...formData, sort_data: $(inputElement).val() };
            loadDataAccountList(1, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
        }
    });

    $('#idFilterForm').on('submit', function (e) {
        e.preventDefault();
        let searchValue = $(this).find('input[name="search"]').val();
        if (searchValue) {
            if ( $('#prependNickLink').length > 0 ) {
                $('#prependNickLink').text(`ID: ${searchValue}`);
            } else {
                html = '<div class="col-auto prepend-nick" style="position: relative" data-key="id_data">' +
                            '<a href="javascript:void(0)" id="prependNickLink"> ID: ' + searchValue + '</a>' +
                            '<img class="lazy close-item-nick" src="/assets/frontend/theme_3/image/nick/close.png" alt="">' +
                        '</div>';
                $('.nick-findter-data').append(html);
            }
            formData = {...formData, id_data: searchValue };
            loadDataAccountList(1, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
        }
    });

    $(document).on('click', '.paginate__v1 a.page-link',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];
        loadDataAccountList(page, formData['id_data'], formData['title_data'], formData['price_data'], formData['status_data'], formData['item_selected'], formData['sort_data']);
    });

    var product_list = new Swiper('.list-nap-game', {
        autoplay: false,
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 8,
        speed: 800,
        spaceBetween: 8,
        touchMove: true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 6,
            },
            768:{
                slidesPerView: 4,
            },
            480: {
                slidesPerView: 3.5,

            }
        }
    });


    $('body').on('click','.close-modal-default',function(e){
        e.preventDefault();
        $('#openFinter').modal('hide');
    });

    $('body').on('click','.close-modal-success',function(e){
        e.preventDefault();
        $('#successModal').modal('hide');
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

    loadDataAccountList();

    function loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data) {

        let slug = $('.slug').val();

        var url = '/mua-acc/' + slug;

        if (page == null || page == '' || page == undefined){
            page = 1;
        }
        // alert(url)
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                page:page,
                id_data:id_data,
                title_data:title_data,
                price_data:price_data,
                status_data:status_data,
                select_data:select_data,
                sort_by_data:sort_by_data
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $('.loading').css('display','none');

                if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $("#account_data").empty().html('');
                    $("#account_data").empty().html(html);

                }else if (data.status == 1){
                    // $(".booking_detail")[0].scrollIntoView();

                    $("#account_data").empty().html('');

                    $("#account_data").empty().html(data.data);

                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('click', '.buy-random-acc', (event) => {
        event.preventDefault();
        resetModal();
        // var htmlloading = '';

        // htmlloading += '<div class="loading"></div>';
        // $('.loading-data__buyacc').html('');
        // $('.loading-data__buyacc').html(htmlloading);

        let id = $(event.currentTarget).data("id");
        let slug = $(event.currentTarget).data("slug");
        let title = $(event.currentTarget).data("title");

        $('#email').val(title);
        $('#getpass').attr('data-slug', slug);
        $('#getpass').attr('data-id', id);

        var html = $('.formDonhangAccount' + id + '').html();



        $('.data-account-random').html('');
        $('.data-account-random').html(html);

        $('#openOrder').modal('show');
        // $('.loading-data__buyacc').html('');
    });

    $('body').on('click','#getpass',function(e){
        e.preventDefault();

        var id = $(e.target).data('id');
        var slug = $(e.target).data('slug');

        getShowPass(id,slug);
    });

    function getShowPass(id,slug) {

        request = $.ajax({
            type: 'GET',
            url: '/lich-su-mua-account/showpass',
            data: {
                id:id,
                slug:slug,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){
                    if (data.data.success == 1){

                        //Mạt khẩu

                        var htmlpass = '';

                        htmlpass += '<input id="password" readonly autocomplete="off" class="input-defautf-ct" type="password" value="' + data.key + '" placeholder="Mật khẩu">';
                        htmlpass += '<img class="lazy img-copy" src="/assets/frontend/theme_3/image/nick/copy.png" alt="" id="getCopypass">';
                        htmlpass += '<div class="getCopypass">';
                        htmlpass += '<img class="lazy img-show-password" src="/assets/frontend/theme_3/image/cay-thue/eyehide.png" alt="">';
                        htmlpass += '</div>';


                        $('#successModal .data-password').html('');
                        $('#successModal .data-password').html(htmlpass);

                        //thời gian.
                        var htmltg = '';

                        htmltg += '<small>';
                        htmltg += 'Đã lấy mật khẩu lúc: ' + data.time;
                        htmltg += '</small>';

                        $('#successModal .data-time').html('');
                        $('#successModal .data-time').html(htmltg);

                        var key = data.key;

                        navigator.clipboard.writeText(key);

                        tippy('#getShowpass', {
                            // default
                            trigger: 'click',
                            content: "Đã lấy mật khẩu!",
                            placement: 'right',
                        });

                        tippy('#getCopypass', {
                            // default
                            trigger: 'click',
                            content: "Đã copy mật khẩu!",
                            placement: 'right',
                        });

                        tippy('#getCopyemail', {
                            // default
                            trigger: 'click',
                            content: "Đã copy email!",
                            placement: 'right',
                        });

                        $('#successModal .getCopypass').on('click', function(){


                            // Get the password field
                            var passwordField = $('#password');

                            // Get the current type of the password field will be password or text
                            var passwordFieldType = passwordField.attr('type');

                            // Check to see if the type is a password field
                            if(passwordFieldType == 'password')
                            {
                                // Change the password field to text
                                passwordField.attr('type', 'text');

                                var htmlpass = '';
                                htmlpass += '<img class="lazy img-show-password" src="/assets/frontend/theme_3/image/cay-thue/eyeshow.png" alt="">';
                                $('.getCopypass').html('');
                                $('.getCopypass').html(htmlpass);

                                // Change the Text on the show password button to Hide
                                $(this).val('Hide');
                            } else {
                                var htmlpass = '';
                                htmlpass += '<img class="lazy img-show-password" src="/assets/frontend/theme_3/image/cay-thue/eyehide.png" alt="">';
                                $('.getCopypass').html('');
                                $('.getCopypass').html(htmlpass);

                                // If the password field type is not a password field then set it to password
                                passwordField.attr('type', 'password');

                                // Change the value of the show password button to Show
                                $(this).val('Show');
                            }
                        });

                        $('#getCopyemail').on('click', function(){
                            var copyText = $('#email').val();

                            navigator.clipboard.writeText(copyText);
                        });

                        $('#getCopypass').on('click', function(){
                            var copyText = $('#password').val();

                            navigator.clipboard.writeText(copyText);
                        });


                    }
                }else if (data.status == 0){

                }
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    function resetModal () {
        let html = '<input id="password" readonly autocomplete="off" class="input-defautf-ct" type="password" value="" placeholder="******">' +
                    '<img class="lazy img-copy" src="/assets/frontend/theme_3/image/nick/copy.png" id="getpass" alt="">';
        $('#email').val('');
        $('.data-password').html(html)
    }

    $(document).on('submit', '#openOrder .formDonhangAccount', function(e){
        e.preventDefault();

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        var btnText = $(btnSubmit).text();
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

})
