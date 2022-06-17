@if(empty($data->data))

    <div class="col-md-12 left-right">
        <table class="table table-striped table-hover table-logs" id="table-default">
            <thead>
            <tr>
                <th>Thời gian</th>
                <th>ID</th>
                <th>Mã GD SMS</th>
                <th>Dịch vụ</th>
{{--                <th>Danh mục</th>--}}
                <th style="width: 30%">Trị giá</th>
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
                    @php
                        $curr = \App\Library\Helpers::formatDate($item->created_at);
                    @endphp
                    @if($curr != $prev)
                        <tr>
                            <td colspan="8" class="text-left"><b>Ngày {{$curr}}</b></td>
                        </tr>
                        <tr>
                        <td>{{ formatDateTime($item->created_at) }}</td>
                        <td>
                            @if(isset($item->id))
                                #{{ $item->id }}
                            @endif
                        </td>

                        <td>
                            @if(isset($item->tranid))
                                {{$item->tranid}}
                            @endif
                        </td>
                        <td>
                            @if(isset($item->itemconfig_ref))
                                {{ $item->itemconfig_ref->title }}
                            @endif
                        </td>
{{--                        <td>--}}
{{--                            Liên Quân--}}
{{--                        </td>--}}
                        <td class="text-right">
                            {{ str_replace(',','.',number_format($item->price)) }} đ
                        </td>
                        <td>
                            @if($item->status == 1)
                                <span class="badge badge-warning">Đang chờ xử lý</span>
                            @elseif($item->status == 2)
                                <span class="badge badge-warning">Đang thực hiện</span>
                            @elseif($item->status == 3)
                                <span class="badge badge-danger">Từ chối</span>
                            @elseif($item->status == 4)
                                <span class="badge badge-success">Hoàn tất</span>
                            @elseif($item->status == 5)
                                <span class="badge badge-dark">Thất bại</span>
                            @elseif($item->status == 0)
                                <span class="badge badge-danger">Đã hủy</span>
                            @endif
                        </td>
                        <td class="text-right">
                            <a href="/dich-vu-da-mua-{{$item->id}}" class="refund-default openHoanTien">Chi tiết</a>
                            <a href="/inbox/send/{{$item->id}}" class="refund-default refund-default-tt openTTTraGop">Nhắn tin</a>
                        </td>
                    </tr>
                        @php
                            $prev = $curr;
                        @endphp
                    @else
                        <tr>
                            <td>{{ formatDateTime($item->created_at) }}</td>
                            <td>
                                @if(isset($item->id))
                                    #{{ $item->id }}
                                @endif
                            </td>

                            <td>
                                @if(isset($item->tranid))
                                    {{$item->tranid}}
                                @endif
                            </td>
                            <td>
                                @if(isset($item->itemconfig_ref))
                                    {{ $item->itemconfig_ref->title }}
                                @endif
                            </td>
                            {{--                        <td>--}}
                            {{--                            Liên Quân--}}
                            {{--                        </td>--}}
                            <td class="text-right">
                                {{ str_replace(',','.',number_format($item->price)) }} đ
                            </td>
                            <td>
                                @if($item->status == 1)
                                    <span class="badge badge-warning">Đang chờ xử lý</span>
                                @elseif($item->status == 2)
                                    <span class="badge badge-warning">Đang thực hiện</span>
                                @elseif($item->status == 3)
                                    <span class="badge badge-danger">Từ chối</span>
                                @elseif($item->status == 4)
                                    <span class="badge badge-success">Hoàn tất</span>
                                @elseif($item->status == 5)
                                    <span class="badge badge-dark">Thất bại</span>
                                @elseif($item->status == 0)
                                    <span class="badge badge-danger">Đã hủy</span>
                                @endif
                            </td>
                            <td class="text-right">
                                <a href="/dich-vu-da-mua-{{$item->id}}" class="refund-default openHoanTien">Chi tiết</a>
                                <a href="/inbox/send/{{$item->id}}" class="refund-default refund-default-tt openTTTraGop">Nhắn tin</a>
                            </td>
                        </tr>
                    @endif
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




