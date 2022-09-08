@if($paginatedItems)
    @foreach($result->withdraw_history->data as $item)
        <div class="history-item row no-gutters">
            <div class="col-2 history-item-data data-left">
                <p>{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</p>
            </div>
            <div class="col-2 history-item-data data-left">
                <p>#{{$item->id}}</p>
            </div>
            <div class="col-3 history-item-data data-right">
                <p>{{$item->price}}</p>
            </div>
            <div class="col-3 history-item-data data-right">
                <p>
                    @if ($item->content != "")
                        <button type="submit" data-msg="{{$item->content}}" class="btn btn-xs c-btn-square m-b-10 btn-success proccess_toggle" rel="{{$item->id}}" >Tiến độ</button>
                    @endif
                </p>
            </div>
            <div class="col-2 history-item-data data-right">
                @if ($item->status == 0)
                    <a class="btn btn-xs c-btn-square m-b-10 btn-warning">{{config('constants.withdraw_status.0')}}</a>
                @elseif($item->status == 1 )
                    <span class="status-success">{{config('constants.withdraw_status.1')}}</span>
                @elseif($item->status == 2 )
                    <span class="status-failed">{{config('constants.withdraw_status.2')}}</span>
                @elseif($item->status == 3 )
                    <span class="status-failed">{{config('constants.withdraw_status.3')}}</span>
                @endif

            </div>
        </div>
    @endforeach
@else
    <div class="history-item empty-state row no-gutters">
        <p>Tài khoản của quý khách chưa phát sinh giao dịch.</p>
    </div>
@endif
