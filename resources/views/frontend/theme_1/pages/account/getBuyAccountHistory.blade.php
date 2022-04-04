@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('content')

    <div class="account">
        <div class="account_content">
            <div class="container">
                @include('frontend.'.theme('')->theme_key.'.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>TÀI KHOẢN ĐÃ MUA</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form class="form-charge form-charge__accountls account_content_transaction_history__v2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Mã tài khoản #</span>
                                        <input type="text" name="serial" class="form-control serial" placeholder="Mã tài khoản">

                                    </div>
                                </div>
                                @if(isset($datacategory) && count($datacategory) > 0)
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span >Game</span>
                                            <select name="key" class="form-control key">
                                                <option value="">--Tất cả game--</option>
                                                @foreach($datacategory as $val)
                                                    <option value="{{ $val->slug }}">{{ $val->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Trạng thái</span>

                                        {{Form::select('status',array(''=>'-- Chọn trạng thái --')+config('module.acc.status'),old('status', isset($data['status']) ? $data['status'] : null),array('class'=>'form-control status'))}}

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_start">
                                        <span class="input-group-btn input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon started_at" name="started_at" autocomplete="off" placeholder="Từ ngày">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_end">
                                        <span class="input-group-btn input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon ended_at" name="ended_at" autocomplete="off" placeholder="Đến ngày">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Giá tiền</span>

                                        {{Form::select('price',array(''=>'-- Chọn giá tiền --')+config('module.acc.price'),old('price', isset($data['price']) ? $data['price'] : null),array('class'=>'form-control price'))}}

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 item_buy_form_search">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <button type="submit" class="btn">Tìm kiếm</button>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-all">Tất cả</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row justify-content-end">
                                                <div class="col-auto">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Sắp xếp theo</span>
                                                        <select type="text" name="sort_by" class="form-control sort_by">
                                                            <option value="">Chọn cách sắp xếp</option>
                                                            <option value="random">Ngẫu nhiên</option>
                                                            <option value="price_start">Giá tiền từ cao đến thấp</option>
                                                            <option value="price_end">Giá tiền từ thấp đến cao</option>
                                                            <option value="published_at">Ngày Mua</option>
                                                            <option value="created_at_start">Mới nhất</option>
                                                            <option value="created_at_end">Cũ nhất</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div id="data_pay_account_history">
                            @include('frontend.'.theme('')->theme_key.'.pages.account.function.__get__buy__account__history')
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taikhoandamua_password" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog__account" role="document">
            <div class="modal-content">
{{--                <form method="POST" action="https://shopas.net/tran/acc/check-login" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input name="_token" type="hidden" value="TkYiSW8lPp6mOiMTVAL5A0locI6Mt9FIUy574w57">--}}
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight: 600">Xác nhận mua tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="form-horizontal form__show__chitiet">
{{--                        <div class="form-group m-t-10 row">--}}
{{--                            <label class="col-md-3 control-label"><b>Tài khoản:</b></label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input class="form-control c-square c-theme" type="text" placeholder="Tài khoản" readonly="" value="longtest">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="form-group m-t-10 row">--}}
{{--                            <label class="col-md-3 control-label"><b>Mật khẩu:</b></label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="input-group c-square">--}}
{{--                                    <input type="text" style="color: transparent" class="form-control c-square c-theme show_password" name="password" id="password" placeholder="Mật khẩu" readonly value="longtest" >--}}
{{--                                    <span class="input-group-btn">--}}
{{--                                        <button class="btn btn-default c-font-dark copy_acc" type="button" id="getpass">Copy</button>--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                                <span class="help-block">Click vào nút copy để sao chép mật khẩu hoặc nhấp đúp vào ô mật khẩu để thấy mật khẩu.</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="form-group m-t-10 row">--}}
{{--                            <label class="col-md-3 control-label"><b>Thông tin bổ sung:</b></label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input class="form-control c-square c-theme" type="text" placeholder="Email tài khoản" readonly="" value="long@gmail.com">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="form-group m-t-10 row">--}}
{{--                            <label class="col-md-3 control-label"><b>Mật khẩu email:</b></label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="input-group c-square">--}}
{{--                                    <input type="text" class="form-control c-square c-theme show_password" id="passemail" placeholder="Mật khẩu email" readonly="" value="longtest" >--}}
{{--                                    <span class="input-group-btn">--}}
{{--                                        <button class="btn btn-default c-font-dark copy_acc" type="button" id="getpassemail">Copy</button>--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                                <span class="help-block">Click vào nút copy để sao chép mật khẩu hoặc nhấp đúp vào ô mật khẩu để thấy mật khẩu.</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="form-group m-t-10 row">--}}
{{--                            <label class="col-md-3 control-label"><b>T.tin bổ sung:</b></label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <textarea rows="4" class="form-control c-square c-theme" type="text" placeholder="Thông tin bổ sung" readonly="" >#090909#0909090#09090909#0909090#090909#41414141</textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <p class="c-font-bold c-font-blue" style="font-size: 16px;font-weight: bold;color: blue">--}}
{{--                            Đã lấy mật khẩu lần đầu tiên lúc: 01/04/2022 17:53:30--}}
{{--                        </p>--}}
{{--                        <div class="alert alert-info c-font-dark">--}}
{{--                            Sau khi nhận tài khoản mật khẩu bạn hãy thực hiện đổi mật khẩu để bảo mật.<br>--}}
{{--                            Bạn hãy click truy cập đường dẫn sau để chuyển qua trang đổi mật khẩu.<br>--}}
{{--                            <a class="c-font-bold c-font-red" target="_blank" href="#" style="color: red;font-weight: bold">Đăng nhập và Đổi mật khẩu game Nick Free Fire Giá Rẻ</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
{{--                </form>--}}
            </div>
        </div>
    </div>
    <style>
        #taikhoandamua_password .modal-dialog {
            max-width: 600px;
        }

        #taikhoandamua_password .copy_acc {
            border: 1px solid #d0d7de;
        }

    </style>
    <input type="hidden" name="serial_data" class="serial_data" value="">
    <input type="hidden" name="key_data" class="key_data" value="">
    <input type="hidden" name="price_data" class="price_data" value="">
    <input type="hidden" name="status_data" class="status_data" value="">
    <input type="hidden" name="started_at_data" class="started_at_data" value="">
    <input type="hidden" name="ended_at_data" class="ended_at_data" value="">
    <input type="hidden" name="hidden_page" id="hidden_page_service" class="hidden_page_service" value="1" />
    <input type="hidden" name="chitiet_data" class="chitiet_data" value="0" />
    <input type="hidden" name="sort_by_data" class="sort_by_data" value="">
    <input type="hidden" name="id_data" class="id_data" value="">

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/acc-history.js"></script>

@endsection
