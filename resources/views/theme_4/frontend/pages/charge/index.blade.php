@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container">

        <div class="row user-manager">

            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9  site-form " style="min-height: 212.568px;">
                <div class="menu-content">
                    <div class="title">
                        <h3>Nạp thẻ</h3>
                    </div>
                    <div class="wapper profile">

                        <p style="text-align: center;color: #fff">ID của bạn:
                            <strong>74</strong></p>
                        <p style="text-align: center;color: red">* Ưu tiên nạp thẻ VIETTEL & VINAPHONE</p>


                        <form method="POST" action="https://napgamegiare.net/nap-the" accept-charset="UTF-8" class="form-horizontal form-charge"><input name="_token" type="hidden" value="1d1UtKProIOHCYvd7GjOQ1mwzvuWei6FP3awwoKP">


                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Tài khoản:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input class="form-control  c-square c-theme" type="text"
                                           value="3993473817374905@facebook.com"
                                           readonly>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Loại thẻ:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <select class="form-control  c-square c-theme" name="type" id="type">
                                        <option value="VIETTEL">VIETTEL</option>

                                        <option value="GATE">GATE</option>

                                        <option value="MOBIFONE">MOBIFONE</option>

                                        <option value="VINAPHONE">VINAPHONE</option>

                                        <option value="VIETNAMOBILE">VIETNAMOBILE</option>

                                        <option value="ZING">ZING</option>

                                        <option value="VCOIN">VCOIN</option>

                                        <option value="GARENA">GARENA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Mệnh giá:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <select class="form-control  c-square c-theme" name="amount" id="amount" required>
                                    </select>
                                </div>
                            </div>


                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Mã số thẻ:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input class="form-control  c-square c-theme " name="pin" type="text" maxlength="16"
                                           required placeholder="">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Số serial:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input class="form-control c-square c-theme " name="serial" type="text" maxlength="16"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Mã bảo vệ (*):</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">

                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control m-input refresh" id="captcha" name="captcha"
                                               placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                                        <div class="input-group-append">
                                    <span class="input-group-text" style="padding: 3px;background: none"><img
                                            src="/captcha/flat?eb9AEN8C" height="30px" id="imgcaptcha"
                                            onclick="document.getElementById('imgcaptcha').src ='captcha/flat?EhjAauu9'+Math.random();document.getElementById('captcha').focus();"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mb-4 text-center">
                                <button class="btn-submit" type="submit"
                                        data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Cập nhật
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section>

<script>
    $(".form-charge").submit(function () {
        var loadingText = '<i class="fas fa-circle-notch fa-spin"></i> Đang xử lý...';
        $('.btn-submit').html(loadingText).prop('disabled', false);
        $('.btn-submit').attr("disabled", true);

    });
</script>


<script>
    GetAmount();
    $("#type").on('change', function () {

        GetAmount();

    });

    function GetAmount() {

        var telecom_key = $("#type").val();


        var getamount = $.get("/nap-the/get-auto-amount?telecom_key=" + telecom_key, function (data, status) {

            $("#amount").find('option').remove();
            $("#amount").html(data).val($("#amount option:first").val());
            ;

        }).done(function () {

        }).fail(function () {

            alert("Không tìm thấy mệnh giá phù hợp");
        })
    }
</script>
@endsection




