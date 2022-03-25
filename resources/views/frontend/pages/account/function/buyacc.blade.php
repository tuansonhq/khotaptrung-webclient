{{Form::open(array('method'=>'POST' ,'class'=>'form-horizontal','enctype'=>"multipart/form-data"))}}


<div class="modal-header">
    <h4 class="modal-title">Xác nhận mua tài khoản</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<div class="modal-body">
    <div class="c-content-tab-4 c-opt-3" role="tabpanel">
        <ul class="nav nav-justified" role="tablist">
            <li role="presentation" class="active">
                <a href="#payment" role="tab" data-toggle="tab" aria-selected="true" class="c-font-16 active">Thanh toán</a>
            </li>
            <li role="presentation">
                <a href="#info" role="tab" data-toggle="tab" class="c-font-16">Tài khoản</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active show" id="payment">
                <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                    <li class="c-font-dark">
                        <table class="table table-striped">
                            <tbody><tr>
                                <th colspan="2">Thông tin tài khoản #{{ $data->id }}</th>
                            </tr>
                            </tbody><tbody>
                            <tr>
                                <td>Nhà phát hành:</td>
                                <th>{{ $data->groups[0]->title }}</th>
                            </tr>
                            <tr>
                                <td>Tên game:</td>
                                <th>{{ $data_category->title }}</th>
                            </tr>
                            <tr>
                                <td>Giá tiền:</td>
                                <th class="text-info">{{ formatPrice($data->price) }}đ</th>
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
                                <th colspan="2">Chi tiết tài khoản #12333</th>
                            </tr>
                            @if(!is_null($dataAttribute) && count($dataAttribute)>0)

                                @foreach($dataAttribute as $index=>$att)

                                    <tr>
                                        @if($att->position == 'text')
                                            <td style="width: 50%">{{$att->title}}:</td>
                                            <td class="text-danger" style="font-weight: 700">123321</td>

                                        @elseif($att->position == 'select')

                                            @if(!is_null($att->childs) && count($att->childs))
                                                @foreach($att->childs as $att_value)
{{--                                                    @dd($att)--}}
                                                    @foreach($data->groups as $att_data)

                                                        @if($att_data->id == $att_value->id)
                                                        <td style="width:50%">{{$att->title}}:</td>
                                                        <td class="text-danger" style="font-weight: 700">{{$att_data->title}}</td>
                                                        @endif
                                                    @endforeach
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
        </div>
    </div>

    <div class="form-group {{ $errors->has('coupon')? 'has-danger':'' }}">
        <label class="col-md-3 form-control-label">Mã giảm giá:</label>
        <div class="col-md-7">
            <input type="text" class="form-control c-square c-theme " name="coupon" placeholder="Mã giảm giá" value="{{old('coupon')}}">
            <span class="help-block">Nhập mã giảm giá nếu có để nhận ưu đãi</span>
        </div>
        @if($errors->has('coupon'))
            <div class="form-control-feedback">{{ $errors->first('coupon') }}</div>

        @endif
    </div>

    <div class="form-group ">
        @if(App\Library\AuthCustom::check())


            @if(App\Library\AuthCustom::user()->balance < $data->price)
                <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">
                    Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.
                </label>

            @else
                <label class="col-md-12 form-control-label" style="text-align: center;margin: 10px 0; ">
                    Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch
                </label>

            @endif

        @else

            <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">
                Bạn phải đăng nhập mới có thể mua tài khoản tự động.
            </label>

        @endif

    </div>

    <div style="clear: both"></div>
</div>
<div class="modal-footer">

    @if(App\Library\AuthCustom::check())

        @if(App\Library\AuthCustom::user()->balance< $data->price)
            <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/nap-the" id="d3">Nạp thẻ cào</a>
            <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>
        @else
            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"  id="d3" style="">Xác nhận mua</button>
        @endif
    @else
        <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"  id="d3" style="">Xác nhận mua</button>
{{--        <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login">Đăng nhập</a>--}}

    @endif

    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

</div>
{{ Form::close() }}

<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                e.preventDefault();
                var curModal= $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
            });
        });
    });
</script>
