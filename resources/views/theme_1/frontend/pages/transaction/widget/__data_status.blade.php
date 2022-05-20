@if(isset($status))
    <div class="input-group">
        <span >Trạng thái</span>
        <select name="status" class="form-control status">
            <option value="">--Tất cả --</option>
            @foreach($status as $ist => $valst)
                <option value="{{ $ist }}">{{ $valst }}</option>
            @endforeach
        </select>
    </div>
@endif
