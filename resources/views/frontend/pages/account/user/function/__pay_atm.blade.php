
        <div class="table-responsive">
            <table class="table table-hover table-custom-res">
                <thead>
                <tr>
                    <th>Thời gian</th>
                    <th>Mã yêu cầu</th>
                    <th>Ngân hàng</th>
                    <th>Chủ tài khoản</th>
                    <th>Số tài khoản</th>
                    <th>Số tiền</th>
                    <th>Thực nhận</th>
                    <th>Trạng thái</th>
                </tr>

                </thead>
                <tbody>
                @if(empty($data->data))
                    @if(isset($data) && count($data) > 0)
                @foreach ($data as $item)
                    <tr>
                        <td>{{ formatDateTime($item->created_at) }}</td>
                        <td>{{ $item->params->content_bank }}</td>
                        <td>{{ $item->bank->title }}</td>
                        <td>{{ $item->bank->params->account_name }}</td>
                        <td>
                            {{ $item->bank->params->number_account }}
                        </td>
                        <td>
                            {{ formatPrice($item->price) }}
                        </td>
                        <td>
                            @if(isset($item->real_received_amount))
                                {{ formatPrice($item->real_received_amount) }}
                            @else
                                0
                            @endif
                        </td>
                        <td>
                            @if($item->status == 2 )
                                <span class="badge badge-warning">{{config('module.tranfer.status.2')}}</span>
                            @elseif($item->status == 1)
                                <span class="badge badge-primary">{{config('module.tranfer.status.1')}}</span>
                            @elseif($item->status == 0)
                                <span class="badge badge-warning">{{config('module.tranfer.status.0')}}</span>
                            @elseif($item->status == 3)
                                <span class="badge badge-danger">{{config('module.tranfer.status.3')}}</span>
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
                @endif
                </tbody>

            </table>
        </div>

    <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1__ls paginate__v1_mobie frontend__panigate">
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




