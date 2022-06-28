@extends('theme_3.frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/breadcrumb.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/withdraw_items.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/layout_page.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/withdraw_items.js"></script>
@endsection
@section('content')
    <div class="container_page container">
        {{--breadcrumb--}}
        <section class="breadcrumb-container">
            <ul class="breadcrumb breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="">Rút vật phẩm</a></li>
            </ul>
        </section>
        <section class="breadcrumb-mobile">
            <a href="/" style="display: block">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/back.svg" alt="">
            </a>
            <h3>Rút vật phẩm</h3>
        </section>
        <div class="row">
            {{--navbar--}}
            @include('frontend.widget.__navbar__profile')
            {{--content--}}
            <div class="col-12 col-lg-9">
                <div class="withdraw-content">
                    <div class="withdraw-header row no-gutters">
                        <div class="col-6">
                            <div class="listed-type listed-type-active">
                                Rút vật phẩm
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="listed-type">
                                Lịch sử
                            </div>
                        </div>
                        <div class="type-listing"></div>
                    </div>
                    <div class="withdraw-body">
                        <div class="withdraw-tab-container">
                            <div class="withdraw-tab">
                                <form class="form-horizontal form-withdraw" method="POST">
                                    {{csrf_field()}}
                                <div class="withdraw-tab-header">
                                    RÚT VẬT PHẨM GAME {{config('constants.game_type.'.$game_type)}}
                                </div>
                                <div class="input-block">
                                    <h6>Chọn loại vật phẩm khác</h6>
                                    <select class="select-primary withdraw-select" id="game_type" name="game_type">
                                        @if(count($result->listgametype)>0)
                                            @foreach($result->listgametype as $item)
                                                <option value="{{route('getWithdrawItem',[$item->parent_id])}}" {{$item->parent_id==$game_type?'selected':''}}>{{$item->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="current-balance">Số {{isset($result->gametype->image)?$result->gametype->image:'vật phẩm'}} hiện có: <span style="font-weight: 700; color: #F67600;">{{number_format($result->number_item)}}</span></div>
                                </div>
                                <script type="text/javascript">
                                    $("#game_type").change(function(){
                                        window.location.href = $( "select#game_type" ).val();
                                    });
                                </script>
                                <div class="input-block">
                                    <h6>Gói muốn rút</h6>
                                    <select class="select-primary withdraw-select" id="package" name="package">
                                        @if($result->package)
                                            @foreach($result->package as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="input-block">
                                    <h6>{{isset($result->gametype->idkey)?$result->gametype->idkey:'ID trong game:'}}</h6>
                                    <input type="text" name="idgame" class="withdraw-inputs input-primary" placeholder="">
                                </div>
                                @if($result->gametype->position == "Mật Khẩu" || $result->gametype->position == "Mật Khẩu Game")
                                <div class="input-block input-block-password">
                                    <h6>{{isset($result->gametype->position)?$result->gametype->position:'Số điện thoại ( nếu có ):'}}</h6>
                                    <input type="password" name="phone" class="withdraw-inputs input-primary" placeholder="Nhập mật khẩu trong game">
                                    <img class="withdraw-password-hide" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/eye-show.svg" alt="" style="display: none">
                                    <img class="withdraw-password-show" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/eye-hide.svg" alt="">
                                </div>
                                @else
                                    <div class="input-block">
                                        <h6>{{isset($result->gametype->position)?$result->gametype->position:'Số điện thoại ( nếu có ):'}}</h6>
                                        <input type="text" name="phone" class="withdraw-inputs input-primary" placeholder="Nhập số điện thoại">
                                    </div>
                                @endif

                                <div class="input-button">
                                    <button class="button-primary" type="submit" id="btn-confirm">Thực hiện</button>

                                    <script>
                                        $(".form-withdraw").submit(function(){
                                            $("#btn-confirm").prop( "disabled", true);
                                        });
                                    </script>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="history-tab-container" style="display: none">
                            <div class="history-tab-filter">
                                <div class="history-search">
                                    <h6>Tìm kiếm</h6>
                                    <form class="search-form">
                                        <input type="text" class="input-primary" placeholder="Nhập từ khóa" name="">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                        <button class="button-primary">Tìm kiếm</button>
                                    </form>
                                </div>
                                <div class="history-filter">
                                    <p>Bộ lọc</p>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick/filter.png" alt="">
                                    <span class="filter-count" style="display: none">0</span>
                                </div>
                            </div>
                            <div class="current-filter"></div>
                            <div class="history-table-container">
                                <div class="history-table">
                                    <div class="history-head row no-gutters">
                                        <div class="history-head-item item-left col-2">
                                            <p>
                                                Thời gian
                                            </p>
                                        </div>
                                        <div class="history-head-item item-left col-2">
                                            <p>
                                                ID
                                            </p>
                                        </div>
                                        <div class="history-head-item item-right col-3">
                                            <p>
                                                Số vật phẩm
                                            </p>
                                        </div>
                                        <div class="history-head-item item-right col-3">
                                            <p>
                                                Thông báo
                                            </p>
                                        </div>
                                        <div class="history-head-item item-right col-2">
                                            <p>
                                                Trạng thái
                                            </p>
                                        </div>
                                    </div>
                                    <div class="history-content">
                                        {{-- Empty State of table --}}
                                        {{-- <div class="history-item empty-state row no-gutters">
                                            <p>Tài khoản của quý khách chưa phát sinh giao dịch</p>
                                        </div> --}}
                                        <div class="history-item row no-gutters">
                                            <div class="col-2 history-item-data data-left">
                                                <p>26/04/2021 - 16:05</p>
                                            </div>
                                            <div class="col-2 history-item-data data-left">
                                                <p>#54256453</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>190.000</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>Rút thành công 1000 kim cương</p>
                                            </div>
                                            <div class="col-2 history-item-data data-right">
                                                <span class="status-success">Thành công</span>
                                            </div>
                                        </div>
                                        <div class="history-item row no-gutters">
                                            <div class="col-2 history-item-data data-left">
                                                <p>26/04/2021 - 16:05</p>
                                            </div>
                                            <div class="col-2 history-item-data data-left">
                                                <p>#54256453</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>190.000</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>Rút thành công 1000 kim cương</p>
                                            </div>
                                            <div class="col-2 history-item-data data-right">
                                                <span class="status-success">Thành công</span>
                                            </div>
                                        </div>
                                        <div class="history-item row no-gutters">
                                            <div class="col-2 history-item-data data-left">
                                                <p>26/04/2021 - 16:05</p>
                                            </div>
                                            <div class="col-2 history-item-data data-left">
                                                <p>#54256453</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>190.000</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>Rút thành công 1000 kim cương</p>
                                            </div>
                                            <div class="col-2 history-item-data data-right">
                                                <span class="status-failed">Thất bại</span>
                                            </div>
                                        </div>
                                        <div class="history-item row no-gutters">
                                            <div class="col-2 history-item-data data-left">
                                                <p>26/04/2021 - 16:05</p>
                                            </div>
                                            <div class="col-2 history-item-data data-left">
                                                <p>#54256453</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>190.000</p>
                                            </div>
                                            <div class="col-3 history-item-data data-right">
                                                <p>Rút thành công 1000 kim cương</p>
                                            </div>
                                            <div class="col-2 history-item-data data-right">
                                                <span class="status-success">Thành công</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-pagination-container">
                                <ul class="history-pagination">
                                    <li class="pagination-item disabled">
                                        <a href="#" class="pagination-link">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/pg-back.png" alt="">
                                        </a>
                                    </li>
                                    <li class="pagination-item active">
                                        <a href="#" class="pagination-link">
                                            1
                                        </a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="#" class="pagination-link">
                                            2
                                        </a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="#" class="pagination-link">
                                            3
                                        </a>
                                    </li>
                                    <li class="pagination-item disabled pagination-etc">
                                        <a href="#" class="pagination-link">
                                            ...
                                        </a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="#" class="pagination-link">
                                            14
                                        </a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="#" class="pagination-link">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/pg-next.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade rotation-modal" id="withdrawItemFilter" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header rotation-modal-header">
                    <h5 class="modal-title">Bộ lọc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/close.png" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="filterForm">
                        <div class="filter-input-block">
                            <h5>Loại giao dịch</h5>
                            <select class="select-primary filter-dropdown transaction-type-dropdown" id="transactionTypeInput" name="transaction_type" id="">
                                <option value="" selected disabled>Chọn</option>
                                <option value="0">Rút kim cương</option>
                                <option value="1">Rút abc</option>
                            </select>
                        </div>
                        <div class="filter-input-block">
                            <h5>Trạng thái</h5>
                            <select class="select-primary filter-dropdown transaction-status-dropdown" id="transactionStatusInput" name="transaction_status" id="">
                                <option value="" selected disabled>Chọn</option>
                                <option value="0">Thành công</option>
                                <option value="1">Thất bại</option>
                            </select>
                        </div>
                        <div class="filter-date-block row no-gutters">
                            <div class="col-6">
                                <h5>Từ ngày</h5>
                                <input class="input-primary" id="filterStartDate" type="text" name="start_date" id="" placeholder="Chọn" autocomplete="off" onkeydown="return false">
                                <label for="filterStartDate" class="filter-block-img-left">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/calendar.svg" alt="">
                                </label>                            </div>
                            <div class="col-6 input-date-right" style="text-align: right;">
                                <h5>Đến ngày</h5>
                                <input class="input-primary" id="filterEndDate" type="text" name="end_date" id="" placeholder="Chọn" autocomplete="off" onkeydown="return false">
                                <label for="filterEndDate" class="filter-block-img-right">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/calendar.svg" alt="">
                                </label>
                            </div>
                        </div>
                        <div class="rotation-modal-btn row no-gutters">
                            <div class="col-6">
                                <button class="button-secondary" type="button" id="resetFormBtn">Thiết lập lại</button>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <button class="button-primary" type="submit">Áp dụng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade rotation-modal" id="withdrawResult" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header rotation-modal-header">
                    <h5 class="modal-title">Rút vật phẩm thành công</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/close.png" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="rotation-prize-img">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/verify 1.png" alt="">
                    </div>
                    <div class="rotation-prize-detail">
                        <p>Bạn vừa rút thành công</p>
                        <p><span>100.000</span> kim cương</p>
                    </div>
                    <div class="rotation-modal-btn row no-gutters">
                        <div class="col-6">
                            <button class="button-secondary">
                                <a href="/" style="display: block">
                                    Về trang chủ
                                </a>
                            </button>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <button class="button-primary">
                                <a href="#" style="display: block">
                                    Hỗ trợ
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">

        $("body").delegate(".proccess_toggle","click",function(){
            if($(this).attr('data-msg')!=''){
                $("#proccessModal .modal-body").html($(this).attr('data-msg'));
            }else{
                $("#proccessModal .modal-body").html('Chưa có thông báo tiến độ!');
            }
            $('#proccessModal').modal('show');
        })
    </script>

@endsection

