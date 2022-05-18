@if(isset($datacate) && count($datacate) > 0)
    <div class="input-group">
        <span >Loại dịch vụ</span>
        <select name="key" class="form-control key">
            <option value="">-- Tất cả các dịch vụ --</option>
            @foreach($datacate as $val)
                <option value="{{ $val->slug }}">{{ $val->title }}</option>
            @endforeach
        </select>
    </div>
@endif
