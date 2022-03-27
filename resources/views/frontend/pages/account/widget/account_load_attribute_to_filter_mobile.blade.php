@if(isset($dataAttribute) && count($dataAttribute) > 0)
    @foreach($dataAttribute as $val)
        {{--        @dd($val)--}}
        @if($val->position == 'select')
            <div class="col-12 item_buy_form_search">
                <div class="input-group">
                    <span class="input-group-addon">{{ $val->title }}</span>
                    <select type="text" class="form-control select-mobile" name="attribute_id_{{ $val->id }}">
                        <option value="">--Không chọn--</option>
                        @foreach($val->childs as $child)
                            <option value="{{ $child->id }}">{{ $child->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
    @endforeach
@endif


