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
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>

                @if(isset($data) && count($data) > 0)
                    @foreach ($data as $item)
{{--                        @dd($item)--}}
                        <tr>
                            <td>{{ formatDateTime($item->created_at) }}</td>
                            <td>
                                @if(isset($item->randId))
                                    #{{ $item->randId }}
                                @endif
                            </td>
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
                            <td style="width: 20%;">
                                @if($item->status == 1)
                                    <span class="badge badge-primary">Sẵn có</span>
                                @elseif($item->status == 2)
                                    <span class="badge badge-warning">Chờ xử lý</span>
                                @elseif($item->status == 3)
                                    <span class="badge badge-warning">Đang check thông tin</span>
                                @elseif($item->status == 4)
                                    <span class="badge badge-danger">Sai thông tin</span>
                                @elseif($item->status == 5)
                                    <span class="badge badge-danger">Đã xoá</span>
                                @elseif($item->status == 0)
                                    <span class="badge badge-success">Thành công</span>
                                @endif
                            </td>
                            <td><a href="javascript:void(0)" class="badge badge-info show_chitiet" data-id="{{ $item->id }}">Chi tiết</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">
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

    <script>
        function myFunction() {
            var copyText = document.getElementById("password");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
@endif

