$(document).ready(function(){

    getCardAmount($('select[name="card-type"]').val());

    var dataSend = {
        amount: 0,
        telecom: '',
        quantity: 0,
        _token: $('meta[name="csrf-token"]').attr('content'),
    }

    $('#btnPurchase').on('click', function (e) {
        e.preventDefault();
        prepareDataSend();
    });

    $(document).on('click', '#modal--confirm__payment #confirmSubmitButton', function(e) {
        e.preventDefault();
        $.ajax({
            url:'/ajax/mua-the',
            type:'POST',
            data: dataSend,
            beforeSend: function () {
                $('#confirmSubmitButton').prop("disabled", true);
                $('#confirmSubmitButton').text("Đang xử lý");
                resetSuccessModal();
            },
            success:function (res) {
                // handle data callback
                $('#modal--confirm__payment').modal('hide');
                if(res.status && res.status != 401){
                    let data = res.data;
                    let cardImage = $('input[name="card-type"]:checked').data('img');
                    let cardName = $('input[name="card-type"]:checked').val();

                    $('#modal--success__payment .card__message').text(res.message);
                    $('#modal--success__payment #successCard').attr('src', cardImage);
                    $('#modal--success__payment #successPrice').text(formatNumber(dataSend.amount) + ' đ');
                    $('#modal--success__payment #successQuantity').text(dataSend.quantity);
                    if (data.length > 0){

                        //Append HTML for desktop layout
                        data.forEach(function (card) {
                            let html_card = '';
                            html_card += `<div class="swiper-slide card__detail">`;
                            html_card += `  <div class="card--header__detail">`;
                            html_card += `      <div class="card--info__wrap">`;
                            html_card += `          <div class="card--logo">`;
                            html_card += `            <img src="${cardImage}" alt="telecom_logo">`;
                            html_card += `          </div>`;
                            html_card += `          <div class="card--info">`;
                            html_card += `              <div class="card--info__name">`;
                            html_card += `                  ${cardName}`;
                            html_card += `              </div>`;
                            html_card += `               <div class="card--info__value">`;
                            html_card += `                    ${formatNumber(dataSend.amount)} đ`;
                            html_card += `                </div>`;
                            html_card += `            </div>`;
                            html_card += `        </div>`;
                            html_card += `    </div>`;
                            html_card += `    <div class="card--gray">`;
                            html_card += `      <div class="card--attr">`;
                            html_card += `            <div class="card--attr__name">`;
                            html_card += `              Mã thẻ`;
                            html_card += `            </div>`;
                            html_card += `            <div class="card--attr__value">`;
                            html_card += `              <div class="card__info">`;
                            html_card += `                  ${card.pin}`;
                            html_card += `               </div>`;
                            html_card += `               <div class="icon--coppy js-copy-text">`;
                            html_card += `                    <img src="/assets/frontend/theme_3/image/icons/coppy.png" alt="icon__copy">`;
                            html_card += `                </div>`;
                            html_card += `            </div>`;
                            html_card += `        </div>`;
                            html_card += `        <div class="card--attr">`;
                            html_card += `             <div class="card--attr__name">`;
                            html_card += `                 Số Series`;
                            html_card += `              </div>`;
                            html_card += `              <div class="card--attr__value">`;
                            html_card += `                  <div class="card__info">`;
                            html_card += `                      ${card.serial}`;
                            html_card += `                   </div>`;
                            html_card += `                   <div class="icon--coppy js-copy-text">`;
                            html_card += `                      <img src="/assets/frontend/theme_3/image/icons/coppy.png" alt="icon__copy">`;
                            html_card += `                   </div>`;
                            html_card += `               </div>`;
                            html_card += `         </div>`;
                            html_card += `    </div>`;
                            html_card += `</div>`;
                            $('#modal--success__payment .swiper-wrapper').append(html_card);
                        });
                    }

                    if (data.length > 1){
                        swiper_card.params.slidesPerView = 1.25;
                    } else {
                        swiper_card.params.slidesPerView = 1;
                    }

                    swiper_card.update();

                    $('#modal--success__payment').modal('show');
                }
                else {
                    $('#message--error--buy').text(res.message);
                    $('#modal--fail__payment').modal('show');
                }
            },
            error: function (res) {
                $('#message--error--buy').text('');
                $('#modal--fail__payment').modal('show');
            },
            complete: function () {
                $('#confirmSubmitButton').prop("disabled", false);
                $('#confirmSubmitButton').text("Xác nhận");
            }
        });

        $('#modal--confirm__payment').modal('hide');
    });

    //Listen to onchange event in input card-type
    $('select[name="card-type"]').change(function (e) {
        e.preventDefault();
        getCardAmount($(this).val());
    });

    //Activate onchange, oninput function for input field inside
    $('select[name="amount"]').change(function (e) {
        e.preventDefault();
        preparePriceBtn();
    });
    $('select[name="card-quantity"]').on('change', function (e) {
        e.preventDefault();
        preparePriceBtn();
    });

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }

    function getCardAmount (cardKey) {
        $.ajax({
            url: '/ajax/store-card/get-amount',
            type: 'GET',
            data: {
                telecom: cardKey
            },
            beforeSend: function () {
                $('#amount').empty();
            },
            success: function (res) {
                if (res.status) {
                    let data = res.data;
                    let loop_index = 0;

                    if (!data.length) {
                        $('#amount').append('<option value="" selected>Chưa có mệnh giá của thẻ</option>');
                        $('#btnPurchase').prop('disabled', true);
                        preparePriceBtn();
                    } else {
                        data.forEach(function (card) {
                            let html = '';
                            //Check if it is the first loop
                            if (loop_index === 0) {
                                html += `<option value="${card.amount}" data-ratio="${card.ratio_default}" selected>${formatNumber(card.amount)} VNĐ - ${100 - card.ratio_default}%</option>`;
                            } else {
                                html += `<option value="${card.amount}" data-ratio="${card.ratio_default}">${formatNumber(card.amount)} VNĐ - ${100 - card.ratio_default}%</option>`;
                            }

                            //Increase loop index
                            loop_index++;

                            // Append new HTML amount
                            $('#amount').append(html);

                        });

                        //prepare the input field and update price related value
                        $('select[name="card-quantity"]').val(1);

                        //Make btn no longer disable when failed get data
                        $('#btnPurchase').prop('disabled', false);
                        preparePriceBtn();
                    }

                }
            },
            complete: function () {

            }
        });
    }

    function preparePriceBtn () {
        let price = calculatePrice();
        if (price) {
            price = formatNumber(price);
            $('#cardPrice').text(price);
        } else {
            $('#cardPrice').text('0');
            $('#btnPurchase').prop('disabled', true);
        }
    }

    //Calculate price
    function calculatePrice () {
        let amount = $('select[name="amount"]').find(':selected').val();
        let quantity = $('select[name="card-quantity"]').val();
        let discount = $('select[name="amount"]').find(':selected').data('ratio');

        let discountPerCard = amount - (amount * discount /100);
        let totalPrice = (amount - discountPerCard) * quantity;
        let totalNotSale = amount * quantity;

        if (discountPerCard) {
            return totalPrice;
        }

        return totalNotSale;
    }

    function resetSuccessModal() {
        $('#modal--success__payment .card__message').text('');
        $('#modal--success__payment #successPrice').text('');
        $('#modal--success__payment #successQuantity').text('');
        $('#modal--success__payment .swiper-wrapper').empty();
    }

    //Append new data to submit to backend
    function prepareDataSend() {
        let amount = $('select[name="amount"]').find(':selected').val();
        let telecom = $('select[name="card-type"]').val();
        let quantity = $('select[name="card-quantity"]').val();

        dataSend.amount = amount;
        dataSend.telecom = telecom.toUpperCase();
        dataSend.quantity = quantity;

        console.log(dataSend);
    }
});
