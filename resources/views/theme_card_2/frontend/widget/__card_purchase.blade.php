<div class="">
    <form enctype="multipart/form-data" class="recharge_supplier" id="recharge_supplier"
          name="recharge_supplier">
        <input type="hidden" name="_token" value="VzHeWq9oWvZUB6AYot0OEsh6sXR6j1vFZC362MkE">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="content-supplier">
                    <div class="title-content">
                        <h1 style="display:none">Mua thẻ Garena online giá rẻ bằng thẻ cào điện thoại, atm, paypal, ví điện tử</h1>
                        <h2 style="color: #2F6A7C;font-size: 20px;font-weight: 700;">Chọn mua thẻ từ nhà cung cấp</h2>
                    </div>
                    <div id="supplier-flex">
                        <ul id="tab-supplier" class="nav nav-pills nav-pills--success">

                            @foreach($telecoms as $key => $telecom)
                                @if($key == 0)
                                    <li>
                                        <div class="nav-link link-supplier text-center">
                                            <input name="telecom" value="{{ $telecom->key }}" id="myCheckbox{{ $telecom->id }}" type="radio" >
                                            <label class="item-wapper label-{{ $telecom->key }} store-telecom{{$key}}" for="myCheckbox{{ $telecom->id }}" onclick="reply_click(this.id)" id="{{ $telecom->key }}">
                                                <img class="img-fluid" src="{{ $telecom->image }}" alt="{{ $telecom->key }}">
                                            </label>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="nav-link link-supplier text-center">
                                            <input name="telecom" value="{{ $telecom->key }}" id="myCheckbox{{ $telecom->id }}" type="radio">
                                            <label class="item-wapper label-{{ $telecom->key }} store-telecom{{$key}}" for="myCheckbox{{ $telecom->id }}" onclick="reply_click(this.id)" id="{{ $telecom->key }}">
                                                <img class="img-fluid" src="{{ $telecom->image }}" alt="{{ $telecom->key }}">
                                            </label>
                                        </div>
                                    </li>
                                @endif

                            @endforeach


{{--                            <li>--}}
{{--                                <div class="nav-link link-supplier text-center"><input--}}
{{--                                        name="telecom_key" value="GARENA" id="myCheckbox0" type="radio"><label--}}
{{--                                        class="item-wapper GARENA" for="myCheckbox0"--}}
{{--                                        onclick="reply_click(this.id)" id="GARENA"><img--}}
{{--                                            class="img-fluid"--}}
{{--                                            src="/assets/frontend/theme_card_2/image/garena.png"></label>--}}
{{--                                </div>--}}
{{--                            </li>--}}

                        </ul>
                    </div>
                </div>
                <div class="content-supplier">
                    <div class="title-content">
                        <h3>Chọn mệnh giá</h3>
                    </div>
                    <div id="render-supplier" class="wapper-content justify-content-center">
                        <h5 style="color: #2F6A7C">Vui lòng chọn nhà cung cấp</h5>
                    </div>
                    <div id="button" class="my-5"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="content-pay-cart">
                    <div class="title-content-pay text-center d-none d-lg-block">
                        <h3>CHI TIẾT GIAO DỊCH</h3>
                    </div>
                    <div class="wapper-content-pay d-none d-lg-block">
                        <div class="item-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6>Loại mã thẻ:</h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="denominations">Chưa chọn</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6>Mệnh giá:</h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="price_supplier">Chưa chọn</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6>Phí giao dịch:</h6>
                                </div>
                                <div class="col-6">
                                    <h6>Miễn phí</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6>Giảm giá: </h6>
                                </div>
                                <div class="col-6">
                                    <h6><span class="price_sale">0</span> VNĐ</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6>Số lượng:</h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="render_quantity">1</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sum-total-pay">
                            <div class="row">
                                <div class="col-6">
                                    <h6 style="font-size: 18px;">Tổng tiền:</h6>
                                </div>
                                <div class="col-6">
                                    <span class="total_price">0</span> <span>VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wapper-pay text-center">
                        <button style="font-family: 'Nunito', sans-serif;background-color:#30C1CE ;"
                                type="button" data-toggle="modal" data-target="#modalLogin"
                                class="btn btn-success">ĐĂNG NHẬP ĐỂ THANH TOÁN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
