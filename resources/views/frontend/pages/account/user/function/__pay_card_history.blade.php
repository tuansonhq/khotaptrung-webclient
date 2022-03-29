

    <div class="table-responsive">
        <table class="table table-hover table-custom-res">
            <thead>
            <tr>
                <th>Nhà mạng</th>
                <th>Mã thẻ</th>
                <th>serial</th>
                <th>Mệnh giá</th>
                <th>Kết quả</th>
                <th>Thực nhận</th>
            </tr>

            </thead>
            <tbody>
            @if(empty($data->data))
                @if(isset($data) && count($data) > 0)
                    @foreach ($data as $item)

                    <tr>
                        <td>{{ $item->telecom_key }}</td>
                        <td>{{ $item->pin }}</td>
                        <td>{{ $item->serial }}</td>
                        <td>{{ formatPrice($item->declare_amount) }}</td>
                        <td>
                            @if($item->status == 1)
                                <span class="badge badge-primary">{{config('module.charge.status.1')}}</span>
                            @elseif($item->status == 0)
                                <span class="badge badge-danger">{{config('module.charge.status.0')}}</span>
                            @elseif($item->status == 3)
                                <span class="badge badge-danger">{{config('module.charge.status.3')}}</span>
                            @elseif($item->status == 2)
                                <span class="badge badge-warning">{{config('module.charge.status.2')}}</span>
                            @elseif($item->status == 999)
                                <span class="badge badge-danger">{{config('module.charge.status.999')}}</span>
                            @elseif($item->status == -999)
                                <span class="badge badge-danger">{{config('module.charge.status.-999')}}</span>
                            @elseif($item->status == -1)
                                <span class="badge badge-danger">{{config('module.charge.status.-1')}}</span>
                            @endif
                        </td>
                        <td>
                            @if(isset($item->real_received_amount))
                            {{ formatPrice($item->real_received_amount) }}
                            @else
                            0
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

{{--    <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie">--}}

{{--        @if(isset($data))--}}
{{--            @if($data->total()>1)--}}
{{--                <div class="row marinautooo paginate__history paginate__history__fix justify-content-end">--}}
{{--                    <div class="col-auto paginate__category__col">--}}
{{--                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">--}}
{{--                            {{ $data->appends(request()->query())->links('pagination::bootstrap-4') }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        @endif--}}
{{--    </div>--}}

    @if(isset($data))
        @if($data->total()>1)
            <div class="row marinautooo paginate__history paginate__history__fix paginate__v1 justify-content-center">
                <div class="col-auto paginate__category__col">
                    <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                        {{ $data->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        @endif
    @endif
