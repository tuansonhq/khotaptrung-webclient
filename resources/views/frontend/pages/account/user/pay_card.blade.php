@extends('frontend.layouts.master')
@section('content')
    <div class="account">
        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_pay_card">
                        <div class="account_sidebar_content_title">
                            <p>NẠP THẺ</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>
                        <p>ID của bạn: <strong>1553156</strong> </p>
                        <span><p>* Ưu tiên nạp thẻ VIETTEL & VINAPHONE</p></span>
                        <form action="">
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Tài khoản

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row ">

                                <label class="col-md-3 control-label">
                                    Loại thẻ:
                                </label>
                                <div class="hide">đâsd</div>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
{{--                                        @dd($bank->datay)--}}
{{--                                        @if(isset($bank->data))--}}
                                        <select name="telecard" id="telecard"  class="form-control">
{{--                                            @foreach($bank->data as $items)--}}
{{--                                            <option value="{{$items->key}}">{{$items->key}}</option>--}}
                                            <option value="1">MOBIPHONE</option>
                                            <option value="2">MOBIPHONE</option>
                                            <option value="3">MOBIPHONE</option>
{{--                                            @endforeach--}}
                                        </select>
{{--                                        @endif--}}
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mệnh giá:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <select name="" id="" class="form-control">
                                            <option value="">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
                                            <option value="1">10,000 VNĐ (nhận 100.0%)</option>
                                            <option value="2">20,000 VNĐ (nhận 100.0%)</option>
                                            <option value="">30,000 VNĐ (nhận 100.0%)</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã số thẻ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Số Serial:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã bảo vệ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><img src="https://www.shopas.net/captcha/flat?KfHsLiD2" alt="" style="height: 100%;border: 1px solid darkgrey;"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row " style="margin-top: 40px">
                                <div class="col-md-6" style="    margin-left: 25%;">
                                    <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block loading">Nạp thẻ</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Thời gian	</th>
                                <th>Nhà mạng</th>
                                <th>Mã thẻ	</th>
                                <th>Serial</th>
                                <th>Kiểu nạp	</th>
                                <th>Mệnh giá	</th>
                                <th>Kết quả</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>03/07/2022</th>
                                <th>Viettel</th>
                                <th>0656506565665</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // $(document).on('click','.hideThanhich',function (e) {
    $(".hideThanhich").on('click',function (e) {
        e.preventDefault();
        var formSubmit = $(this).closest('form')
        url = $(this).data('key');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {
            },
            success: function (data) {
                if (data.success) {
                    $('.content-meta-'+data.hideThanhtich).toggleClass('hidden');
                } else {
                    alert('{{('An thất bại.Vui lòng thử lại')}}', 'error');
                }
            },
            error: function (data) {
                alert('{{__('Aarn thất bại.Vui lòng thử lại')}}', 'error');
            },
            complete: function (data) {
            }
        });
    })
    // $(document).ready(function() {
        $('.hide').hide();
        $('#telecard').change(function(){
            $('.hide').show();
            alert('server');
        });
    // });
    // $("#telecard").change(function (elm, select) {
    //
    //     // server = parseInt($(".server-filter").val());
    //     // $('[name="server"]').val(server);
    //     // if($("#minmax_"+server).length > 0)
    //     // {
    //     //     $('#min_money').text($("#minmax_"+server).attr("data-value-min-text").toString());
    //     //     $('#max_money').text($("#minmax_"+server).attr("data-value-max-text").toString());
    //     //     $('#input_pack').val($("#minmax_"+server).attr("data-value-min").toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    //     server = parseInt($("#telecard").val());
    //
    //     $('[name="server"]').val(server);
    //     // }
    //     telecard();
    // });
    function telecard()
    {
        $.ajax({
            type: 'post',
            data: {'id': id},
            url: '/telecom-deposit-auto',
            dataType: 'json',
            success: function(data){
                alert(data);
            },
            error: function(data){
                $('#message').text('Error!');
                $('.dvLoading').hide();
            }
        });
    }
</script>
