
@if(empty($data->data))
@dd($data)
<div class="col-md-12 left-right">
    <table class="table table-striped table-hover table-logs" id="table-default">
        <thead>
        <tr>
            <th>Thời gian</th>
            <th>Chủ tài khoản</th>
            <th>Ngân hàng</th>
            <th>Số tài khoản</th>
            <th>Tiền</th>
            <th>THực nhận</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-danger">Thất bại</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-warning">Chờ xử lý</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>
        <tr>
            <td>09-02-2022 08:32</td>
            <td>Chim sẻ đi nắng</td>

            <td>Techcombank</td>
            <td>
                1903 204 9988 123
            </td>

            <td>
                1.000.000 đ
            </td>
            <td>
                970.000 đ
            </td>
            <td><span class="badge badge-success">Thành công</span></td>
        </tr>

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

