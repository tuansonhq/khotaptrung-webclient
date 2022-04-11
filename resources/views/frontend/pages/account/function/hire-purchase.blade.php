{{Form::open(array('method'=>'POST' ,'class'=>'form-horizontal','enctype'=>"multipart/form-data"))}}


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title">Xác nhận trả góp tài khoản</h4>
</div>
<div class="modal-body">
    <div class="c-content-tab-4 c-opt-3" role="tabpanel">
        <ul class="nav nav-justified" role="tablist">
            <li role="presentation" class="active">
                <a href="#step" role="tab" data-toggle="tab" class="c-font-16">Trả góp</a>
            </li>
            <li role="presentation">
                <a href="#info" role="tab" data-toggle="tab" class="c-font-16">Tài khoản</a>
            </li>
            <li role="presentation">
                <a href="#rule" role="tab" data-toggle="tab" class="c-font-16">Quy định trả góp</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="step">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th colspan="2">Thông tin tài khoản #{{$data->id}}</th>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td style="width: 40%">Nhà phát hành:</td>
                                <th>{{$game_provider->title}}</th>
                            </tr>
                            <tr>
                                <td>Tên game:</td>
                                <th>{{isset($data->groups[0]->title)?$data->groups[0]->title:""}}</th>
                            </tr>
                            <tr>
                                <td>Giá tiền:</td>
                                <th class="text-info">{{number_format($data->price)}}đ</th>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="info">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th colspan="2">Chi tiết tài khoản #{{$data->id}}</th>
                            </tr>

                            @if(!is_null($dataAttribute) && count($dataAttribute)>0)

                                @foreach($dataAttribute as $index=>$att)
                                    <tr>
                                        {{--if textbox--}}
                                        @if($att->type_input==1)
                                            <td style="width: 40%">{{$att->title}}:</td>
                                            <td class="text-danger" style="font-weight: 700">{{\App\Library\Helpers::DecodeJson('attribute_id_'.$att->id,$data->params)}}</td>

                                            {{--if select--}}
                                        @elseif($att->type_input==4)

                                            @if(!is_null($att->attribute_value) && count($att->attribute_value))
                                                @foreach($att->attribute_value as $att_value)
                                                    @if($att_value->id==\App\Library\Helpers::DecodeJson('attribute_id_'.$att->id,$data->params))
                                                        <td style="min-width: 120px">{{$att->title}}:</td>
                                                        <td class="text-danger" style="font-weight: 700">{{$att_value->title}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="rule">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <div class="alert alert-info m-t-10">
                            <h2><b>Quy định trả góp
                                    <small>Tài khoản thông tin trắng</small>
                                </b></h2>
                            <ul class="c-content-list-1 c-theme c-separator-dot">
                                <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200,000đ trở lên.</li>
                                <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                <li>Phí trả góp: 0%</li>
                                <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200,000đ. Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40,000đ trong tài khoản)</li>
                                <li>Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label"><b>Trả lần 1:</b></label>
        <div class="col-md-6">
            <p class="form-control c-square c-theme c-theme-static m-b-0">{{number_format(($data->price*20)/100) }}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"><b>Trả lần 2:</b></label>
        <div class="col-md-6">
            <p class="form-control c-square c-theme c-theme-static m-b-0">{{number_format($data->price -(($data->price*20)/100))}}</p>
        </div>
    </div>
    <div class="form-group has-error">
        <label class="col-md-3 control-label"><b>Hoàn tiền:</b></label>
        <div class="col-md-6">
            <p class="form-control c-square c-theme c-theme-static m-b-0" style="color:red;">{{number_format(  (($data->price*20)/100) *20/100  )   }}</p>
            <span class="help-block c-font-bold">Đúng {{\Carbon\Carbon::now()->addDay(8)->startOfDay()->format('d/m/Y H:i:s')}} giao dịch sẽ bị hủy bỏ và hoàn lại tiền.</span>
        </div>
    </div>

    {{--//check mã bảo vệ--}}
    @if(Auth::guard('frontend')->guest())
    @else
        @if(Auth::guard('frontend')->user()->balance<$data->price*20/100)
        @else



            <div class="form-group {{ $errors->has('captcha')? 'has-danger':'' }}">
                <label class="col-md-3 form-control-label">Mã bảo vệ:</label>
                <div class="col-md-7">
                    <div class="input-group">
                                <span class="input-group-addon" style="padding: 1px;">
                                    <img src="{{captcha_src('flat')}}" height="30px" id="imgcaptcha" onclick="document.getElementById('imgcaptcha').src ='{{captcha_src('flat')}}'+Math.random();document.getElementById('captcha').focus();">
                                </span>
                        <input type="text" class="form-control c-square" id="captcha" name="captcha" placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                    </div>
                </div>
                @if($errors->has('coupon'))
                    <div class="form-control-feedback">{{ $errors->first('captcha') }}</div>

                @endif
            </div>

        @endif
    @endif

    <div class="form-group ">
        @if(Auth::guard('frontend')->guest())
            <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">
                Bạn phải đăng nhập mới có thể trả góp tài khoản tự động.
            </label>

        @else
            @if(Auth::guard('frontend')->user()->balance<$data->price*20/100)
                <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">
                    Bạn cần thêm {{number_format( (($data->price*20) / 100)-Auth::guard('frontend')->user()->balance    )}}đ để trả góp ban đầu tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và trở lại trả góp.

                </label>

            @else
                <label class="col-md-12 form-control-label" style="text-align: center;margin: 10px 0; ">
                    Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch
                </label>

            @endif
        @endif

    </div>
</div>

<div class="modal-footer">

    @if(Auth::guard('frontend')->guest())
        <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login">Đăng nhập</a>
    @else
        @if(Auth::guard('frontend')->user()->balance<$data->price*20/100)
            <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/nap-the" id="d3">Nạp thẻ cào</a>
            <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal" rel="/atm">Nạp từ ATM - Ví điện tử</a>
        @else
            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" id="d3" style="">Xác nhận trả góp</button>

        @endif
    @endif

    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>
{{ Form::close() }}


<script>
    $(document).ready(function () {

        $('.load-modal').on('click', function(e){
            e.preventDefault();
            var curModal= $('#LoadModal');

            curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/{{theme('')->theme_key}}/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
            curModal.modal('show').find('.modal-content').load($(this).attr('rel'));
        });


    });
</script>
