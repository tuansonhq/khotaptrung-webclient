
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">


<!-- Mirrored from muathe123.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 06:46:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>

    <title>Mua Thẻ Garena Online Giá Rẻ | Đổi Thẻ Garena Từ Thẻ Điện Thoại</title>
    @stack('style')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.css">
    <!-- <link media="screen" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" /> -->
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/responsive.css?v={{time()}}">
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


<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="modal-title" id="myModalLabel"><i class="fa fa-sign-in"></i> Đăng nhập</div>
            </div>
            <span class="help-block" style="text-align: center;color: #dd4b39;margin-top: 20px;margin-bottom: 0">

                     <strong></strong>

                                    </span>

            <form id="sign_in" role="form" action="https://thegarenagiare.com/login" method="POST">
                <input type="hidden" name="_token" value="LFU5vc7pZziGJQf9VIxouOMS69I1iKGKLLsACICJ">
                <div class="panel-body">
                    <div class="alert alert-danger" id="divnotify"><i class="fa fa-info-circle fa-lg"></i><span></span></div>
                    <div class="form-group">
                        <label for="ctrlusername">Tài khoản</label>
                        <input type="text" name="username" id="ctrlusername" class="form-control" placeholder="Tài khoản đăng nhập" tabindex="1"   autofocus="autofocus" />
                    </div>
                    <div class="form-group">
                        <label for="ctrlpass">Mật khẩu:</label>
                        <input type="password" name="password" id="ctrlpass" class="form-control" autocomplete="off" placeholder="Mật khẩu" tabindex="2" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="ctrlloginbtn" tabindex="3"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        &nbsp;
                    </div>
                    <div class="text-form text-center">
                        <p>----  Hoặc  ----</p>
                    </div>
                    <div class="form-group m-form__group text-center">
                        <a style="" href="http://fb.nhapnick.com/thegarenagiare_com" class=""><i class="fab fa-facebook-square" style="font-size: 33px"></i></a>
                    </div>

                    <!-- <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgotyourpassword">Quên mật khẩu?</a> -->
                </div>
                <div class="panel-footer"><a class="pull-right" href="https://thegarenagiare.com/register"><i class="fa fa-share-square-o"></i> Bạn chưa có tài khoản? Đăng ký ngay</a>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- quên mật khẩu -->
<div class="modal fade" id="forgotyourpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>
                <div class="modal-title" id="myModalLabel"><i class="fa fa-sign-in"></i> Quên mật khẩu?</div>
            </div>
            <div class="panel-body">
                <div class="form-group has-error">
                    <label> Địa chỉ Email</label>
                    <input type="email" class="form-control" placeholder="Email" id="ctrlforgotemailtxt" name="ctrlforgotemailtxt" required="required" tabindex="1" />
                </div>
                <div class="form-group">
                    <button type="button" id="ctrlforgotpassbtn" class="btn btn-primary" tabindex="2"><i class="fa fa-sign-in"></i> Gửi lại mật khẩu</button>
                </div>
                <div class="form-group" id="Forgot_reply" style="color:#F36"></div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-primary pull-right" data-dismiss="modal" data-toggle="modal" data-target="#signin"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
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

<picture class="banner_index">
    <img src="https://thegarenagiare.com/upload-usr/images/4z9he1kvXA_1621052133.jpg" alt="mua-the-cao-gia-re" title="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
</picture>


<div id="main_home">
    <div class="container">


        <style>
            .banner_index img{margin: auto;
                text-align: center;
                display: block;}
            .card_process {
                margin-top: -23px;
            }

            #tab-supplier .nav-link.link-supplier {
                color: #6f727d;
                padding: 0px !important;
            }

            #tab-supplier label {
                border: 1px solid #E3E3E3;
                padding: 5px;
                display: block;
                position: relative;
                margin: 0px 14px 14px 14px;
                cursor: pointer;
                width: 135px;
                height: 75px;
                border-radius: 4px;
            }

            #tab-supplier input[type="radio"][id^="myCheckbox"] {
                display: none;
            }

            #tab-supplier {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
                padding-top: 20px;
            }


            label.item-wapper img {
                max-width: 100% !important;
                max-height: 100% !important;
            }

            #tab-supplier :checked + label {
                border: 1px solid #F25922;
            }

            #tab-supplier :checked + label::before {
                content: "";
                background: url('https://thegarenagiare.com/assets/frontend/images/new_index/checked_card.svg') no-repeat;
                background-size: 100% 100%;
                width: 23px;
                height: 23px;
                position: absolute;
                top: -11px;
                right: -10px;
                z-index: 1;
            }

            .tbl_card_discount tbody tr td:first-child {
                width: 50%;
            }
            .wapper-content {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .text-center {
                text-align: center !important;
            }

            #render-supplier label {
                width: 135px;
                height: 65px;
                border-radius: 4px;
                /* border: 1px solid #2F6A7C; */
                margin: 10px;
                cursor: pointer;
            }

            .wapper-content .item-content {
                cursor: pointer !important;
                width: 135px;
                height: 65px;
                border-radius: 4px;
                /* margin-right: 10px; */
                margin: 0px 5px;
                border: 1px solid #2F6A7C;
                margin-bottom: 10px;
            }

            #render-supplier input[type="radio"][id^="CheckboxSupplier"] {
                display: none;
            }

            .wapper-content .item-content h5 {
                margin-top: 10px;
                font-weight: 700;
                font-size: 16px;
                line-height: 19px;
                letter-spacing: .01em;
                color: #000;
                text-align: center;
            }

            .wapper-content .item-content p {
                font-size: 11px;
                font-weight: bold;
                color: #2F6A7C;
            }

            .wapper-content .item-content span {
                color: #F25922;
            }

            #render-supplier label.item-content {
                position: relative;
                border: 1px solid #E3E3E3;
            }

            #render-supplier label.item-content.active {
                border: 1px solid #F25922;
            }

            #render-supplier label.item-content.active::before {
                content: "";
                background: url("https://thegarenagiare.com/assets/frontend/images/new_index/checked_card.svg") no-repeat;
                background-size: 100% 100%;
                width: 23px;
                height: 23px;
                position: absolute;
                top: -11px;
                right: -10px;
                z-index: 1;
            }

            #quantity {
                height: 40px;
                width: 120px;
            }

            .info-payment td {
                text-align: left !important;
                padding-left: 25px !important;
            }

            .wapper-pay button {
                width: 100%;
                margin: 15px 0px;
                font-size: 16px;
                color: #fff;
                background: #f25922;
                font-weight: 600;
                text-transform: uppercase;
                height: 40px;

            }

            .wapper-pay button:hover {
                color: #fff;
                background: #d87957;
            }

            .wapper-pay button, .wapper-pay button:visited, .wapper-pay button:focus {
                outline: 0 !important;
                color: #ffffff !important;
            }


            @media (max-width: 991.98px) {


                .content-supplier {
                    overflow-x: scroll;
                    flex-wrap: wrap;

                }

                #supplier-flex {
                    width: 900px;
                    padding-top: 20px;
                }

                #tab-supplier label {
                    border: 1px solid #E3E3E3;
                    padding: 5px;
                    display: block;
                    position: relative;
                    margin: 1px 4px 14px 0px;
                    cursor: pointer;
                    width: 135px;
                    height: 75px;
                    border-radius: 4px;
                }

                #tab-supplier li:first-child label {
                    margin: 1px 4px 14px 1px !important;
                }


            }


        </style>
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




<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                var curModal = $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><i class=\"fas fa-spinner fa-spin\" style='font-size: 30px'></i></div>");
                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
            });
        });
    });
</script>



<style type="text/css">
    .modal{
        top: 100px;
    }
    #call_icon {
        position: fixed;
        right: 10px;
        bottom: 80px;
        z-index: 9999999;
        display: none;
    }

    @media  screen and (max-width: 480px) {
        #call_icon {
            display: block;
        }
    }
</style>

<script>
    $(function () {
        var url = window.location.href;
        $("#navbar-main li").removeClass("active");

        $("#navbar-main a").each(function () {


            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
                $(this).closest("li").parents('li').addClass("active");
            }
        });
    });

</script>

<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<script>
    $(document).ready(function () {
        $(".shownewx").click(function () {
            $(".showmore").css("right", "-27px");
            $(".bg_gra").fadeIn("slow");
        });
        $(".close_nav").click(function () {
            $(".showmore").css("right", "-110vw");
            $(".bg_gra").fadeOut("slow");
        });
        $(".menu li.m1").hover(function () {
            $(this).find(".mini_menu").addClass("show");
        }, function () {
            $(this).find(".mini_menu").removeClass("show");
        });
    });
</script>


<script src="/assets/frontend/{{theme('')->theme_key}}/lib/lazysizes.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert/sweetalert.min.js"></script>

<button type="button" class="btn btn-danger btn-floating btn-lg ripple-surface" id="btn-back-to-top" style="display: none; min-width: 45px;z-index: 999">
    <i class="fas fa-arrow-up"></i>
</button>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('.c-layout-header-fixed').removeClass('fixtop');
            $('.c-layout-header-fixed').addClass('fixscroll');
            $("#btn-back-to-top").show();
        } else {
            $('.c-layout-header-fixed').removeClass('fixscroll');
            $('.c-layout-header-fixed').addClass('fixtop');
            $("#btn-back-to-top").hide();
        }
    });
    $("#btn-back-to-top").click(function(){
        document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
    });
</script>
<style>
    .fixscroll header{position: fixed;
        width: 100%;
        z-index: 9999;}
    #btn-back-to-top{display: block;
        min-width: 45px;
        position: fixed;
        bottom: 100px;
        right: 30px;}
</style>


</body>
</html>
