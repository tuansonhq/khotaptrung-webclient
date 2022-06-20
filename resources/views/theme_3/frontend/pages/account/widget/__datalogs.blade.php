@if(empty($data->data))

<div class="col-md-12 left-right">
    <table class="table table-striped table-hover table-logs" id="table-default">
        <thead>
        <tr>
            <th>Thời gian</th>
            <th>ID</th>
            <th style="width: 30%">Game</th>
            <th>Tài Khoản</th>
            <th style="width: 20%">Trị giá</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @php
            $prev = null;
        @endphp

        @if(isset($data) && count($data) > 0)
            @foreach ($data as $item)
                <tr>
                    <td>{{ formatDateTime($item->published_at) }}</td>
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
                    <td>
                        {{ $item->title }}
                    </td>

                    <td class="text-right">
                        {{ str_replace(',','.',number_format($item->price)) }} đ
                    </td>
                    <td>
                        @if($item->status == 1)
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
                    <td>
                        @if($item->status == 0)
                            <a href="javascript:void(0)" class="refund-default openHoanTien show_chitiet" data-id="{{ $item->id }}">Chi tiết</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif



        </tbody>
    </table>
</div>


<div class="col-md-12 left-right justify-content-end default-paginate-addpadding default-paginate">

    @if(isset($data))
        @if($data->total()>1)

            <div class="row marinautooo justify-content-center">
                <div class="col-auto">
                    <div class="data_paginate paginate__v1 paging_bootstrap paginations_custom" style="text-align: center">
                        {{ $data->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>

@endif
