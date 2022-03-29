@if(empty($data->data))
        <div class="table-responsive">
            <table class="table table-hover table-custom-res">
                <thead>
                <tr>
                    <th>Thời gian</th>
                    <th>ID</th>
                    <th>Game</th>
                    <th>Tài khoản</th>
                    <th>Trị giá</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>

                @if(isset($data) && count($data) > 0)
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ formatDateTime($item->created_at) }}</td>
                            <td>{{ $item->id }}</td>
                            <td>
                                @if(isset($item->groups))
                                    @foreach($item->groups as $val)
                                        @if($val->module == 'acc_category')
                                            {{ $val->title }}
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ formatPrice($item->price) }}</td>
                            <td style="width: 20%">
                                @if($item->status == 1 || $item->status == 5 || $item->status == 4)
{{--                                    Chưa bán--}}
                                    <button type="button" class="btn btn-danger c-btn-square btn-xs load-modal" rel="/tran/acc/check-login?id={{$item->id}}" >Check thông tin</button
                                @elseif($item->status == 2)
                                    <button type="button" class="btn btn-danger c-btn-square btn-xs load-modal" rel="/tran/acc/check-login?id={{$item->id}}" >Check thông tin</button>
                                @elseif($item->status == 6)
                                    Check lỗi
                                @elseif($item->status == 0)
                                    <button type="button" class="btn c-bg-dark c-font-white c-btn-square btn-xs  load-modal" style="margin-bottom: 5px" rel="/tran/acc/check-login?id={{$item->id}}">Mật khẩu</button>
                                    <br />
                                    <a href="/inbox/{{$item->id}}/send"  class="btn c-theme-btn c-font-white c-btn-square btn-xs">Chat</a>
                                    Đã bán
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td width="100%" style="width: 20%">
                            <span style="color: red;font-size: 16px;">Không có dữ liệu!</span>
                        </td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div>

        <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie frontend__panigate">

            @if(isset($data))
                @if($data->total()>1)
                    <div class="row marinautooo paginate__history paginate__history__fix justify-content-center">
                        <div class="col-auto paginate__category__col">
                            <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                                {{ $data->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>

@endif

