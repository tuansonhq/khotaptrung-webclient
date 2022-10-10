
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">


<!-- Mirrored from muathe123.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 06:46:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mua Thẻ Garena Online Giá Rẻ | Đổi Thẻ Garena Từ Thẻ Điện Thoại</title>
    @stack('style')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.css">
    <!-- <link media="screen" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" /> -->
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/responsive.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/blog.css?v={{time()}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>

</head>

<body class="c-layout-header-fixed">
<!--header section work start-->
@include('frontend.layouts.includes.header')

<!--Login Start-->
<!-- đăng kí -->
<!-- đăng nhập -->
@include('frontend.widget.modal.__login')
<div id="modalinfo" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="panel panel-primary">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">x</button><span></span></div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div id="remoteModal" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content panel panel-primary"></div>
    </div>
</div>

@if(\Illuminate\Support\Facades\Request::is('/'))
<picture class="banner_index">
    <img src="https://thegarenagiare.com/upload-usr/images/4z9he1kvXA_1621052133.jpg" alt="mua-the-cao-gia-re" title="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
</picture>

@endif
<div id="main_home">
    <div class="container">
        @yield('content')
        <script>
            function reply_click(clicked_id) {
                let html = '';
                var getamount = $.get("/mua-the/get-amount?telecom_key=" + clicked_id, function (data, status) {
                    $.each(data.store_telecom_value, function (key, value) {
                        html += '<div class="text-center">';
                        html += '<input type="radio" name="amount" class="amount" id="CheckboxSupplier' + key + '" value="' + value['amount'] + '" rel-ratio="' + value['ratio_default'] + '"/>';
                        html += '<input style="display: none" type="text" id="price_' + value['amount'] + '" class="ratio_default" value="' + value['ratio_default'] + '"/>';
                        html += '<label class="item-content" for="CheckboxSupplier' + key + '">';
                        html += '<h5>' + formatNumber(value['amount']) + ' VNĐ </h5>';
                        html += '<p>Giá: <span>' + formatNumber(value['amount'] * value['ratio_default'] / 100) + ' VNĐ</span></p>';
                        html += '</label></div>';
                    });
                    $('#render-supplier').html(html);

                    let button = '';
                    button += '<div class="form-group m-form__group row ml-1">';
                    button += '<label class="col-lg-2 col-md-4 col-sm-4 col-xs-4 col-form-label" style="font-weight:bold;font-size:16px;line-height: 33px;color:#212121">Số lượng: </label>';
                    button += '<div class="col-lg-2 col-md-4 col-sm-4 col-4">';
                    button += '<select class="form-control m-input m-input--air" name="quantity" id="quantity" style="border-color: #0000004f;">';
                    for (i = 1; i <= 10; i++) {
                        button += '<option class="quantity" value="' + i + '">' + i + '</option>';
                    }

                    button += '</select></div></div>';
                    $('#button').html(button);

                    var render_denominations = clicked_id;
                    $('.denominations').html(render_denominations);
                    $(".price_supplier").html("Chưa chọn");
                    $(".price_sale").html("0");
                    $(".render_quantity").html("1");
                    $(".total_price").html("0");
                });
                // var pos1 = $('#content');
                // if (pos1.length) {
                //     var top = pos1.offset().top;
                //
                //     $([document.documentElement, document.body]).animate({
                //         scrollTop: top
                //     }, 500);
                // }
            }

            function formatNumber(num) {
                var num = num+"";
                if(num!="undefined"){
                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                }
                else{
                    return "";
                }
            }

            $(document).ready(function () {
                $.ajax({
                    url: "/mua-the",
                    type: "GET",
                    success: function (data) {
                        let html = '';
                        // html += '<div id="flex-box">';
                        var firstClick="";
                        $.each(data.store_telecom, function (key, value) {
                            if(key==0){
                                firstClick='.label-' + value['key']

                            }

                            html += '<li>';
                            html += '<div class="nav-link link-supplier text-center" >';
                            html += '<input name="telecom_key" value="' + value['key'] + '" id="myCheckbox' + key + '" type="radio" />';
                            html += '<label class="item-wapper label-' + value['key'] + '" for="myCheckbox' + key + '" onClick="reply_click(this.id)" id="' + value['key'] + '">';
                            if (value['image']) {
                                html += "<img class=\"img-fluid\" src=\"" + value["image"] + "\">";
                            } else {
                                html += value['title'];
                            }
                            // html += value['title'];
                            html += '</label></div>';
                            html += '</li>';
                        });
                        // html += '</div>';
                        $('#tab-supplier').html(html);
                        $( firstClick ).click();


                    }
                });


                $("#render-supplier").on("click", ".item-content", function () {
                    // alert("success");
                    $('.item-content').removeClass("active");
                    $(this).addClass("active");
                    $('#quantity option').prop('selected', function () {
                        return this.defaultSelected;
                    });
                });

                $("#render-supplier").on("click", function () {
                    var amount = $('input[name=amount]:checked').val(),
                        quantity = $('.quantity').val();
                    sale = $("#price_" + amount).val(),
                        $(".render_quantity").html(quantity);
                    $(".price_supplier").html(formatNumber(amount) + " VNĐ");
                    $(".ratio").html(formatNumber(100-sale) +"%" );
                    $(".total_price").html(formatNumber(quantity * (sale * amount / 100))+" VNĐ");

                });


                $("#button").on('change', '#quantity', function () {

                    quantity = $('#quantity').val();
                    var amount = $('input[name=amount]:checked').val(),
                        sale = $("#price_" + amount).val();
                    $(".render_quantity").html(quantity);

                    $(".price_supplier").html(formatNumber(amount) + " VNĐ");
                    $(".ratio").html(formatNumber(formatNumber(100-sale) +"%" ));
                    //
                    $(".total_price").html(formatNumber(quantity * (sale * amount / 100))+" VNĐ");
                });


                // if (screen.width <= 480) {
                //     var pos1 = $('.menhgia');
                //     if (pos1.length) {
                //         var contentNav = nav.offset().top;
                //         var pos1 = $('.menhgia').offset().top;
                //         var pos1 = pos1 - 15;
                //         $('.ftxt1').click(function () {
                //             $('body, html').animate({
                //                 scrollTop: pos1
                //             }, 'slow');
                //         });
                //     }
                //
                //
                // }
            });

            $("#recharge_supplier").on('submit',function (event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: '/mua-the',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData:false,
                    beforeSend: function(){
                        $(".content-ajax").hide();
                        $('#btnBuy').prop('disabled', true);
                        $('#btnBuy').html('<i class="fas fa-spinner fa-spin"></i> Chờ xử lý');
                    },
                    success: (data) =>{
                        if(data.errors){
                            $('#modal_pay').modal('hide');

                            swal({
                                title: "Lỗi !",
                                text: data.errors,
                                icon: "error",
                                buttons: {

                                    charge: {
                                        text: "Nạp tiền",
                                        value: "charge",
                                    },
                                    cancel: "Đóng",
                                },
                            })
                                .then((value) => {
                                    switch (value) {
                                        case "charge":
                                            window.location.href = "https://thegarenagiare.com/nap-the";
                                            break;
                                        default:

                                    }
                                });
                        }else{
                            $('#modal_pay').modal('hide');
                            $('#showInfor').modal('show');
                            let html = '';
                            html += '<div class="id-infor" data-id="'+data.id+'"></div>';
                            $('#showInforDetails').html(html);
                            var id = $(".id-infor").data('id');
                            $.ajax({
                                url: "/mua-the/"+id+"/thong-tin-the",
                                type:"GET",
                                success: function(data){
                                    // console.log(data.data.id);
                                    $("#id-item").html(id);
                                    $("#description-item").html(data.data.description);
                                    $("#money-item").html(formatNumber(data.data.price)+" VNĐ");
                                    $("#txns-item").html(100-(data.data.txns[0].ratio)+" %");
                                    //
                                    // console.log(data.data.store_card);
                                    let html = '';
                                    $.each(data.arr,function(key,value){
                                        html += '<tr>';
                                        html += '<td class="pin"><span>'+value['pin_item']+'</span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copyPin" aria-hidden="true"></i></td>';
                                        html += '<td class="serial"><span>'+value['serial_item']+' </span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copySerial" aria-hidden="true"></i></td>';
                                        html += '</tr>';
                                    });
                                    $('#store_card').html(html);
                                }
                            });
                        }
                    },
                    complete: function(){
                        $('.ajax-loader').hide();
                        $(".content-ajax").show();

                        $('#btnBuy').prop('disabled', false);
                        $('#btnBuy').html('Thanh toán');

                    }
                });
            });

            $('#store_card').on('click','.copyPin',function(){
                var text=$(this).prev().text()
                var $temp = $("<input>");
                $("#store_card").append($temp);
                $temp.val($.trim(text)).select();
                document.execCommand("copy");
                $temp.remove();
            });
            $('#store_card').on('click','.copySerial',function(){
                var text=$(this).prev().text()
                var $temp = $("<input>");
                $("#store_card").append($temp);
                $temp.val($.trim(text)).select();
                document.execCommand("copy");
                $temp.remove();
            });
        </script>

    </div>
</div>
@include('frontend.layouts.includes.footer')

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">
        </div>
    </div>
</div>


<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<script src="/assets/frontend/{{theme('')->theme_key}}/lib/lazysizes.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert/sweetalert.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/main.js"></script>

<button type="button" class="btn btn-danger btn-floating btn-lg ripple-surface" id="btn-back-to-top" style="display: none; min-width: 45px;z-index: 999">
    <i class="fas fa-arrow-up"></i>
</button>


</body>
</html>
