
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
            <tr>
                <td>00:16:20</td>

                <td>
                    Nạp tự động
                </td>
                <td>GARENA</td>
                <td>223036547055536</td>
                <td>20000164737782</td>
                <td>100,000</td>

                <td>

                    <b class='text-danger'>Lỗi nạp thẻ</b>

                </td>


                <td>
                    <span class="c-font-bold text-info">+0đ</span>
                </td>

            </tr>
        @endforeach

    @endif
    <tbody>
</table>
@endif
<!-- END: PAGE CONTENT -->

<div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">

</div>
