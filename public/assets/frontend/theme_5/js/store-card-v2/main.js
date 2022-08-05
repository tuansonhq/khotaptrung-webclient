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
        }
    }
    function setTypeCard() {
        let wrap_game = $('#card-game .card-wrap');
        let wrap_phone = $('#card-phone .card-wrap');
        let wrap_game_mobile = $('#tab-card-game .card-wrap');
        let wrap_game_phone = $('#tab-card-phone .card-wrap');
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
                    : wrap_game_phone.append(html_card);
            });
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
            },
        });
        function setHtml(res) {
            if(res.status === 1) {
                let data = res.data;
                if (data.length){
                    let card_wrap = width > 992 ? $('#wrap-desktop') : $('#wrap-mobile');
                    data.forEach(function (amount,index) {
                     let html = setAmount(amount,index);
                     card_wrap.append(html);
                    });
                }
            }
        }
        function setAmount(amount,index) {
            if(width > 992){
                let unit_price = amount.amount - ((amount.amount * (100 - amount.ratio_default) / 100));
                console.log(amount.amount)
                let html = '<div class="col-lg-3 c-px-8 c-mb-16">';
                html += '<div class="card">';
                html += '<div class="card-body c-p-16">';
                html += `<a href="/mua-the-${telecom}-${kFormatter(amount.amount)}" class="scratch-card c-mb-12">`;
                html += `<div class="card--thumb">`;
                html += `<img src="${card_current.image}" class="card--thumb__image py-1 py-lg-0" alt="">`;
                html += '</div>';
                html += `<div class="card--name t-title-2 deno-card-color">${money_format.to(amount.amount)} VND</div>`;
                html += `</a>`;
                html += `<span class="t-sub-2 t-capitalize">Thẻ ${telecom} ${kFormatter(amount.amount)}</span>`;
                html += `<div class="t-body-1 link-color">Đơn giá: ${money_format.to(unit_price)}</div>`;
                html += `<div class="d-flex justify-content-between align-items-center c-mt-12">`;
                html += `<span class="t-body-2">Số lượng</span>`;
                html += `<div class="js-quantity sm"><div class="js-quantity-minus"></div><input type="text" class="js-quantity-input" value="1"><div class="js-quantity-add"></div></div></div>`;
                html += `<div class="group-btn c-mt-16"><button type="button" class="btn secondary">Chọn mua</button></div>`;
                html += `</div></div></div>`;
                return html;
            } else {

            }
        }
    }
});
