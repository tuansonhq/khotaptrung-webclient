@if(isset($config))
    <div class="input-group">
        <span >Giao dịch</span>
        <select name="config" class="form-control config">
            <option value="">--Tất cả --</option>
            @foreach($config as $i => $val)
                <option value="{{ $i }}">{{ $val }}</option>
            @endforeach
        </select>
    </div>
@endif
