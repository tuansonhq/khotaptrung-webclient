$(document).ready(function (e) {
    $('body').on('click','.openTTTraGop',function(){
        $('#ttTraGop').modal('show')
    })

    $('body').on('click','.openHoanTien',function(){
        $('#huyTraGop').modal('show')
    })

    $('body').on('click','.openPassword',function(){
        $('#showPassword').modal('show')
    })

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

    $('.getCopypass').on('click', function(){

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
            htmlpass += '<img class="lazy img-show-password" src="/assets/theme_3/image/cay-thue/eyeshow.png" alt="">';
            $('.getCopypass').html('');
            $('.getCopypass').html(htmlpass);

            // Change the Text on the show password button to Hide
            $(this).val('Hide');
        } else {
            var htmlpass = '';
            htmlpass += '<img class="lazy img-show-password" src="/assets/theme_3/image/cay-thue/eyehide.png" alt="">';
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
    })

    $('.getCopypass').on('click', function(){
        var copyText = $('#password').val();

        navigator.clipboard.writeText(copyText);
    })


    $('body').on('click','.close-modal-default',function(){
        $('#showPassword').modal('hide')
        $('#ttTraGop').modal('hide')
        $('#huyTraGop').modal('hide')
        $('#openFinter').modal('hide')

    })


    $('body').on('click','.nick-findter',function(){
        $('#openFinter').modal('show')
    })

    $('.wide').niceSelect();

    $('.started_at').datetimepicker({
        format: 'DD-MM-YYYY LT',
        useCurrent: false,
        icons:
            { time: 'fas fa-clock',
                date: 'fas fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-arrow-circle-left',
                next: 'fas fa-arrow-circle-right',
                today: 'far fa-calendar-check-o',
                language: 'vi',
                clear: 'fas fa-trash',
                close: 'far fa-times' },
        maxDate: moment()

    });

    $('.ended_at').datetimepicker({
        format: 'DD-MM-YYYY LT',
        useCurrent: false,
        icons:
            { time: 'fas fa-clock',
                date: 'fas fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-arrow-circle-left',
                next: 'fas fa-arrow-circle-right',
                today: 'far fa-calendar-check-o',
                clear: 'fas fa-trash',
                close: 'far fa-times' },
        maxDate: moment()
    });


    function loadData() {
        var index = 0;
        var isSet = false;
        var defaulthtml = '';
        $('.nick-findter-data').html('');
        $('.nick-findter-data').html(defaulthtml);

        var statusvalue = $('.status-finter-nick .list .option.selected').data('value');
        var status = $('.status-finter-nick .list .option.selected').text();

        if (status == null || status == undefined || status == '' || statusvalue == null || statusvalue == undefined || statusvalue == 'Chọn'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-status')){
                return false;
            }

            var htmlstatus = '';
            htmlstatus += '<div class="col-auto prepend-nick prepend-nick-status" style="position: relative"><a href="javascript:void(0)">' + status + '</a><img class="lazy close-item-nick imgae-nick-status" src="/assets/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlstatus);
            isSet = true;
            index = index + 1;
        }

        var gamevalue = $('.game-finter-nick .list .option.selected').data('value');
        var game = $('.game-finter-nick .list .option.selected').text();

        if (game == null || game == undefined || game == '' || gamevalue == null || gamevalue == undefined || gamevalue == 'Chọn'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-game')){
                return false;
            }

            var htmlgame = '';
            htmlgame += '<div class="col-auto prepend-nick prepend-nick-game" style="position: relative"><a href="javascript:void(0)">' + game + '</a><img class="lazy close-item-nick imgae-nick-game" src="/assets/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlgame);
            isSet = true;
            index = index + 1;
        }

        var transactionvalue = $('.transaction-finter-nick .list .option.selected').data('value');
        var transaction = $('.transaction-finter-nick .list .option.selected').text();

        if (transaction == null || transaction == undefined || transaction == '' || transactionvalue == null || transactionvalue == undefined || transactionvalue == 'Chọn'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-transaction')){
                return false;
            }
            var htmlrank = '';
            htmlrank += '<div class="col-auto prepend-nick prepend-nick-transaction" style="position: relative"><a href="javascript:void(0)">' + transaction + '</a><img class="lazy close-item-nick imgae-nick-rank" src="/assets/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlrank);
            isSet = true;
            index = index + 1;
        }

        var pricevalue = $('.price-finter-nick .list .option.selected').data('value');
        var price = $('.price-finter-nick .list .option.selected').text();

        if (price == null || price == undefined || price == '' || pricevalue == null || pricevalue == undefined || pricevalue == 'Chọn'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-price')){
                return false;
            }
            var htmlprice = '';
            htmlprice += '<div class="col-auto prepend-nick prepend-nick-price" style="position: relative"><a href="javascript:void(0)">' + price + '</a><img class="lazy close-item-nick imgae-nick-price" src="/assets/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlprice);
            isSet = true;
            index = index + 1;
        }

        var started_at = $('.started_at').val();

        var ended_at = $('.ended_at').val();

        if (started_at == null || started_at == undefined || started_at == ''){
            if (ended_at == null || ended_at == undefined || ended_at == ''){}else {
                var htmltime = '';
                htmltime += '<div class="col-auto prepend-nick prepend-nick-timee" style="position: relative">';
                htmltime += '<a href="javascript:void(0)">';
                htmltime += 'Trước - ' + ended_at;
                htmltime += '</a>';
                htmltime += '<img class="lazy close-item-nick imgae-nick-rank" src="/assets/theme_3/image/nick/close.png" alt="">';
                htmltime += '</div>';

                $('.nick-findter-data').prepend(htmltime);
                isSet = true;
                index = index + 1;
            }
        }else {
            if (ended_at == null || ended_at == undefined || ended_at == ''){
                var htmltime = '';
                htmltime += '<div class="col-auto prepend-nick prepend-nick-times" style="position: relative">';
                htmltime += '<a href="javascript:void(0)">';
                htmltime += 'Sau - ' + started_at;
                htmltime += '</a>';
                htmltime += '<img class="lazy close-item-nick imgae-nick-rank" src="/assets/theme_3/image/nick/close.png" alt="">';
                htmltime += '</div>';

                $('.nick-findter-data').prepend(htmltime);
                isSet = true;
                index = index + 1;
            }else {
                var htmltime = '';
                htmltime += '<div class="col-auto prepend-nick prepend-nick-timese" style="position: relative">';
                htmltime += '<a href="javascript:void(0)">';
                htmltime += started_at + ' - ' + ended_at;
                htmltime += '</a>';
                htmltime += '<img class="lazy close-item-nick imgae-nick-rank" src="/assets/theme_3/image/nick/close.png" alt="">';
                htmltime += '</div>';

                $('.nick-findter-data').prepend(htmltime);
                isSet = true;
                index = index + 1;
            }
        }

        if (parseInt(index) > 0){
            $('.overlay-find').html(index);
            $('.overlay-find').css('display','block');
        }else {
            $('.overlay-find').html(index);
            $('.overlay-find').css('display','none');
        }

    }

    $('body').on('click','.button-modal-nick',function(){
        loadData();
    })

    $('body').on('click','.prepend-nick-status',function(){
        $('.status').val('');
        $('.status').niceSelect('update');
        $('.status-finter-nick .current').html('Chọn');
        $('.status-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-game',function(){
        $('.game').val('');
        $('.game').niceSelect('update');
        $('.game-finter-nick .current').html('Chọn');
        $('.game-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-times',function(){
        $('.started_at').val('');

        loadData();
    })

    $('body').on('click','.prepend-nick-transaction',function(){
        $('.transaction').val('');
        $('.transaction').niceSelect('update');
        $('.transaction-finter-nick .current').html('Chọn');
        $('.transaction-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-price',function(){
        $('.price').val('');
        $('.price').niceSelect('update');
        $('.price-finter-nick .current').html('Chọn');
        $('.price-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-timee',function(){
        $('.ended_at').val('');

        loadData();
    })
    $('body').on('click','.prepend-nick-timese',function(){
        $('.ended_at').val('');
        $('.started_at').val('');
        loadData();
    })

    $('body').on('click','.reset-find',function(){
        $('.ended_at').val('');
        $('.started_at').val('');
        $('.transaction').val('');
        $('.transaction').niceSelect('update');
        $('.status').val('');
        $('.status').niceSelect('update');
        $('.game').val('');
        $('.game').niceSelect('update');
        $('.price').val('');
        $('.price').niceSelect('update');
        $('.transaction-finter-nick .current').html('Chọn');
        $('.transaction-finter-nick .list:first-child').addClass('selected');
        $('.status-finter-nick .current').html('Chọn');
        $('.status-finter-nick .list:first-child').addClass('selected');
        $('.game-finter-nick .current').html('Chọn');
        $('.game-finter-nick .list:first-child').addClass('selected');
        $('.price-finter-nick .current').html('Chọn');
        $('.price-finter-nick .list:first-child').addClass('selected');

        $('input[name="switch"]:checked').each(function () {
            if (this.checked) {
                $(this).prop('checked', false);
            }
        });
        loadData();
    })

})
// $('#showPassword').modal('show')
