@push('js')
    <script src="/assets/frontend/js/transfer/transfer.js"></script>
@endpush
<div class="row justify-content-center" id="loading-data">
    <div class="loading"></div>
</div>
<div class="" id="form-content">
    <form action="{{route('postTelecomDepositAuto')}}" id="form-charge" method="POST">
        @csrf

        <div class="form-group">
            <div class="col-12">
                <select name="type"  id="telecom"  class="form-control" >

                </select>

            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <select class="form-control " id="amount" name="amount">

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <input type="text" placeholder="Mã số thẻ" name="pin" class="form-control" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <input type="text" placeholder="Số serial " name="serial" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="input-group" style="width: 100%">
                    <input type="text" class="form-control" placeholder="Mã bảo vệ" name="captcha" id="captcha">
                    <div class="captcha">
                    <span class="reload"  id="reload">
                        {!! captcha_img() !!}
                    </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="form-group" >
            <div class="col-12">
{{--                @if (App\Library\AuthCustom::check())--}}
                    <button class="btn btn-submit" type="submit">Nạp thẻ</button>
{{--                @else--}}
{{--                    <a class="btn btn-submit" onclick="window.location.href='/login'">Nạp thẻ</a>--}}

{{--                @endif--}}
            </div>
        </div>

    </form>
</div>


<script>
    $(document).ready(function(){
        const csrf_token = $('meta[name="csrf-token"]').attr('content');
        const token =  $('meta[name="jwt"]').attr('content');
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });

        });

        function getTelecom(){
            var url = '/get-tele-card';
            $.ajax({
                type: "GET",
                url: url,
                success: function (data) {
                    if(data.status == 1){
                        let html = '';
                        if(data.data.length > 0){
                            $.each(data.data,function(key,value){
                                html += '<option value="'+value.key+'">'+value.key+'</option>';
                            });
                        }
                        else{
                            html += '<option value="">-- Vui lòng chọn nhà mạng --</option>';
                        }
                        $('select#telecom').html(html)
                        ele = $('select#telecom option').first();
                        var telecom = ele.val();
                        getAmount(telecom);
                        $('#loading-data').remove();
                        $('#form-content').removeClass('hide');
                    }
                    else{
                        swal({
                            title: "Có lỗi xảy ra !",
                            text: data.message,
                            icon: "error",
                            buttons: {
                                cancel: "Đóng",
                            },
                        })
                    }
                },
                error: function (data) {
                    swal({
                        title: "Lỗi !",
                        text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
                },
                complete: function (data) {

                }
            });
        }

        function getAmount(telecom){
            if(telecom == null){
                html = '<option value="">-- Vui lòng chọn mệnh giá, sai mất thẻ --</option>';
                $('slect#amount').html(html)
                return;
            }
            var url = '/get-amount-tele-card';
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    telecom:telecom
                },
                beforeSend: function (xhr) {

                },
                success: function (data) {
                    if(data.status == 1){
                        let html = '';
                        html += '<option value="">-- Vui lòng chọn mệnh giá, sai mất thẻ --</option>';
                        if(data.data.length > 0){
                            $.each(data.data,function(key,value){
                                html += '<option value="'+ value.amount +'" rel-ratio="'+ value.ratio_default+'">'+ formatNumber(value.amount)  +' VNĐ - ' + value.ratio_true_amount +'% </option>';
                            });
                        }
                        $('select#amount').html(html);
                    }
                    else{
                        swal({
                            title: "Có lỗi xảy ra !",
                            text: data.message,
                            icon: "error",
                            buttons: {
                                cancel: "Đóng",
                            },
                        })
                    }
                },
                error: function (data) {
                    swal({
                        title: "Lỗi !",
                        text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
                },
                complete: function (data) {

                }
            });
        }

        $('body').on('change','#telecom',function(){
            var telecom = $(this).val();
            getAmount(telecom)
        });

        getTelecom();

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
                    if(data.status == 1){
                        swal({
                            title: "Thành công !",
                            text: data.message,
                            icon: "success",
                        })
                    }
                    else if(data.status == 401){
                        window.location.href = '/login';
                    }
                    else if(data.status == 0){
                        swal({
                            title: "Nạp thẻ thất bại !",
                            text: data.message,
                            icon: "error",
                            buttons: {
                                cancel: "Đóng",
                            },
                        })
                    }
                    else{
                        swal({
                            title: "Có lỗi xảy ra !",
                            text: data.message,
                            icon: "error",
                            buttons: {
                                cancel: "Đóng",
                            },
                        })
                    }
                },
                error: function (data) {
                    swal({
                        title: "Có lỗi xảy ra !",
                        text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
                },
                complete: function (data) {
                    $('span#reload').trigger('click');
                    formSubmit.trigger("reset");
                    btnSubmit.text('Nạp thẻ');
                    btnSubmit.prop('disabled', false);
                }
            });
        });

        $(document).on('click', '.paginate__v1__nt .pagination a',function(event){
            event.preventDefault();

            var page = $(this).attr('href').split('page=')[1];

            $('#hidden_page_service_nt').val(page);

            $('li').removeClass('active');
            $(this).parent().addClass('active');


            paycartDataChargeHistory(page);
        });

        function paycartDataChargeHistory(page) {

            request = $.ajax({
                type: 'GET',
                url: '/nap-the',
                data: {
                    page:page,
                },
                beforeSend: function (xhr) {

                },
                success: (data) => {

                    $(".paycartdata").empty().html('');
                    $(".paycartdata").empty().html(data);
                },
                error: function (data) {

                },
                complete: function (data) {

                }
            });
        }
    });

</script>
