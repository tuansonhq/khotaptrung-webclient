@extends('frontend.layouts.master')
@section('content')
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
    <div class="container">

    </div>
    <div class="text-center" style="margin-bottom: 50px;">
        <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ MUA THẺ </h2>

    </div>
    <form method="POST" action="{{route('postStoreCard')}}" id="form-storeCard" accept-charset="UTF-8" class="" enctype="multipart/form-data">
        @csrf
        <div class="container detail-service">
            <div class="row">
                <div class="col-md-8" style="margin-bottom:20px;">
                    <div class="service-info">
                            <div class="row">
                                <div class="col-md-5 d-none d-md-block d-lg-block">
                                    <div class="">
                                        <div class="news_image">
                                            <img src="	https://nick.vn/assets/frontend/images/store-card.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="mb-2 control-label bb"><strong>Chọn nhà mạng:</strong> </div>
                                    <div class="mb-3">

                                        @if(isset($result->data))
                                            <select name="telecom_key" id="telecom_key" class="server-filter form-control t14" style="">
                                                @foreach($result->data as $key=>$items)
                                                    <option value="{{$items->key}}">{{$items->title}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>

                                    <div class="mb-2 control-label bb"><strong>Mệnh giá:</strong> </div>
                                    <div class="mb-3">
                                        <select name="amount" id="amount" class="server-filter form-control t14" style="">

                                        </select>
                                    </div>
                                    <div class="mb-2 control-label bb"><strong>Số lượng:</strong></div>
                                    <div class="mb-3">
                                        <select name="quantity" id="quantity" class="server-filter form-control t14" style="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>



                <div class="col-md-4">


                    <div class="row">
                        <div class="col-md-12">
                            <div class=" emply-btns text-center">
                                <a id="txtPrice" style="font-size: 20px;font-weight: bold" class="">Tổng: 0 VNĐ</a>
                                <button id="btnPurchase" type="submit" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                            </div>
                        </div>
                    </div>

                    <div class="row box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">


                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
{{--<div class="modal fade" id="deletePro">--}}
{{--    <div class="modal-dialog modal-lg  modal-dialog-centered idol_detail_addThanhtich">--}}
{{--        <div class="modal-content idol_detail_addThanhtich__content">--}}
{{--            <!-- Modal body -->--}}
{{--            <div class="modal-body idol_detail_addThanhtich__content_detail">--}}

{{--                <div class="idol_detail_addThanhtich__content_detail_head">--}}
{{--                    <span style="font-size: 16px;text-transform: none">Xóa sự kiện</span>--}}
{{--                    <button type="button" class=" " data-dismiss="modal"><img src="/assets/frontend/images/Close.png" alt=""></button>--}}
{{--                </div>--}}
{{--                <p style="color: white;font-size: 14px;font-weight: 400">Bạn có chắc muốn xóa ?</p>--}}
{{--                <div class="idol_detail_addThanhtich__content_detail_thanhtich">--}}
{{--                    <button type="button" data-dismiss="modal" class="cancel_button">Hủy bỏ</button>--}}
{{--                    <button type="button" data-dismiss="modal" class="delete_button" id="ok">Xóa</button>--}}

{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center;margin: auto">Xác nhận thông tin thanh toán</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>
                </button>

            </div>

            <div class="modal-body">
                <p> Bạn thực sự muốn thanh toán?</p>
            </div>
            <div class="modal-footer">

                <button type="button" data-dismiss="modal" id="ok" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loading" style="">Xác nhận thanh toán</button>

                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

            </div>


        </div>
    </div>
</div>

<script>


    $(document).ready(function() {
        GetAmount();
        $("#telecom_key").on('change', function () {
            GetAmount();

        });

        $("#amount").on('change', function () {
            UpdatePrice();
        });

        $("#quantity").on('change', function () {
            UpdatePrice();
        });

        // $(function () {
        $('#telecom_key').change(function () {
            // $("#telecard").on('change', function(){




        });
        function GetAmount(){
            $('.hide').show();
            telecom = $("#telecom_key").val();
            $.ajax({
                type: 'GET',
                dataType: "json",
                data: {
                    telecom: telecom,

                },
                url: "/mua-the-api",
                success: function (response) {

                    console.log(response.data)
                    $('select[name="amount"]').find('option').remove();
                    for(i = 0; i < response.data.data.length; i++) {

                        tele = response.data.data[i];
                        let html = '';
                        html +=''
                        html += '<option value="'+ tele['amount'] +'" rel-ratio="'+ tele['ratio_default']+'">'+ tele['amount'] +' VNĐ - ' + tele['ratio_default'] +'% </option>';
                        $('select[name="amount"]').append(html)
// js
                        UpdatePrice();
                    };


                }

            });
        }
        function UpdatePrice(){
            var amount=$("#amount").val();
            var ratio=$('#amount option:selected').attr('rel-ratio');
            var quantity=$("#quantity").val();

            if(amount=='' ||amount==null || ratio=='' ||ratio==null   || quantity=='' ||quantity==null){

                $('#txtPrice').html('Tổng: ' + 0 + ' VNĐ');
                $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass();
                });
                console.log('amount:'+amount);
                console.log('ratio:'+ratio);
                console.log('quantity:'+quantity);
                return;
            }



            if(ratio<=0 || ratio=="" || ratio==null){
                ratio=100;
            }

            var sale=amount-(amount*ratio/100);

            // var total=(amount-sale) *quantity;
            var total=sale*quantity;
            $('#txtPrice').html('Tổng: ' + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });

        }
    });
    $(document).ready(function () {
        $('#btnPurchase').click(function () {

            $('#homealert').modal('show');
        });
    });


    // function Confirm(index, serverid) {
    //     $('[name="server"]').val(serverid);
    //     $('[name="selected"]').val(index);
    //     $('#btnPurchase').click();
    // }

    // var data = jQuery.parseJSON('{"input_auto":"1","idkey":"lienquan","image_oldest":"1","server_mode":"0","server_price":"0","filter_name":"Quân Huy","filter_type":"4","input_pack_min":null,"input_pack_max":null,"input_pack_rate":null,"id":["7","7","7","7","7","7"],"name":["Gói 1 : 16 quân huy","Gói 2 : 32  quân huy","Gói 3 : 84 quân huy","Gói 4 : 168  quân huy","Gói 5 : 340  quân huy","Gói 7 : 856 quân huy"],"price":["8200","16400","41000","82000","164000","410000"],"discount":["1","0","0","0","0","0"],"total":["NaN","NaN","NaN","NaN","NaN","NaN"],"day":["0","0","0","0","0","0"],"punish_price":["0","0","0","0","0","0"],"praise_day":["0","0","0","0","0","0"],"praise_price":["10","20","50","100","200","500"],"send_name":["Tên tài khoản đăng nhập liên quân","Mật khẩu đăng nhập"],"send_type":["1","5"],"send_id0":[null],"send_data0":[null],"send_id1":[null],"send_data1":[null],"input_send_desc":"Khi mua ngọc tại web các bạn lưu ý để trong nick 1 ngọc và đứng tại siêu thị để nhận ngọc nhanh nhé","captcha":null}');
    // console.log(data);

    //
    $('#form-storeCard').submit(function (e) {
        e.preventDefault();
        var formSubmit = $(this).closest('form')
        url = $(this).data('key');
        //
        $('#homealert').modal("show");
        // var formSubmit = $(this);
        // var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.text('Đang xử lý...');
        btnSubmit.prop('disabled', true);

        $('#ok').off().on('click', function (m) {
            $.ajax({
                type: "POST",
                url: url,
                cache:false,
                data: formSubmit.serialize(), // serializes the form's elements.
                beforeSend: function (xhr) {
                    alert('1111')
                },
                success: function (data) {
                    console.log(data);
                    if(data.status == 1){
                        alert(data.message);

                    }
                    else{
                        alert(data);
                        btnSubmit.text('Thanh toán');
                        btnSubmit.prop('disabled', false);
                    }
                },
                error: function (data) {
                    alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                    btnSubmit.text('Xác nhận');
                    btnSubmit.prop('disabled', false);
                },
                complete: function (data) {
                    $('#imgcaptcha').trigger('click');
                    $('#form-recharge').trigger("reset");
                }
            });
        });
        btnSubmit.text('Thanh toán');
        btnSubmit.prop('disabled', false);
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            //
    });

</script>



{{--<script>--}}
{{--    var itemselect = -1;--}}
{{--    $(document).ready(function () {--}}
{{--        $(".s-filter").change(function (elm, select) {--}}
{{--            itemselect = parseInt($(".s-filter").val());--}}
{{--            UpdatePrice();--}}
{{--        });--}}
{{--        itemselect = parseInt($(".s-filter").val());--}}
{{--        UpdatePrice();--}}
{{--    });--}}

{{--    function UpdatePrice() {--}}
{{--        var price = 0;--}}
{{--        if (itemselect == -1) {--}}
{{--            return;--}}
{{--        }--}}

{{--        if (data.server_mode == 1 && data.server_price == 1) {--}}

{{--            var s_price = data["price" + server];--}}
{{--            price = parseInt(s_price[itemselect]);--}}
{{--        }--}}
{{--        else {--}}
{{--            var s_price = data["price"];--}}
{{--            price = parseInt(s_price[itemselect]);--}}
{{--        }--}}


{{--        $('#txtPrice').html('Tổng: ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');--}}
{{--        $('[name="selected"]').val($(".s-filter").val());--}}

{{--        $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {--}}
{{--            $(this).removeClass();--}}
{{--        });--}}
{{--        $('tbody tr.selected').removeClass('selected');--}}
{{--        $('tbody tr').eq(itemselect).addClass('selected');--}}

{{--//                    $('tbody tr a').each((idx, elm) => {--}}
{{--//                        $(elm).attr('href', '/service/purchase/33.html?selected=' + idx + '&server=' + server);--}}
{{--//                    });--}}
{{--    }--}}

{{--    function ConfirmBuy(value) {--}}
{{--        var index = $('.server-filter').val();--}}
{{--        Confirm(value, index);--}}
{{--    }--}}
{{--</script>--}}


@endsection
