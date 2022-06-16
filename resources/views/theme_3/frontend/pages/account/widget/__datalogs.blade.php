@if(empty($data->data))

<div class="col-md-12 left-right">
    <table class="table table-responsive table-striped table-hover table-logs" id="table-default">
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
        @if(isset($data) && count($data) > 0)
            @foreach ($data as $item)
                @php
                    $curr = \App\Library\Helpers::formatDate($item->created_at);
                @endphp
                @if($curr != $prev)
                    <tr>
                        <td colspan="7"><b>Ngày {{$curr}}</b></td>
                    </tr>
                    <tr>
                        <td>09-02-2022 08:32</td>
                        <td>#4171</td>

                        <td>Bán đồ ngọc rồng</td>
                        <td>
                            sonbt@hqplay.vn
                        </td>

                        <td class="text-right">
                            1.000.000 đ
                        </td>
                        <td><span class="badge badge-danger">Đã hủy</span></td>
                        <td class="text-right">
                        </td>
                    </tr>
                @else
                    <tr>
                        <td>09-02-2022 08:32</td>
                        <td>#4171</td>

                        <td>Bán đồ ngọc rồng</td>
                        <td>
                            sonbt@hqplay.vn
                        </td>

                        <td class="text-right">
                            1.000.000 đ
                        </td>
                        <td><span class="badge badge-danger">Đã hủy</span></td>
                        <td class="text-right">
                        </td>
                    </tr>
                @endif
            @endforeach
        @endif



        </tbody>
    </table>
</div>


<div class="col-md-12 left-right justify-content-end default-paginate">

    @if(isset($data))
        @if($data->total()>1)

            <div class="row marinautooo justify-content-center">
                <div class="col-auto">
                    <div class="data_paginate paginate__v1 paging_bootstrap paginations_custom" style="text-align: center">
                        {{ $data->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>

@endif
