@extends('frontend.layouts.master')
@section('content')
    <div class="item_play">
        <div class="container">
            <div class="item_play_title">
                <p>{{$result->group->title}}</p>
                <div class="item_play_line"></div>

            </div>
            <div class="item_play_online_out">
                <div class="item_play_online"></div>
                @php
                    echo "Số người đang chơi: ".number_format(rand(100,1000))." (".rand(3,10)." bạn chung)";
                @endphp
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item_spin">
                        <a class="ani-zoom" id="start-played">
                            <img src="{{config('api.url_media').$result->group->image_icon}}" alt="{{$result->group->title}}">
                        </a>
                        <img src="{{config('api.url_media').$result->group->params->image_static}}" alt="{{$result->group->title}}" id="rotate-play">
                    </div>
                    <div class="item_spin_sale-off">
                        <input type="text" readonly="" placeholder="Nhập mã giảm giá">
                    </div>
                    <div class="item_spin_progress">
                        <div class="item_spin_progress_bubble {{$result->pointuser > 99 ? 'clickgif' : ''}}" style="width: {{$result->pointuser<100?$result->pointuser:'100'}}%"></div>
                        <div class="item_spin_progress_percent">{{$result->pointuser}}/100 point</div>
                    </div>
                    <div class="pyro" style="position: absolute;top: 0;left: 0;width: 182px;height: 37px;display:none"><div class="before"></div><div class="after"></div></div>
                    <div class="item_spin_dropdown">
                        <select name="" id="numrolllop">
                                <option value="1">Mua X1/{{$result->group->price/1000}}k 1 lần quay</option>
                            @if($result->group->params->price_sticky_3 > 0))
                                <option value="3">Mua X3/{{$result->group->params->price_sticky_3/1000}}k 1 lần quay</option>
                            @endif
                            @if($result->group->params->price_sticky_5 > 0))
                                <option value="5">Mua X5/{{$result->group->params->price_sticky_5/1000}}k 1 lần quay</option>
                            @endif
                            @if($result->group->params->price_sticky_7 > 0))
                                <option value="7">Mua X7/{{$result->group->params->price_sticky_7/1000}}k 1 lần quay</option>
                            @endif
                            @if($result->group->params->price_sticky_10 > 0))
                                <option value="10">Mua X10/{{$result->group->params->price_sticky_10/1000}}k 1 lần quay</option>
                            @endif
                        </select>
                    </div>
                    <div class="item_spin_num_play">
                        Giá {{number_format($result->group->price)}}/lượt chơi
                    </div>

                    <div class="item_play_try">
                        @if($result->group->params->is_try == 1)
                        <a class="btn btn-primary num-play-try">Chơi thử</a>
                        @endif
                        <a class="btn btn-success" id="start-played"><i class="fas fa-bolt"></i> Quay ngay</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item_spin_category">
                        <a href="#" class="btn btn-success thele">
                            Thể lệ
                        </a>
                        <a href="#" class="btn btn-success">
                           Top quay thưởng
                        </a>
                        <a href="{{route('getWithdrawItem').'?game_type='.$result->group->params->game_type}}" class="btn btn-success">
                            Rút Vip
                        </a>
                        <a href="{{route('getLog',[$result->group->id])}}" class="btn btn-success">
                            Lịch sử quay
                        </a>

                    </div>
                    <div class="item_spin_title">
                        <p>Lượt quay gần đây</p>
                    </div>
                    <div class="item_spin_list">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Tài khoản</th>
                                    <th>Giải thưởng</th>
                                    <th>Thời gian</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($result->log as $item)
                                    <tr>
                                        <th>{{$item->author->username}}</th>
                                        <th>{{$item->item_ref->title}}</th>
                                        <th>{{\Carbon\Carbon::parse($item->created_at)->format('Y-m-d H:i')}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if($groups_other!=null)
            <div class="item_play_title">
                <p>Các vòng quay khác</p>
                <div class="item_play_line"></div>

            </div>
            <div class="item_play_dif">
                <div class="row" style="position: relative">
                    <div class="col-12 item_play_dif_slide" >
                        <div class="swiper-container item_play_dif_slide_detail">
                            <div class="swiper-wrapper">
                                @foreach($groups_other as $item)
                                <div class="swiper-slide" >
                                    <div class="item_play_dif_slide_detail_in">
                                        <div class="item_play_dif_slide_img">
                                            <a href="{{route('getIndex',[$item->slug])}}">
                                                <img src="{{config('api.url_media').$item->image}}" alt="{{$item->title}}"  class="img-fluid swiper-lazy item_play_dif_slide_img_main">
                                                @if(isset($item->params->image_percent_sale) && $item->params->image_percent_sale!=null)
                                                <img src="{{config('api.url_media').$item->params->image_percent_sale}}" alt="{{$item->title}}" class="item_play_dif_slide_img_sale">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="item_play_dif_slide_title">
                                            <p><strong>{{$item->title}}</strong></p>
                                        </div>
                                        <div class="item_play_dif_slide_description">
                                            <div class="countime"> </div>
                                            <p>Đã quay: 388</p>
                                            <span class="item_play_dif_slide_description-old-price">{{number_format($item->price*100/80)}}đ</span>
                                            <span class="item_play_dif_slide_description-new-price">{{number_format($item->price)}}đ</span>
                                        </div>
                                        <div class="item_play_dif_slide_more">
                                            <div class="item_play_dif_slide_more_view" >
                                                <a href="{{route('getIndex',[$item->slug])}}">
                                                    @if(isset($item->params->image_percent_sale) && $item->params->image_percent_sale!=null)
                                                    <img src="{{config('api.url_media').$item->params->image_view_all}}"  alt="{{$item->title}}">
                                                    @else
                                                    Quay ngay
                                                    @endif
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="item_play_intro ">
                <div class="item_play_intro_content">
                    {!!$result->group->content!!}
                </div>
                <span class="item_play_intro_viewmore">Xem tất cả »</span>
                <span class="item_play_intro_viewless">Thu gọn »</span>
            </div>
        </div>
    </div>

<div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                {!! $result->group->params->thele !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="middle nohuthang" style="text-align: center;padding: 15px 0;"></div>
            <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">

            </div>
            <div class="modal-footer">
                <a href="#" id="btnWithdraw" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill" >Rút quà</a>
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="naptheModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                Bạn đã hết lượt chơi. Nạp thẻ để chơi tiếp!               
            </div>
            <div class="modal-footer">
                <a href="/nap-the" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill" >Nạp thẻ</a>
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@foreach(config('constants.'.'game_type') as $item => $key)
    <input type="hidden" id="withdrawruby_{{$item}}" value="{{$key}}">
@endforeach
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
    });

    function animate(options) {
        var start = performance.now();
        requestAnimationFrame(function animate(time) {
            var timeFraction = (time - start) / options.duration;
            if (timeFraction > 1) timeFraction = 1;
            var progress = options.timing(timeFraction)
            options.draw(progress);
            if (timeFraction < 1) {
                requestAnimationFrame(animate);
            }
        });
    }

    $(document).ready(function(e) {

        var saleoffpass = "";
        //var saleoffmessage = "";
        var userpoint = 0;
        var numrollbyorder = 0;
        var roll_check = true;
        var num_loop = 4;
        var angle_gift = '';
        var num_gift = '{{count($result->group->items)}}';
        var gift_detail = '';
        var num_roll_remain = 0;
        var angles = 0;
        var arrxgt;
        var typeRoll = "real";
        var free_wheel = 0;
        var value_gif_bonus = '';
        var msg_random_bonus = '';
        //var arrDiscount = '';
        //Click nút quay
        $('body').delegate('#start-played', 'click', function() {
            if (roll_check) {
                fakeLoop();
                roll_check = false;
                saleoffpass = $("#saleoffpass").val();
                typeRoll = "real";
                numrolllop = $("#numrolllop").val();
                $.ajax({
                    url: '/minigame-play',
                    datatype: 'json',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: '{{$result->group->id}}',
                        numrolllop: numrolllop,
                        numrollbyorder: numrollbyorder,
                        typeRoll: typeRoll,
                        saleoffpass: saleoffpass,
                    },
                    type: 'POST',
                    success: function(data) {                        
                        if (data.status == 4) {                            
                            location.href='/login';
                        } else if (data.status == 3) {
                            $('#naptheModal').modal('show')
                            return;
                        } else if (data.status == 0) {
                            roll_check = true;
                            $('#rotate-play').css({
                                "transform": "rotate(0deg)"
                            }); 
                            $('.content-popup').text(data.msg);
                            $('#noticeModal').modal('show');
                            return;
                        }
                        numrollbyorder = parseInt(data.numrollbyorder) + 1;
                        gift_detail = data.gift_detail;
                        gift_revice = data.arr_gift;
                        //arrDiscount = data.arrDiscount;
                        arrxgt = data.xgt;
                        if (data.xgt > 0) {
                            xvalue = data.xgt[data.xgt.length - 1];
                        } else {
                            xvalue = 0;
                        }


                        value_gif_bonus = data.value_gif_bonus;
                        msg_random_bonus = data.msg_random_bonus;
                        xvalueaDD = data.xValue;
                        free_wheel = data.free_wheel;
                        num_roll_remain = gift_detail.num_roll_remain;
                        $('#rotate-play').css({
                            "transform": "rotate(0deg)"
                        });
                        angles = 0;
                        angle_gift = gift_detail.order * (360 / num_gift);
                        loop();

                        userpoint = data.userpoint;
                        if(userpoint<100){
                            $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                        }else{
                            $(".item_spin_progress_bubble").css("width", "100%");
                            $(".item_spin_progress_bubble").addClass('clickgif');
                        }
                        $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                        $("#saleoffpass").val("");
                        //saleoffmessage = data.saleMessage;

                    },
                    error: function() {
                        $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                        $('#noticeModal').modal('show');
                    }
                })
            }
        });


        function getgifbonus() {
            $.ajax({
                url: '/minigame-bonus',
                datatype: 'json',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: '{{$result->group->id}}',
                },
                type: 'POST',
                success: function(data) {
                    if (data.status == 0) {
                        $('.content-popup').text(data.msg);
                        $('#noticeModal').modal('show');
                        return;
                    }
                    $('#noticeModal .content-popup').append("<div style='color:blue'>" + data.msg + " - " + data.arr_gift[0].title + "</div>");
                    //$("#noticeModalNoHu #btnWithdraw").hide();
                    $('#noticeModal').modal('show');
                    var userpoint = data.userpoint;
                    if(userpoint<100){
                        $(".item_spin_progress_bubble").css("width", data.userpoint + "%");
                        $(".item_spin_progress_bubble").removeClass('clickgif');
                    }else{
                        $(".item_spin_progress_bubble").css("width", "100%");
                        $(".item_spin_progress_bubble").addClass('clickgif');
                    }
                    $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                    $(".pyro").show();
                    setTimeout(function(){
                        $(".pyro").hide();
                    },6000)
                },
                error: function() {
                    $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                    $('#noticeModal').modal('show');
                }
            })
        }


        $('body').delegate('.num-play-try', 'click', function() {
            if (roll_check) {
                fakeLoop();
                roll_check = false;
                typeRoll = "try";
                //saleoffpass = $("#saleoffpass").val();
                numrolllop = $("#numrolllop").val();
                $.ajax({
                    url: '/minigame-play',
                    datatype: 'json',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: '{{$result->group->id}}',
                        numrolllop: numrolllop,
                        numrollbyorder: numrollbyorder,
                        typeRoll: typeRoll,
                        //saleoffpass: saleoffpass,
                    },
                    type: 'post',
                    success: function(data) {                                             
                        if (data.status == 4) {                            
                            location.href='/login';
                        } else if (data.status == 0) {
                            roll_check = true;
                            $('#rotate-play').css({
                                "transform": "rotate(0deg)"
                            });
                            $('.content-popup').text(data.msg);
                            $('#noticeModal').modal('show');
                            return;
                        }
                        numrollbyorder = parseInt(data.numrollbyorder) + 1;
                        gift_detail = data.gift_detail;
                        gift_revice = data.arr_gift;
                        //arrDiscount = data.arrDiscount;
                        arrxgt = data.xgt;
                        if (data.xgt > 0) {
                            xvalue = data.xgt[data.xgt.length - 1];
                        } else {
                            xvalue = 0;
                        }
                        value_gif_bonus = data.value_gif_bonus;
                        msg_random_bonus = data.msg_random_bonus;
                        xvalueaDD = data.xValue;
                        free_wheel = data.free_wheel;
                        num_roll_remain = gift_detail.num_roll_remain;
                        $('#rotate-play').css({
                            "transform": "rotate(0deg)"
                        });
                        angles = 0;
                        angle_gift = gift_detail.order * (360 / num_gift);
                        loop();
                    },
                    error: function() {
                        $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                        $('#noticeModal').modal('show');
                    }
                })
            }
        });

        var goc = 0;

        function fakeLoop(){            
            $('#start-played img').css({
                "transform": "rotate(" + goc + "deg)"
            });

            if ((parseInt(goc) + 10) >= (((num_loop * 360) + angle_gift))) {
                goc = parseInt(goc) + 2;
            } else {
                goc = parseInt(goc) + 10;
            }
            if (goc <= ((num_loop * 360))) {
                requestAnimationFrame(fakeLoop);
            }else{
                $('#start-played img').css({
                    "transform": "rotate(0deg)"
                });
            }
        }


        function loop() {
            $('#rotate-play').css({
                "transform": "rotate(" + angles + "deg)"
            });

            if ((parseInt(angles) - 10) <= -(((num_loop * 360) + angle_gift))) {
                angles = parseInt(angles) - 2;
            } else {
                angles = parseInt(angles) - 10;
            }

            if (angles >= -((num_loop * 360) + angle_gift)) {
                requestAnimationFrame(loop);
            } else {
                roll_check = true;

                $("#btnWithdraw").show();
                if (gift_detail.winbox == 0) {
                    $("#btnWithdraw").hide();
                } else {
                    if (gift_detail.gift_type == 0) {
                        $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                        $("#btnWithdraw").attr('href', '/withdrawitem?game_type=' + gift_detail.game_type);
                    } else if (gift_detail.gift_type == 1) {
                        $("#btnWithdraw").html("Kiểm tra nick trúng");
                        $("#btnWithdraw").attr('href', '/logaccgame?id=' + '{{$result->group->id}}');
                    // } else if (gift_detail.gift_type == 'nrocoin') {
                    //     $("#btnWithdraw").html("Rút vàng");
                    //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                    // } else if (gift_detail.gift_type == 'nrogem') {
                    //     $("#btnWithdraw").html("Rút ngọc");
                    //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                    // } else if (gift_detail.gift_type == 'nroxu') {
                    //     $("#btnWithdraw").html("Rút xu");
                    //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                    } else if (gift_detail.gift_type == 2) {
                        $("#btnWithdraw").html("Load lại trang");
                        $("#btnWithdraw").removeAttr("href");
                        $("#btnWithdraw").addClass('reLoad');
                    } else {
                        $("#btnWithdraw").hide();
                    }

                }
                if (gift_revice.length > 0) {
                    $html = "";
                    $strDiscountcode="";
                    // if(saleoffmessage.length > 0)
                    // {
                    //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                    // }
                    
                    if(typeRoll == "real")
                    {
                        if(gift_revice.length == 1)
                        {
                                // if(arrDiscount[0] != "")
                                // {
                                //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                // }
                                $html += "<span>Kết quả: "+gift_revice[0]["title"]+"</span><br/>";
                                if(gift_detail.winbox == 1){
                                    $html += "<span>Mua X1: Nhận được "+gift_revice[0]["params"]['value']+"</span><br/>";
                                    //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["params"]["value"]*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                    $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["params"]["value"])*(parseInt(xvalueaDD[0]))+"</span>";
                                }
                        }
                        else
                        {
                            $totalRevice = 0;
                            $html += "<span>Kết quả: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt quay.</span><br/>";
                            $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                            for($i=0;$i<gift_revice.length;$i++)
                            {
                                // if(arrDiscount[$i] != "")
                                // {
                                //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                // }
                                $html += "<span>Lần quay "+($i + 1)+": "+gift_revice[$i]["title"];
                                if(gift_revice[$i].winbox == 1){
                                    $html +=" - nhận được: "+gift_revice[$i]["params"]["value"]+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["params"]["value"])*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>"+$strDiscountcode+"<br/>";
                                }
                                else
                                {
                                    $html +=""+msg_random_bonus[$i]+"<br/>"+$strDiscountcode+"<br/>";
                                }
                                $totalRevice +=  parseInt(gift_revice[$i]["params"]["value"])*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                            }
                            
                            $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                        }
                    }
                    else
                    {
                        if(gift_revice.length == 1)
                        {
                                $html += "<span>Kết quả chơi thử: "+gift_revice[0]["title"]+"</span><br/>";
                                if(gift_detail.winbox == 1){
                                    $html += "<span>Mua X1: Nhận được "+gift_revice[0]["params"]["value"]+"</span><br/>";
                                    //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["params"]["value"]*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                    $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["params"]["value"])*(parseInt(xvalueaDD[0]))+"</span>";
                                }
                        }
                        else
                        {
                            $totalRevice = 0;
                            $html += "<span>Kết quả chơi thử: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt quay.</span><br/>";
                            $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                            for($i=0;$i<gift_revice.length;$i++)
                            {
                                $html += "<span>Lần quay "+($i + 1)+": "+gift_revice[$i]["title"];
                                if(gift_revice[$i].winbox == 1){
                                    $html +=" - nhận được: "+gift_revice[$i]["params"]["value"]+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["params"]["value"])*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>";
                                }
                                else
                                {
                                    $html +=""+msg_random_bonus[$i]+"<br/>";
                                }
                                $totalRevice +=  parseInt(gift_revice[$i]["params"]["value"])*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                            }
                            
                            $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                        }
                    }
                }

                $('.content-popup').html($html);

                if (userpoint > 99) {
                    getgifbonus();
                }
                $('#noticeModal').modal('show');
                if (free_wheel < 1) {
                    $('.num-play-free').hide();
                } else {
                    $('.num-play-free').html("(Bạn còn " + free_wheel + " lượt quay miễn phí)");
                }
                if (num_roll_remain == 0) {
                    $('.deposit-btn').show();
                } else {
                    $('.deposit-btn').hide();
                }
            }
        }
    });

    $('body').delegate('.reLoad', 'click', function() {
        location.reload();
    })
</script>
@endsection
