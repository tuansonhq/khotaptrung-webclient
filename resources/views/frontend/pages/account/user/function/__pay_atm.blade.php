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
        <tr class="account_content_transaction_history">
            <td width="100%" style="width: 20%">
                <span style="color: red;font-size: 16px;">Không có dữ liệu!</span>
            </td>
        </tr>
    @endif
@endif





