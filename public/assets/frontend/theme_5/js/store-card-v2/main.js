let data_telecoms;
let card_current;
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
        if (response.status === 1){
            data_telecoms = response.data;
        }
        setDataCardNav();
        let is_view =$('#is_view');
        switch (is_view.val()) {
            case 'index':
                setTypeCard();
                break;
            case 'amount':
                let key = is_view.data('key');
                setAmountCard(key);
                break;
        }
    }
    function setDataCardNav() {
        let nav_game = $('#card--game__nav');
        let nav_phone = $('#card--phone__nav');
        if (data_telecoms.length){
            data_telecoms.forEach(function (card,index) {
                let html_nav = '<li class="card-item">';
                html_nav += `<a href="/mua-the-${card.key.toLowerCase()}" class="card-item_link">`;
                html_nav += `<div class="card-item_thumb mr-2">`;
                html_nav += `<img src="${card.image}" alt="">`;
                html_nav += `</div>`;
                html_nav += `<span class="card-item_name t-capitalize">Thẻ ${card.key.toLowerCase()}</span>`;
                html_nav += `</a>`;
                html_nav += `</li>`;

                !!card.params && parseInt(card.params.teltecom_type) === 2
                    ? nav_game.append(html_nav)
                    : nav_phone.append(html_nav);
            });
            nav_game.removeClass('is-load');
            nav_game.find('.loading-wrap').remove();
            nav_phone.removeClass('is-load');
            nav_phone.find('.loading-wrap').remove();

        }
    }
    function setTypeCard() {
        let wrap_game = $('#card-game .card-wrap');
        let wrap_phone = $('#card-phone .card-wrap');
        let wrap_game_mobile = $('#tab-card-game .card-wrap');
        let wrap_phone_mobile = $('#tab-card-phone .card-wrap');
        if (data_telecoms.length){
            data_telecoms.forEach(function (card,index) {
                let html_card = `<div class="${width < 992 ? 'col-6 c-px-lg-6 c-mb-lg-12' : 'col-lg-3 c-px-8 c-mb-16'}">`;
                html_card += `<a href="/mua-the-${card.key.toLowerCase()}" class="scratch-card">`;
                html_card += `<div class="card--thumb"><img src="${card.image}" class="card--thumb__image py-1 py-lg-0" alt=""></div>`;
                html_card += `<div class="card--name t-sub-2 t-capitalize">Thẻ ${card.key.toLowerCase()}</div>`;
                html_card += '</a></div>';
                width > 992
               ?
                    !!card.params && parseInt(card.params.teltecom_type) === 2
                    ? wrap_game.append(html_card)
                    : wrap_phone.append(html_card)
                :
                    !!card.params && parseInt(card.params.teltecom_type) === 2
                    ? wrap_game_mobile.append(html_card)
                    : wrap_phone_mobile.append(html_card);
            });
            if (width > 992) {
                wrap_game.removeClass('is-load');
                wrap_game.find('.loading-wrap').remove();
                wrap_phone.removeClass('is-load');
                wrap_phone.find('.loading-wrap').remove();
            }else {
                wrap_phone_mobile.removeClass('is-load');
                wrap_phone_mobile.find('.loading-wrap').remove();
                wrap_game_mobile.removeClass('is-load');
                wrap_game_mobile.find('.loading-wrap').remove();
            }
        }
    }
    function setAmountCard(telecom) {
        data_telecoms.forEach(function (card) {
            if (telecom === card.key.toLowerCase()){
                card_current = card;
                return;
            }
        });
        $.ajax({
            url: '/store-card/get-amount',
            type: 'GET',
            data:{
                telecom: telecom,
            },
            success: function (res) {
                setHtml(res);
                setCardOther();
            },
        });
        function setHtml(res) {
            if(res.status === 1) {
                let data = res.data;
                let card_wrap = width > 992 ? $('#wrap-desktop') : $('#wrap-mobile');
                if (data.length){
                    data.forEach(function (amount,index) {
                     let html = setAmount(amount,index);
                     card_wrap.append(html);
                    });
                } else {
                    let empty = `<div class="invalid-color t-body-2 text-center c-py-12 w-100">Chưa cấu hình mệnh giá thẻ</div>`;
                    card_wrap.append(empty);
                }
                card_wrap.removeClass('is-load');
                card_wrap.find('.loading-wrap').remove();
            }
        }
        function setAmount(amount,index) {
            let unit_price = amount.amount - ((amount.amount * (100 - amount.ratio_default) / 100));
            if(width > 992){
                let html = '<div class="col-lg-3 c-px-8 c-mb-16">';
                html += '<div class="card">';
                html += '<div class="card-body c-p-16">';
                html += `<a href="/mua-the-${telecom}-${kFormatter(amount.amount)}" class="scratch-card c-mb-12">`;
                html += `<div class="card--thumb">`;
                html += `<img src="${card_current.image}" class="card--thumb__image py-1 py-lg-0" alt="">`;
                html += '</div>';
                html += `<div class="card--name t-title-2 deno-card-color" data-amount="${amount.amount}" data-discount="${100 - amount.ratio_default}">${money_format_vnd.to(amount.amount * 1).toUpperCase()}</div>`;
                html += `</a>`;
                html += `<span class="t-sub-2 t-capitalize">Thẻ ${telecom} ${kFormatter(amount.amount)}</span>`;
                html += `<div class="t-body-1 link-color">Đơn giá: ${money_format.to(unit_price)}</div>`;
                html += `<div class="d-flex justify-content-between align-items-center c-mt-12">`;
                html += `<span class="t-body-2">Số lượng</span>`;
                html += `<div class="js-quantity sm"><div class="js-quantity-minus"></div><input type="text" class="js-quantity-input" value="1"><div class="js-quantity-add"></div></div></div>`;
                html += `<div class="group-btn c-mt-16"><button type="button" class="btn secondary show-modal-confirm">Chọn mua</button></div>`;
                html += `</div></div></div>`;
                return html;
            } else {
                let html = '<div class="swiper-slide">';
                html += `<div class="card">`;
                html += `<div class="card-body c-p-16">`;
                html += `<a href="/mua-the-${telecom}-${kFormatter(amount.amount)}" class="scratch-card c-mb-12">`;
                html += `<div class="card--thumb"><img src="${card_current.image}" class="card--thumb__image py-1 py-lg-0" alt=""></div>`;
                html += `<div class="card--name t-title-2 deno-card-color">${money_format_vnd.to(amount.amount * 1).toUpperCase()} VND</div>`;
                html += `</a>`;
                html += `<span class="t-sub-2">Thẻ ${telecom} ${kFormatter(amount.amount)}</span>`;
                html += `<div class="t-body-1 link-color">Đơn giá: ${money_format.to(unit_price)}</div>`;
                html += `<div class="d-flex justify-content-between align-items-center c-mt-12">`;
                html += `<span class="t-body-2">Số lượng</span>`;
                html += `<div class="js-quantity sm"><div class="js-quantity-minus"></div><input type="text" class="js-quantity-input" value="1"><div class="js-quantity-add"></div></div>`;
                html += `</div></div></div></div>`;
                return html;
            }
        }
    }
    function setCardOther() {
        let wrap = $('#card-other');
        let type_card_current = !!card_current.params ? card_current.params.teltecom_type : '';
        data_telecoms.forEach(function (card) {
            let type_card = !!card.params ? card.params.teltecom_type : '';
            if (type_card === type_card_current && card.id !== card_current.id) {
                let html = '<div class="swiper-slide">';
                html += `<a href="/mua-the-${card.key.toLowerCase()}" class="scratch-card">`;
                html += `<div class="card--thumb"><img src="${card.image}" class="card--thumb__image py-1 py-lg-0" alt=""></div>`;
                html += `<div class="card--name t-sub-2 text-capitalize">Thẻ ${card.key.toLowerCase()}</div>`;
                html += `</a></div>`;
                wrap.append(html);
            }
        });
        wrap.removeClass('is-load');
        wrap.find('.loading-wrap').remove();
    }
    $(document).on('click','.show-modal-confirm',function (e) {
        e.preventDefault();
        let card = $(this).closest('.card');
        let wrap = width > 992 ? $('#modal-confirm') : $('#step-confirm');
        let quantity = card.find('.js-quantity-input').val();
        let discount = card.find('[data-discount]').data('discount');
        let amount = card.find('[data-amount]').data('amount');
        let total = (amount * quantity) - (amount * quantity * discount / 100);
        wrap.find('.t-quantity-card').text(pad(quantity));
        wrap.find('.t-discount-card').text(percent_format.to(discount));
        wrap.find('.t-amount-card').text(money_format.to(amount));
        wrap.find('.t-total-card').text(money_format.to(total));
        width > 992 ? wrap.modal('show') : '';
    });
    $('.submit-payment').on('click',function (e) {
        e.preventDefault();
        $(this).text('Đang xử lý...');
        let wrap = width < 992 ? $(this).closest('#step-confirm') :  $(this).closest('#modal-confirm');
        let data_send = {};
        data_send.amount = money_format.from(wrap.find('.t-amount-card').text().trim());
        data_send.telecom =wrap.find('.t-type-card').text().trim();
        data_send.quantity = parseInt(wrap.find('.t-quantity-card').text().trim());
        data_send._token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:'/mua-the',
            type:'POST',
            data:data_send,
            success:function (res) {
                if (res.status === 1){

                }
                if (res.status === 0){
                    $('#modal-failed .res-message').text(res.message);
                    width > 992 ? $('#modal-confirm').modal('hide') : '';
                    $('#modal-failed').modal('show');
                }
                if(res.status === 401){
                    window.location.href = '/login?return_url='+window.location.href;
                }

                $('.submit-payment').text('Xác nhận');
            },
        });
    })
});
