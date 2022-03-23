<form action="{{route('postDeposit')}}" id="form-charge" method="POST">
    @csrf
    <div class="form-group">
        <div class="col-12">
            @if(isset($data))
                <select name="tele_card"  id="tele_card"  class="form-control" >
                    @foreach($data as $key=>$items)
                        <option value="{{$items->title}}" >{{$items->title}}</option>
                    @endforeach
                </select>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-12">
            <select class="form-control " id="tele_amount" name="tele_amount">
                <option value="VIETTEL">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
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
    <div class="form-group" style="margin-top: 40px">
        <div class="col-12">
            @if (App\Library\AuthCustom::check())
            <button class="btn btn-submit" type="submit">Nạp thẻ</button>
            @else
                <form action="/login">
                    <button class="btn btn-submit" type="submit">Nạp thẻ</button>
                </form>

            @endif
        </div>
    </div>

</form>
<script>
    // nap the trang chủ
    $(document).ready(function(){
    GetAmount();
    $("#tele_card").on('change', function () {
        GetAmount();

    });

    // $(function () {
    $('#tele_card').change(function () {
        // alert(111)
        GetAmount()
        // $("#telecard").on('change', function(){

    });
    function GetAmount(){
        $('.hide').show();
        telecom = $("#tele_card").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            data: {
                telecom: telecom,

            },
            url: "/nap-the",
            success: function (response) {

                console.log(response.data)
                $('select[name="tele_amount"]').find('option').remove();
                for(i = 0; i < response.data.data.length; i++) {
                    console.log(response.data.data[0])
                    tele = response.data.data[i];
                    let html = '';
                    html +=''
                    html += '<option value="'+ tele['amount'] +'">'+ tele['amount'] +' VNĐ (nhận ' + tele['ratio_true_amount'] +' %) </option>';
                    $('select[name="tele_amount"]').append(html)
// js
//                     UpdatePrice();
                };


            }

        });
    }

        $('#form-charge').submit(function (e) {
            e.preventDefault();
            // var formSubmit = $(this).closest('form')
            // url = $(this).data('key');
            //
            var formSubmit = $(this);
            var url = formSubmit.attr('action');
            var btnSubmit = formSubmit.find(':submit');
            // btnSubmit.text('Đang xử lý...');
            // btnSubmit.prop('disabled', true);

            // $('#ok').off().on('click', function (m) {
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
                            // $('#form-charge').trigger("reset");
                        }
                        else{
                            alert(1111);

                            // $('#form-charge').trigger("reset");
                            // btnSubmit.text('Thanh toán');
                            // btnSubmit.prop('disabled', false);
                        }
                    },
                    error: function (data) {
                        // $('#form-charge').trigger("reset");
                        alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                        btnSubmit.text('Xác nhận');
                        // btnSubmit.prop('disabled', false);
                    },
                    complete: function (data) {
                        $('#reload').trigger('click');
                        $('#form-charge').trigger("reset");
                    }
                });
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
        // });

    });

</script>
