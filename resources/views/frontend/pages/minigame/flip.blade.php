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
                    <div class="row">

                        @for ($i = 0; $i < count($result->group->items); $i++)
                            <div class='flipimg col-6 col-sm-4 col-lg-4 flip-box'>
                                <div data-inner=" inner{{$i}}" style="padding: 0">
                                    <img class="imgnen" src="{{config('api.url_media').$result->group->params->image_static}}">
                                    <img data-inner="inner{{$i}}" class="flip-box-front inner{{$i}}" src="{{config('api.url_media').$result->group->params->image_static}}">
                                </div>
                            </div>
                        @endfor

                        <div class="flipimg col-6 col-sm-4 col-lg-4  flip-box">
                            <div class="item_flip_inner">
                                <img src="./assets/frontend/image/flip_img.png" alt="">
                                <img src="./assets/frontend/image/flip_img.png" class="item_flip_inner_image" alt="">
                            </div>
                        </div>
                        <div class="flipimg col-6 col-sm-4 col-lg-4  flip-box">
                            <div class="item_flip_inner">
                                <img src="./assets/frontend/image/flip_img.png" alt="">
                                <img src="./assets/frontend/image/flip_img.png" class="item_flip_inner_image" alt="">
                            </div>
                        </div>
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
                        <a href="#" class="btn btn-success thele" data-toggle="modal" data-target="#theleModal">
                            Thể lệ
                        </a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#topquaythuongModal">
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
                    <a class="item_spin_list_more"><i class="fas fa-arrow-down"></i> Xem thêm</a>
                    <a  class="item_spin_list_less"><i class="fas fa-arrow-down"></i> Ẩn bớt</a>
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


<!--    popup-->
<div class="modal fade bd-example-modal-lg" id="topquaythuongModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p>Bảng xếp hạng vòng quay</p>
                <!--                    <h4 style="text-transform: uppercase;margin: auto; padding-left: 28px;" class="modal-title"><span>Bảng xếp hạng vòng quay</span></h4>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="tap1" class="rank-modal-tab">
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a id="tap1-tab-1" role="tab" aria-controls="tap1-pane-1" aria-selected="true" href="#"><span>Hôm nay</span></a></li>
                        <li role="presentation" class=""><a id="tap1-tab-2" role="tab" aria-controls="tap1-pane-2" tabindex="-1" aria-selected="false" href="#"><span>7 ngày qua</span></a></li>
                        <li role="presentation" class=""><a id="tap1-tab-3" role="tab" aria-controls="tap1-pane-3" tabindex="-1" aria-selected="false" href="#"><span>Quà đua Top</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tap1-pane-1" aria-labelledby="tap1-tab-1" role="tabpanel" aria-hidden="false" class="tab-pane active in">
                            <div>
                                
                                @if(count($result->top_current_day)>0)
                                <div class="top-info-section">
                                    <img src="/assets/frontend/image/icon-user.png" class="" alt="top donate"><img src="/assets/frontend/image/no1_top_list.png" class="background-top1" alt="s">
                                    <p style="margin-top: 25px;"><span><a href="#" target="_blank" style="font-weight: bold;" rel="noopener noreferrer">
                       {{$result->top_current_day[0]->author->username}}</a></span></p>
                                    <p style="font-weight: bold;font-size:15px">{{$result->top_current_day[0]->numwheel}} lượt quay</p>
                                </div>
                                @endif
                                @if(count($result->top_current_day)>1)
                                <ul class="rank-list">
                                    @foreach($result->top_current_day as $item)
                                    @if($loop->index>0)
                                    <li>
                                        <div class="pull-left">
                                            <p class="pull-left" style="width: 25px;">#2</p>
                                            <div class="avt avt-xs"><img src="https://shopas.net/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
                                            <p class="name-player-review hidden-over-name color-vip-1">{{$item->author->username}}</p>
                                        </div>
                                        <p class="pull-right" style="margin-right: 0px;float: right">{{$item->numwheel}} lượt</p>
                                        <div class="clearfix"> </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div id="tap1-pane-2" aria-labelledby="tap1-tab-2" role="tabpanel" aria-hidden="true" class="tab-pane">
                            <div>
                                @if(count($result->top_30_day)>0)
                                <div class="top-info-section">
                                    <img src="/assets/frontend/image/icon-user.png" class="" alt="top donate"><img src="/assets/frontend/image/no1_top_list.png" class="background-top1" alt="s">
                                    <p style="margin-top: 25px;"><span><a href="#" target="_blank" style="font-weight: bold;" rel="noopener noreferrer">
                       {{$result->top_30_day[0]->author->username}}</a></span></p>
                                    <p style="font-weight: bold;font-size:15px">{{$result->top_30_day[0]->numwheel}} lượt quay</p>
                                </div>
                                @endif
                                @if(count($result->top_30_day)>1)
                                <ul class="rank-list">
                                    @foreach($result->top_30_day as $item)
                                    @if($loop->index>0)
                                    <li>
                                        <div class="pull-left">
                                            <p class="pull-left" style="width: 25px;">#2</p>
                                            <div class="avt avt-xs"><img src="/assets/frontend/image/icon-user.png" class="avt-img" alt="player duo"></div>
                                            <p class="name-player-review hidden-over-name color-vip-1">{{$item->author->username}}</p>
                                        </div>
                                        <p class="pull-right" style="margin-right: 0px;float: right">{{$item->numwheel}} lượt</p>
                                        <div class="clearfix"> </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div id="tap1-pane-3" aria-labelledby="tap1-tab-3" role="tabpanel" aria-hidden="true" class="tab-pane">
                            <div class="content-qdt">
                                {!!$result->group->params->phanthuong!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@foreach(config('constants.'.'game_type') as $item => $key)
    <input type="hidden" id="withdrawruby_{{$item}}" value="{{$key}}">
@endforeach
<meta name="csrf-token" content="{{ csrf_token() }}">

<style type="text/css">
    .boxflip .active {
      animation: rotation 100ms infinite linear; 
    }
    .boxflip .tran {
        opacity: 0!important; 
    }

    @keyframes rotation {
      100%{ transform:rotatey(360deg); }
    }
</style>
<script type="text/javascript">
    var numrollbyorder = 0;
    document.addEventListener('touchmove', function (event) {
      if (event.scale !== 1) { event.preventDefault(); }
    }, false);    
    var lastTouchEnd = 0;
    document.addEventListener('touchend', function (event) {
      var now = (new Date()).getTime();
      if (now - lastTouchEnd <= 300) {
        event.preventDefault();
      }
      lastTouchEnd = now;
    }, false);

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

$(document).ready(function(e){
    initial();
    var typeRoll = "real";
    $('.play').click(function(){
        roll_check = true;
        $('.continue').parent().hide();
        $('.num-play-try').parent().hide();
        typeRoll = "real";
        $('.boxflip img.flip-box-front').each(function(){
            $(this).attr('src','{{config('api.url_media').$result->group->params->image_static}}');
        })
        $('.boxflip img.flip-box-front').addClass('img_remove');
        $(this).parent().hide();
    })
    $('.num-play-try').click(function(){
        roll_check = true;
        $('.play').parent().hide();
        $('.continue').parent().hide();
        typeRoll = "try";
        $('.boxflip img.flip-box-front').each(function(){
            $(this).attr('src','{{config('api.url_media').$result->group->params->image_static}}');
        })
        $('.boxflip img.flip-box-front').addClass('img_remove');
        $(this).parent().hide();
    })
    function initial(){
        $.ajax({
            url: '/rubyflip-roll-list',
            datatype:'json',
            data:{
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: '{{$result->group->id}}'
                
            },
            type: 'post',
            success: function (data) {
                if(data.msg.length>0){
                    gift_list = data.msg;
                    gift_list = shuffle(gift_list);
                    var i=0;
                    $('.boxflip img.flip-box-front').each(function(){
                        $(this).attr('src','/storage'+gift_list[i].image);
                        i++;
                    })
                }
            },
            error: function(){
                $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                $('#noticeModal').modal('show');
            }
        })
    }
    var saleoffpass = "";
    var saleoffmessage = ""; 
    var gift_revice=""; 
    var userpoint = 0;
    var roll_check = true;
    var num_loop = 4;
    var angle_gift = '';
    var num_gift = '{{count($result->group->items)}}';
    var gift_detail = '';
    var gift_list = '';
    var num_roll_remain = 0;
    var angles = 0;
    var free_wheel = 0;
    var arrDiscount = '';
    //Click nút quay
    $('body').delegate('.img_remove', 'click', function(){
        $('.boxflip .flip-box-front').removeClass('img_remove');
        $('.boxflip .flip-box-front').removeClass('active');
        $('.boxflip .flip-box-front').addClass('noactive');
        saleoffpass = $("#saleoffpass").val(); 
        $(this).removeClass('noactive');
        $(this).addClass('active');
        if(roll_check){
            roll_check = false;
            $.ajax({
                url: '/rubyflip-roll',
                datatype:'json',
                data:{
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: '{{$result->group->id}}',
                    numrollbyorder: numrollbyorder,
                    typeRoll : typeRoll,
                    saleoffpass:saleoffpass,
                    numrolllop:1,
                },
                type: 'post',
                success: function (data) {
                    gift_detail = data.msg;
                    setTimeout(function(){
                        $('.boxflip .active').attr('src','/storage'+gift_detail.image);
                        $('.boxflip .active').css({'transform': 'rotateY(180deg)'});
                        $('.boxflip .active').prev().addClass('transparent');
                        $('.boxflip .active').parent().css({'transform': 'rotateY(180deg)'});
                        $('.boxflip .flip-box-front').prev().removeClass('tran');
                        $('.boxflip .flip-box-front').removeClass('active');
                    },1000)
                    if(data.status=='ERROR'){
                        if(data.msg == 'Bạn đã hết lượt quay. Nạp thêm để quay tiếp!')
                        {
                            roll_check = true;
                            $('#naptheModal').modal('show')
                            return;
                        }
                        else
                        {
                            $('.content-popup').text(data.msg);
                            $('.play').parent().hide();
                            $('.num-play-try').parent().hide();
                            $('#noticeModal').modal('show');
                            $('.continue').parent().show();
                             return;
                        }
                       
                    }
                    if(data.status=='LOGIN'){
                        roll_check = true;
                        $('#loginModal').modal('show')
                        return;
                    }
                    numrollbyorder = parseInt(data.numrollbyorder) + 1;
                    free_wheel = data.free_wheel;
                    gift_list = data.listgift;
                    arrDiscount = data.arrDiscount;
                    gift_list = shuffle(gift_list);
                        userpoint = data.userpoint;
                        $(".progress .bar").css("width",data.userpoint+"%")
                        $(".persion_ppt").html(data.userpoint+"/100 point");
                        $("#saleoffpass").val("");
                        saleoffmessage = data.saleMessage;
                        $('.content-popup').html('');
                        if(userpoint > 99)
                        {
                        getgifbonus();
                        }

                    setTimeout(function(){
                        var i=0;
                        $('.boxflip img.noactive').each(function(){
                                $(this).attr('src','/storage'+gift_list[i].image);
                                $(this).css({'transform': 'rotateY(180deg)'});
                                $(this).prev().addClass('transparent');
                                $(this).parent().css({'transform': 'rotateY(180deg)'});
                                i++;
                        })
                    }, 1500)
                    
                    num_roll_remain = gift_detail.num_roll_remain;

                    $("#btnWithdraw").show();
                    if(gift_detail.locale == 1)
                    {
                        $("#btnWithdraw").hide();
                    }
                    else
                    {
                        if(gift_detail.input_auto == 0)
                        {
                            $("#btnWithdraw").html($("#withdrawruby_"+gift_detail.is_ruby).val());
                            $("#btnWithdraw").attr('href','/user/withdrawruby/'+gift_detail.is_ruby +"?withdraw_type=0");
                        }
                        else if(gift_detail.input_auto == 1)
                        {
                            $("#btnWithdraw").html("Kiểm tra nick trúng");
                            $("#btnWithdraw").attr('href','/slotmachine/logaccgame/'+'{{$result->group->id}}');
                        }
                        else if(gift_detail.input_auto == $("#ID_NROCOIN").val())
                        {
                            $("#btnWithdraw").html("Rút vàng");
                            $("#btnWithdraw").attr('href','/user/withdrawservice/'+$("#ID_NROCOIN").val()+"?withdraw_type=0");
                        }
                        else if(gift_detail.input_auto == $("#ID_NROGEM").val())
                        {
                            $("#btnWithdraw").html("Rút ngọc");
                            $("#btnWithdraw").attr('href','/user/withdrawservice/'+$("#ID_NROGEM").val()+"?withdraw_type=0");
                        }
                        else if(gift_detail.input_auto == $("#ID_NINJAXU").val())
                        {
                            $("#btnWithdraw").html("Rút xu");
                            $("#btnWithdraw").attr('href','/user/withdrawservice/'+$("#ID_NINJAXU").val()+"?withdraw_type=0");
                        }
                        else if(gift_detail.input_auto == 2){
                            $("#btnWithdraw").html("Load lại trang");
                            $("#btnWithdraw").removeAttr("href");
                            $("#btnWithdraw").addClass('reLoad');
                        }else
                        {
                            $("#btnWithdraw").hide();
                        }
                        
                    }
                    $html="";
                    $strDiscountcode="";
                    if(arrDiscount != "")
                    {
                        $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount+"</b></span>";
                    }
                    if(typeRoll == "real")
                    {
                        if(saleoffmessage.length > 0)
                        {
                            $html +="<span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                        }
                        $html +='Kết quả: '+gift_detail.name+$strDiscountcode;
                        $('.content-popup').html($html);
                    }
                    else
                    {
                        if(saleoffmessage.length > 0)
                        {
                            $html +="<span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                        }
                        $html +='Kết quả chơi thử: '+gift_detail.name+$strDiscountcode;
                        $('.content-popup').html($html);
                    }
                    if(free_wheel < 1)
                        {
                            $('.num-play-free').hide();
                        }
                    else{
                        $('.num-play-free').html("(Bạn còn " + free_wheel + " lượt quay miễn phí)");
                    }
                    setTimeout(function(){
                        $('#noticeModal').modal('show');
                        $('.continue').parent().show();
                        if(typeRoll == "real")
                        {
                            $('.num-play-try').parent().show();
                            $('.continue span span').html("Chơi tiếp");
                        }
                        else
                        {
                            $('.play').parent().show();
                            $('.continue span span').html("Chơi thử tiếp");
                        }
                        
                        
                    },2500);
                },
                error: function(){
                    $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                    $('#noticeModal').modal('show');
                    roll_check = true;
                }
            })
        }
    });
    
    
    function getgifbonus()
    {
        $.ajax({
                url: '/minigame-bonus',
                datatype:'json',
                data:{
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: '{{$result->group->id}}'
                },
                type: 'post',
                success: function (data) {
                    if(data.status=='ERROR'){
                        $('.content-popup').append(data.msg);
                        $('#noticeModal').modal('show');
                        return;
                    }
                    $('#noticeModal .nohuthang').append("<div style='color: blue;font-weight: bold;font-size: 22px;'>"+data.msg+" - "+data.arr_gift.title+"</div>");
                    $('#noticeModal').modal('show');
                    $(".progress .bar").css("width",data.userpoint+"%")
                    $(".persion_ppt").html(data.userpoint+"/100 point");
                    $(".progress .bar").removeClass('clickgif');
                    $(".pyro").show();
                    setTimeout(function(){
                        $(".pyro").hide();
                    },6000)
                },
                error: function(){
                    $('.content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                    $('#noticeModal').modal('show');
                }
            })
    }

    $('body').delegate('.reLoad','click',function(){
        location.reload();
    })

    function shuffle(array) {
      var currentIndex = array.length, temporaryValue, randomIndex;
      while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }
      return array;
    }

    $('.continue').click(function(){
        var html = '';
        for (i = 0; i < '{{count($result->group->items)}}'; i++){
            html += `<div class='flipimg col-6 col-sm-4 col-lg-4 flip-box'><div data-inner=" inner`+i+`" class="flip-box-inner inner" style="padding: 0"><img src="{{config('api.url_media').$result->group->params->image_static}}"><img data-inner="inner`+i+`" class="img_remove flip-box-front inner`+i+`" src="{{config('api.url_media').$result->group->params->image_static}}"></div></div>`;
        }
        $('.boxflip').html(html);
        $('.continue').parent().hide();
        $('.play').parent().hide();
        $('.num-play-try').parent().hide();
        roll_check = true;
    });
});

</script>

<script type="text/javascript">
    $( document ).ready(function() {
        $(document).on('scroll',function(){
            if($(window).width() > 1024){
                if ($(this).scrollTop() > 100) {
                    $(".nav-bar-container").css("height","90px");
                    $(".nav-bar-category .nav li a").css("line-height","90px");
                    $("header .nav-bar").css("background-color","rgba(0,0,0,0.5)");
                    $(".nav-bar-brand").css("margin","14px");

                } else {
                    $(".nav-bar-container").css("height","120px");
                    $(".nav-bar-category .nav li a").css("line-height","120px");
                    $(".nav-bar-brand").css("margin","20px 0");
                    $("header .nav-bar").css("background-color","rgba(0,0,0,0.8)");
                }
            }

        });
        $('.item_play_intro_viewmore').click(function(){
            $('.item_play_intro_viewless').css("display","flex");
            $('.item_play_intro_viewmore').css("display","none");
            $(".item_play_intro_content").addClass( "showtext" );
        });
        $('.item_play_intro_viewless').click(function(){
            $('.item_play_intro_viewmore').css("display","flex");
            $('.item_play_intro_viewless').css("display","none");
            $(".item_play_intro_content").removeClass( "showtext");
        });
        $('.item_spin_list_more').click(function(){
            $('.item_spin_list').css("overflow","auto");
            $('.item_spin_list_less').css("display","block");
            $(".item_spin_list_more").css("display","none");
        });
        $('.item_spin_list_less').click(function(){
            $('.item_spin_list').css("overflow","hidden");
            $('.item_spin_list_less').css("display","none");
            $(".item_spin_list_more").css("display","block");
        });
    });
</script>
<script>
    $(".nav-tabs #tap1-tab-1").on("click",function(){
        $(".active").removeClass("active");
        $(this).parents("li").addClass("active");
        $(".tab-pane").hide();
        $("#tap1-pane-1").show();
    })
    $(".nav-tabs #tap1-tab-2").on("click",function(){
        $(".active").removeClass("active");
        $(this).parents("li").addClass("active");
        $(".tab-pane").hide();
        $("#tap1-pane-2").show();
    })
    $(".nav-tabs #tap1-tab-3").on("click",function(){
        $(".active").removeClass("active");
        $(this).parents("li").addClass("active");
        $(".tab-pane").hide();
        $("#tap1-pane-3").show();

    })
</script>
@endsection
