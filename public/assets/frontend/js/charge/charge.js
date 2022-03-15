$(document).ready(function(){

    $('#telecard').change(function () {
        // $("#telecard").on('change', function(){
        $('.hide').show();
        telecom = $(this).val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            data: {
                telecom: telecom,

            },
            url: "/telecom-deposit-auto",
            success: function (response) {
                console.log(response.data.data)
                $('select[name="amount"]').find('option:not(:first)').remove();
                for(i = 0; i < response.data.data.length; i++) {

                    tele = response.data.data[i];
                    let html = '';
                    html +=''
                    html += '<option value="'+ tele['amount'] +'">'+ tele['amount'] +' VNĐ (nhận ' + tele['agency_ratio_true_amount'] +'%) </option>';
                    $('select[name="amount"]').append(html)

                };
            }
        });


    });

    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $('#form-charge').submit(function (e) {
        e.preventDefault();
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.text('Đang xử lý...');
        btnSubmit.prop('disabled', true);
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (data) {
                console.log(data);
                if(data.status == 1){
                    alert(data.message);

                    // formSubmit.remove();
                }
                else{
                    alert(data);
                    btnSubmit.text('Xác nhận');
                    btnSubmit.prop('disabled', false);
                }
            },
            error: function (data) {
                // console.log(data.responseJSON.errors[1])
                alert('Điền đúng mã capcha');
                btnSubmit.text('Xác nhận');
                btnSubmit.prop('disabled', false);
            },
            complete: function (data) {
                $('#imgcaptcha').trigger('click');
                $('#form-recharge').trigger("reset");
            }
        });
    });

    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');


        loadDataChargeHistory(page);
    });

    function loadDataChargeHistory(page) {

        request = $.ajax({
            type: 'GET',
            url: '/nap-the-tu-dong/data',
            data: {
                page:page,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#data_pay_card_history").empty().html('');
                $("#data_pay_card_history").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})
