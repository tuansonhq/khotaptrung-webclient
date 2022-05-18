@if(isset($datacategory) && count($datacategory) > 0)
    <div class="input-group">
        <span >Game</span>
        <select name="key" class="form-control key">
            <option value="">--Tất cả game--</option>
            @foreach($datacategory as $val)
                <option value="{{ $val->slug }}">{{ $val->title }}</option>
            @endforeach
        </select>
    </div>
@endif
