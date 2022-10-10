@extends('frontend.layouts.master')

@section('content')
    <div class="row my-3" >
        <div class="col-lg-3  col-sm-3 col-md-3 col-12">
            @include('frontend.layouts.includes.menu_profile')
        </div>
        <div class="col-xl-9  col-md-9 col-sm-12 col-12">
            <div class="bg-white">
                <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                    <div class="content-profile">
                        <h3>Đổi mật khẩu</h3>
                        <hr class="lines">



                        <form method="POST" action="https://thegarenagiare.com/user/change-password" accept-charset="UTF-8" class="form-horizontal form-charge"><input name="_token" type="hidden" value="KzPoBJUVTzihxXOnHoyzwsRTjhYM1SEHfEDrtE6n">

                            <div class="form-group row">
                                <label class="col-md-3 control-label text-right "><b>Mật khẩu cũ:</b></label>
                                <div class="col-md-6">
                                    <input class="form-control c-square c-theme " name="old_password" type="password"
                                           maxlength="32"
                                           required placeholder="Mật khẩu hiện tại">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 control-label text-right"><b>Mật khẩu mới:</b></label>
                                <div class="col-md-6">
                                    <input class="form-control c-square c-theme " name="password" type="password"
                                           maxlength="32"
                                           required placeholder="Mật khẩu mới">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label text-right"><b>Xác nhận:</b></label>
                                <div class="col-md-6">
                                    <input class="form-control c-square c-theme " name="password_confirmation"
                                           type="password" maxlength="32"
                                           required placeholder="Xác nhận mật khẩu mới">

                                </div>
                            </div>


                            <div class="form-group c-margin-t-40 row">
                                <div class="col-md-3 "></div>
                                <div class="col-md-6">
                                    <button type="submit"
                                            class="btn btn-success btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block"
                                            data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Đổi mật khẩu
                                    </button>

                                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                        $(".form-charge").submit(function () {
                                            $('.btn-submit').button('loading');
                                        });
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    </div>
@endsection
