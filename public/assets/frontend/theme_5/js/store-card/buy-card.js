$(document).ready(function () {
    let type_card = $('.type-card');
    let amount_card = $('.amount-card');

    /* Ajax lấy loại thẻ*/
    $.ajax({
        url: '/store-card/get-telecom',
        type: 'GET',
        beforeSend: addLoading(type_card),
        success: function (res) {
            handleDataCard(res);
        },
    });
    /* Ajax lấy mệnh giá thẻ*/
    type_card.on('change','input[name=type]',function () {
        let key =$(this).data('key');
        let type = $(this).closest('#gameCard').length ? 'card_game' : 'card_phone';
        $.ajax({
            url: '/store-card/get-amount',
            type: 'GET',
            data:{
                telecom: key
            },
            beforeSend: addLoading(amount_card),
            success: function (res) {
                handleDataAmount(res,type);
            },
        });
    });

    /*Update Price*/
    amount_card.on('change','input[name=amount]',function () {
        let type = $(this).closest('#gameCard').length ? 'card_game' : 'card_phone';
        let discount = $(this).data('discount');
        let amount = $(this).data('amount');
        updatePrice(discount,amount,1,type);
    });

    $('.js-quantity').on('click','.js-quantity-minus,.js-quantity-add',function (e) {
        e.preventDefault();
        let type = $(this).closest('#gameCard').length ? 'card_game' : 'card_phone';
        let quantity = $(this).parent().find('input').val();
        
    });
    function updatePrice(discount,amount,quantity,type) {
        !discount ? discount = 0 : '';
        !amount ? amount = 0 : '';

        let total = (amount * quantity) - (amount * discount / 100);

        type === 'card_game' ? $('#gameCard .js-text-discount').text(discount + ' %') : $('#mobileCard .js-text-discount').text(discount + ' %');
        type === 'card_game' ? $('#gameCard .js-text-total').text(money_format.to(total)) : $('#mobileCard .js-text-total').text(money_format.to(total));
    }
    function handleDataCard(res) {
        if (res.status === 1) {
            let data = res.data;
            let wrap_game = $('#gameCard').find('.type-card .row');
            let wrap_phone = $('#mobileCard').find('.type-card .row');
            data.forEach(function (card, index) {
                let html_card = '<div class="col-4 c-px-4 card-type-form">';
                html_card += `<input name="type" id="card-${card.id}" data-key="${card.key}" type="radio" hidden ${!index ? 'checked' : ''}>`;
                html_card += `<label for="card-${card.id}" class="brs-8 c-mb-8">`;
                html_card += `<img src="${card.image}" alt="">`;
                html_card += '</label>';
                html_card += '</div>';
                if (!!card.params && card.params.teltecom_type * 1 === 2 ){
                    wrap_game.append(html_card);
                } else {
                    wrap_phone.append(html_card);
                }
            });
            removeLoading(type_card);
            wrap_game.find('input').first().trigger('change');
            wrap_phone.find('input').first().trigger('change');
        }
    }

    function handleDataAmount(res,type) {
        if (res.status === 1){
            let data = res.data;
            let wrap_game = $('#gameCard').find('.amount-card .row');
            let wrap_phone = $('#mobileCard').find('.amount-card .row');

            /*Reset lại mệnh giá thẻ*/
            type === 'card_game' ? wrap_game.empty() : wrap_phone.empty();
            if (data.length){
                data.forEach(function (amount,index) {
                    let html_amount = '<div class="col-4 c-px-4 card-price-form">';
                    html_amount += `<input name="amount" id="card-${amount.id}" type="radio" data-amount="${amount.amount}" data-discount="${100 - amount.ratio_default * 1}" hidden ${!index ? 'checked' : ''}>`;
                    html_amount += `<label for="card-${amount.id}" class="c-py-21 c-px-8 c-mb-8 brs-8">`;
                    html_amount += `<p class="fw-500 fs-15 mb-0">${money_format.to(amount.amount * 1)}</p>`;
                    html_amount += `</label>`;
                    html_amount += `</div>`;

                    /*Nếu là loại thẻ game thì thêm vào card_game không thì thêm vào thẻ đt*/
                    type === 'card_game' ? wrap_game.append(html_amount) : wrap_phone.append(html_amount);
                });
            }else {
                let empty_html = '<span class="invalid-color t-body-1">Chưa cấu hình mệnh giá thẻ</span>'
                type === 'card_game' ? wrap_game.html(empty_html) : wrap_phone.append(empty_html);
            }
            wrap_game.find('input').first().trigger('change');
            wrap_phone.find('input').first().trigger('change');
            removeLoading(amount_card);
        }
    }

    function addLoading(elm) {
        if (!elm.hasClass('is-load')) {
            elm.addClass('is-load');
            let loading = '<div class="loading-wrap"><span class="modal-loader-spin"></span></div>';
            elm.prepend(loading);
        }
    }
    function removeLoading(elm) {
        /*Dừng loading khi tải xong*/
        elm.removeClass('is-load');
        elm.find('.loading-wrap').remove();
    }
})
