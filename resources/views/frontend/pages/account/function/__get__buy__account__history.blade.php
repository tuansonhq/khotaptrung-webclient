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
                            <td>
                                Thao tác
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

        {{--    <input type="hidden" name="serial_data" class="serial_data">--}}
        {{--    <input type="hidden" name="key_data" class="key_data">--}}
        {{--    <input type="hidden" name="status_data" class="status_data">--}}
        {{--    <input type="hidden" name="started_at_data" class="started_at_data">--}}
        {{--    <input type="hidden" name="ended_at_data" class="ended_at_data">--}}

@endif

