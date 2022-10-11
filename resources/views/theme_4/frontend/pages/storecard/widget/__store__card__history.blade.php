
@if(empty($data->data))
    <table class="table table-hover table-custom-res">
        <thead>
        <tr>
            <th class="hidden-xs">Thời gian</th>
            <th>ID</th>
            <th>Loại</th>
            <th>Mô tả</th>
            <th>Trị giá</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($data) && count($data) > 0)

            @foreach ($data as $key => $item)
                @if($item->status == 0)
                    <tr>
                        <td>{{ formatDateTime($item->created_at) }}</td>
                        <td>
                            {{$item->id }}
                        </td>
                        <td>{{json_decode($item->params)->telecom}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>100,000</td>
                        <td>
                            <b class='text-danger'>Lỗi nạp thẻ</b>
                        </td>


                        <td>
                            <span class="c-font-bold text-info">{{ formatPrice((int)$itemCard->amount) }}</span>
                        </td>

                    </tr>
        @endif
        @endforeach

        @endif
        <tbody>
    </table>
@endif
<!-- END: PAGE CONTENT -->

<div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">

</div>
