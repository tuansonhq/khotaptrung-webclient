@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container">

        <div class="row user-manager">
            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;">
                <div class="menu-content">
                    <div class="title">
                        <h3>Thông tin hồ sơ</h3>
                    </div>
                    <div class="wapper profile">

                        <form action="/profile" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="1d1UtKProIOHCYvd7GjOQ1mwzvuWei6FP3awwoKP">

                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">ID</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" placeholder="ID" name="id" value="74" readonly="">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Tên tài khoản</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" placeholder="Tên tài khoản" name="username" value="3993473817374905@facebook.com" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Email</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" readonly="" placeholder="Email" name="email" value="">
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Số điện thoại</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" class="form-control" readonly="" placeholder="Số điện thoại" name="phone" value="">
                                </div>
                            </div>























                            <div class="mb-4 text-center">
                                <button class="btn-submit" type="submit">Cập nhật</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section>
@endsection
