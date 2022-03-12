@extends('frontend.layouts.master')
@section('content')
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
    <div class="container">

    </div>
    <div class="text-center" style="margin-bottom: 50px;">
        <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ MUA THẺ </h2>

    </div>
    <form method="POST" action="https://nick.vn/mua-the" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="YWy8BpQsdalNAF2NRmpqet4AUYp2saXYA9rZPGT3">
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
                                <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
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


    function Confirm(index, serverid) {
        $('[name="server"]').val(serverid);
        $('[name="selected"]').val(index);
        $('#btnPurchase').click();
    }

    // var data = jQuery.parseJSON('{"input_auto":"1","idkey":"lienquan","image_oldest":"1","server_mode":"0","server_price":"0","filter_name":"Quân Huy","filter_type":"4","input_pack_min":null,"input_pack_max":null,"input_pack_rate":null,"id":["7","7","7","7","7","7"],"name":["Gói 1 : 16 quân huy","Gói 2 : 32  quân huy","Gói 3 : 84 quân huy","Gói 4 : 168  quân huy","Gói 5 : 340  quân huy","Gói 7 : 856 quân huy"],"price":["8200","16400","41000","82000","164000","410000"],"discount":["1","0","0","0","0","0"],"total":["NaN","NaN","NaN","NaN","NaN","NaN"],"day":["0","0","0","0","0","0"],"punish_price":["0","0","0","0","0","0"],"praise_day":["0","0","0","0","0","0"],"praise_price":["10","20","50","100","200","500"],"send_name":["Tên tài khoản đăng nhập liên quân","Mật khẩu đăng nhập"],"send_type":["1","5"],"send_id0":[null],"send_data0":[null],"send_id1":[null],"send_data1":[null],"input_send_desc":"Khi mua ngọc tại web các bạn lưu ý để trong nick 1 ngọc và đứng tại siêu thị để nhận ngọc nhanh nhé","captcha":null}');
    // console.log(data);

    //


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
