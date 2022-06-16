
@if(isset($config))
<div class="col-12 left-right background-nick-col-top-ct body-title-detail-span-ct">
    <span>Loại giao dịch</span>
</div>
<div class="col-12 left-right background-nick-col-bottom-ct transaction-finter-nick">
    <select class="wide config" name="config">
        <option>Chọn</option>
        @foreach($config as $i => $val)
            <option value="{{ $i }}">{{ $val }}</option>
        @endforeach
    </select>
</div>
@endif
