$(document).ready(function () {
    $('#article-content img').addClass('img-fluid');
    var i = 0;
    var check = [];
    if(i == 0){
        StoreTelecom();
    }
    $('.nav-item-telecom').on('click',function(){
        $('body .gateway-telecom').remove();
        $('.infor-pay').css("display", "none");
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom = $(this).attr("data-content");
            }
        });
        if(jQuery.inArray(telecom, check) == -1){
            StoreTelecom();
            console.log('vao day');
        }
        // $('.infor-pay').css("display", "none");
    })
    function StoreTelecom(){
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom = $(this).attr("data-content");
            }
        });
        var html;
        $.ajax({
            url: "/mua-the",
            type: "GET",
            data:{
                key:telecom,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function(){
                $('.store-loading').show();
            },
            success: function (data) {
                let html = '';
                if(data.store_telecom.length > 0){
                    $.each(data.store_telecom, function (key, value) {
                        html += "<div class='col-md-3 col-6 item-telecom'>";
                        html += "<div class='item-gateway me-2' data-key=\"" + value["key"] + "\">";
                        html += '<div class="text-center">';
                        html += "<img class=\"mw-100 img\" src=\"" + value["image"] + "\" alt=\"" + value["title"] + "\">";
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    });
                }else{
                    html += "<p class='text-center'> KhĂ´ng cĂ³ dá»¯ liá»‡u </p>"
                }
                i = 1;
                key = telecom;
                $(".supplier_"+telecom).html(html).flickity({
                    cellAlign: 'left',
                    contain: true,
                    prevNextButtons: false,
                    pageDots: true
                });
            },
            complete: function(){
                $('.store-loading').hide();
            }
        });
        if(jQuery.inArray(telecom, check) == -1){
            check.push(telecom);
        }
    }

    //

    $('body').on('click','.item-gateway',function(e){
        let html ="";
        let render = "";
        let input_telecom = "";
        var check_amount = [];
        e.preventDefault();
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom = $(this).attr("data-content");
            }
        });
        key = $(this).data('key');
        $('.row-gateway .item-gateway').not($(this)).removeClass('active');
        $('.row-gateway .item-gateway').not($(this)).addClass('out');
        $(this).addClass('active');
        $(this).removeClass('out');
        if(jQuery.inArray(telecom, check_amount) == -1){
            $.ajax({
                url: "/mua-the/get-amount?telecom_key="+key,
                type: "GET",
                data:{
                    key:key,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    render += '<div class="pb-5 block-number gateway-telecom">';
                    render += '<div class="icon">2</div>';
                    render += '<h6 class="title-small text-uppercase mb-3">Lá»±a chá»n má»‡nh giĂ¡</h6>';
                    render += '<div class="row row-price g-0">';
                    render += '</div>';
                    render += '<div class="d-flex justify-content-between align-items-center mt-4">';
                    render += '<label class="label mb-0">Sá»‘ lÆ°á»£ng</label>';
                    render += '<div class="input-spinner input-group" style="width: 140px">';
                    render += '<button type="button" class="button-minus" data-field="quantity"></button>';
                    render += '<input readonly type="number" step="1" max="10" min="1" value="1" name="quantity" id="quantity-details" class="quantity-field details-item">';
                    render += '<button type="button" class="button-plus" data-field="quantity"></button>';
                    render += '</div>'
                    render += '</div>'
                    render += '</div>';
                    check_value = $('.price_telecom_'+telecom).html(render);
                    if(check_value){
                        $.each(data.store_telecom_value, function (key, value) {
                            html += '<div class="col-md-3 col-6">';
                            html += "<div class='item-price me-2' data-amount=\"" + value['amount'] + "\" data-ratio=\"" + value['ratio_default'] + "\">";
                            html += '<h4 class="text-center mb-2">'+formatNumber(value['amount'])+' Ä‘ </h4>';
                            html += '<div class="text-center item-store">GiĂ¡: <span class="text-danger">'+formatNumber(value['amount'] * value['ratio_default'] / 100 )+'</span> Ä‘</div>';
                            html += '<div class="text-center item-discount">Chiáº¿t kháº¥u: <b class="text-danger">'+formatNumber(100 - value['ratio_default'] )+ ' %</b></div>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $(".row-price").html(html).flickity({
                            cellAlign: 'left',
                            contain: true,
                            prevNextButtons: false,
                            pageDots: true
                        });
                    }
                    input_telecom += '<input style="display:none;" class="input_telecom" type="text" value="'+key+'" name="telecom">';
                    $('#input_telecom').html(input_telecom);
                    $('.infor-pay').css("display", "block");
                    $('.pay_'+telecom+' #text-telecom').text(key);
                    $('.pay_'+telecom+' #text-amount').text(0);
                    $('.pay_'+telecom+' #text-ratio').text(0);
                    $('.pay_'+telecom+' #text-quantity').text(1);
                    $(".pay_"+telecom+" #total-price").html("0 VNÄ");
                    if(jQuery.inArray(telecom, check_amount) == -1){
                        check_amount.push(telecom);
                    }
                },
            });
        }
    });
    $('body').on('click','.row-price .item-price',function(e){
        e.preventDefault();
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom_2 = $(this).attr("data-content");
            }
        });
        let input_amount ="";
        let input_ratio ="";
        amount = $(this).data('amount');
        ratio = $(this).data('ratio');
        $('.row-price .item-price').not($(this)).removeClass('active');
        $(this).addClass('active');
        input_amount += '<input style="display:none;" class="input_amount" type="text" value="'+amount+'" name="amount">';
        input_ratio += '<input class="input_ratio" style="display:none;" type="text" value="'+amount * ratio / 100 +'" name="ratio">';
        $('#input_amount').html(input_amount);
        $('#input_ratio').html(input_ratio);
        $('.pay_'+telecom_2+' #text-amount').text(formatNumber(amount)+ " VNÄ");
        $('.pay_'+telecom_2+' #text-ratio').text(formatNumber(amount - (amount*ratio/100))+ " VNÄ");
        updatePrice();
    });
    $('.more-link').on('click', function(e) {
        e.preventDefault();
        $('.text-rounded').toggleClass('-expanded');
        if ($('.text-rounded').hasClass('-expanded')) {
            $('.more-link').html('Thu gá»n <i class="las la-angle-up"></i>');
        } else {
            $('.more-link').html('Xem thĂªm <i class="las la-angle-down"></i>');
        }
    });
    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    $("input[type='number']").inputSpinner();
    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(1);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 1) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(1);
        }
    }
    $('body').on('click','.input-group .button-plus',function(e){
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom = $(this).attr("data-content");
            }
        });
        incrementValue(e);
        qty = $('#quantity-details').val();
        $('.pay_'+telecom+' #text-quantity').text(qty);
        updatePrice();
    });

    $('body').on('click','.input-group .button-minus',function(e){
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom = $(this).attr("data-content");
            }
        });
        decrementValue(e);
        qty = $('#quantity-details').val();
        $('.pay_'+telecom+' #text-quantity').text(qty);
        updatePrice();
    });

    function updatePrice(){
        $('.nav-item .nav-link-telecom').each(function(){
            var active = $(this).hasClass('active');
            if(active){
                telecom_111 = $(this).attr("data-content");
            }
        });
        data_qty = $('#quantity-details').val();
        data_amount = $('.input_ratio').val();
        data_amount_old = $('.input_amount').val();
        if(data_amount == null){
            data_amount = 0;
        }
        if(data_qty == null){
            data_qty = 1;
        }
        $('.pay_'+telecom_111+' #text-ratio').text(formatNumber((data_amount_old - data_amount) * data_qty)+ " VNÄ");
        $(".pay_"+telecom_111+" #total-price").html(formatNumber(data_qty * data_amount)+" VNÄ");
        money_pay = $("#auth .auth").val();
        if(money_pay == "none"){
            $("#steps-2").remove();
        }
        total = data_qty * data_amount;
        money = money_pay - total;
        $("#"+telecom_111+" #text-money-pay").text(formatNumber(total));
        $("#"+telecom_111+" #auth-money").text(formatNumber(money_pay));
        let render = "";
        if(money < 0){
            money_1 = total - money_pay;
            render += '<td>Sá»‘ tiá»n cáº§n náº¡p thĂªm</td>';
            render += '<td id="text-auth-balance" class="text-end"><strong class="text-danger">'+formatNumber(money_1)+'</strong></td>';
            render += '<td class="text-end text-secondary" width="20">Ä‘</td>';
            $(".text-noti-balance").html(' <p class="mb-0">KhĂ´ng Ä‘á»§ tiá»n trong tĂ i khoĂ n vui lĂ²ng <a href="/nap-the" target="_blank" class="border-bottom">náº¡p thĂªm</a> vĂ o tĂ i khoáº£n</p>')
        }else{
            render +='<td>Sá»‘ dÆ° cĂ²n láº¡i</td>';
            render += '<td id="text-auth-balance" class="text-end"><strong class="text-danger">'+formatNumber(money)+'</strong></td>';
            render += '<td class="text-end text-secondary" width="20">Ä‘</td>';
        }
        $("#"+telecom_111+" #text-noti").html(render);
    }
    $('body').on('click','.button-action-steps',function(e){
        $("ul.nav-qp-tabs li a.nav-link-telecom").addClass('disabled');
        $(' #nav-steps-wrapper').css('display','block');
        var steps = new Array("steps-1", "steps-2", "steps-3");
        id = $(this).data("id");
        if(id == 2){
            check = $('#input_amount .input_amount').val();
            if(check == null || check == ""){

                swal({
                    title: "Lá»—i !",
                    text: "Báº¡n chÆ°a chá»n má»‡nh giĂ¡",
                    icon: "error"
                })
            }else{
                $('.nav-steps-wrapper ul.nav-steps li.nav-item a.nav-link').removeClass('active');
                $('#step-example .tab-content').removeClass('active');

                $("#steps-"+id+".tab-content").addClass('active');
                $('.nav-steps-wrapper ul.nav-steps li.nav-item a.steps-'+id).addClass('active');
            }
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('body').on('click','i.la-copy',function(e){
        data = $(this).data('id');
        var $temp = $("<input>");
        $("body #copy").html($temp);
        $temp.val($.trim(data)).select();
        document.execCommand("copy");
        $temp.remove();
    });



});
