@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <div class="item_buy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item_buy_info">
                        <h3>{{ $data->title }}</h3>
                        <div>
                            {!! $data->seo_description !!}
                        </div>
                    </div>
                    <div class="item_buy_viewmore">
                        <span>Xem tất cả »</span>
                    </div>
                    <div class="item_buy_viewless">
                        <span>« Thu gọn</span>
                    </div>
                </div>
            </div>

            <div class="item_buy_form">
                <form action="">
                    <div class="row">
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Tìm kiếm</span>
                                <input type="text" class="form-control" placeholder="Tìm kiếm">
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Mã số</span>
                                <input type="text" class="form-control" placeholder="Mã số">
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Giá tiền</span>
                                <select type="text" class="form-control">
                                    <option value="">Chọn giá tiền</option>
                                    <option value="">Dưới 500K</option>
                                    <option value="">Từ 500k-1000k</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Trạng thái</span>
                                <select type="text" class="form-control">
                                    <option value="">Chưa bán</option>
                                    <option value="">Tất cả</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Đăng ký</span>
                                <select type="text" class="form-control">
                                    <option value="">--Không chọn--</option>
                                    <option value="">Facebook</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Pet</span>
                                <select type="text" class="form-control">
                                    <option value="">--Không chọn--</option>
                                    <option value="">Có</option>
                                    <option value="">Không</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Thẻ vô cực</span>
                                <select type="text" class="form-control">
                                    <option value="">--Không chọn--</option>
                                    <option value="">Có</option>
                                    <option value="">Không</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <button type="submit" class="btn">Tìm kiếm</button>
                                <a href="" class="btn btn-danger">Tất cả</a>
                            </div>
                        </div>



                    </div>
                </form>


            </div>

            <div class="item_buy_filter">
                <label for="item_buy_filter_input" class="item_buy_filter_in btn btn-success" style="cursor: pointer;">
                    <i class="fas fa-filter"></i> Tìm kiếm
                </label>
                <input type="checkbox" hidden class="item_buy_filter_input" id="item_buy_filter_input" >
                <label for="item_buy_filter_input" class="item_buy_filter_overlay">

                </label>
                <div class="item_buy_form-mobile">
                    <div class="item_buy_form-mobile_title">
                        <label for="item_buy_filter_input" class="item_buy_form-mobile_close" >
                            <i class="fas fa-times"></i>
                        </label>
                        <p>Tìm kiếm</p>

                    </div>
                    <hr>
                    <div class="item_buy_form-mobile_search">
                        <form action="">
                            <div class="row">
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tìm kiếm</span>
                                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Mã số</span>
                                        <input type="text" class="form-control" placeholder="Mã số">
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Giá tiền</span>
                                        <select type="text" class="form-control">
                                            <option value="">Chọn giá tiền</option>
                                            <option value="">Dưới 500K</option>
                                            <option value="">Từ 500k-1000k</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Trạng thái</span>
                                        <select type="text" class="form-control">
                                            <option value="">Chưa bán</option>
                                            <option value="">Tất cả</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Đăng ký</span>
                                        <select type="text" class="form-control">
                                            <option value="">--Không chọn--</option>
                                            <option value="">Facebook</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Pet</span>
                                        <select type="text" class="form-control">
                                            <option value="">--Không chọn--</option>
                                            <option value="">Có</option>
                                            <option value="">Không</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Thẻ vô cực</span>
                                        <select type="text" class="form-control">
                                            <option value="">--Không chọn--</option>
                                            <option value="">Có</option>
                                            <option value="">Không</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <button type="submit" class="btn">Tìm kiếm</button>
                                        <a href="" class="btn btn-danger">Tất cả</a>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>

                </div>
            </div>
            @if(empty($data->data))
                @if(isset($items) && count($items) > 0)
            <div class="item_buy_list row">
                @foreach ($items as $item)
                <div class="col-sm-6 col-lg-3">
                    <div class="item_buy_list_in">
                        <div class="item_buy_list_img">
                            <a href="/acc/{{ $item->id }}">
                                <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                <span>MS: 1338480</span>
                            </a>
                        </div>
                        <div class="item_buy_list_description">
                            bảo hành 100%,lỗi hoàn tiền
                        </div>
                        <div class="item_buy_list_info">
                            <div class="row">
                                <div class="col-6 item_buy_list_info_in">
                                    Đăng ký : <b>Facebook</b>
                                </div>
                                <div class="col-6 item_buy_list_info_in">
                                    Pet : <b>Có</b>
                                </div>
                                <div class="col-6 item_buy_list_info_in">
                                    Rank : <b>Kim cương</b>
                                </div>
                                <div class="col-6 item_buy_list_info_in">
                                    Ghi chú : <b>Tuyệt vời</b>
                                </div>

                            </div>
                        </div>
                        <div class="item_buy_list_more">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="item_buy_list_price">
                                        <span>5,757,600đ </span>
                                        2,399,000đ
                                    </div>

                                </div>
                                <a href="/acc/{{ $item->id }}" class="col-12">
                                    <div class="item_buy_list_view">
                                        Chi tiết
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
                @endif
            @endif

        </div>
    </div>
@endsection

