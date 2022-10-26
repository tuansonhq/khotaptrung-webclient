<div class="col-3 item_buy_form_search">
    <div class="input-group">
        <span class="input-group-addon">Mã số</span>
        <input name="id" type="text" class="form-control id" placeholder="Mã số">
    </div>
</div>

<div class="col-3 item_buy_form_search">
    <div class="input-group">
        <span class="input-group-addon">Giá tiền</span>

        <select type="text" name="price" class="form-control price">
            <option value="">Chọn giá tiền</option>
            <option value="0-50000">Dưới 50K</option>
            <option value="50000-200000">Từ 50K - 200K</option>
            <option value="200000-500000">Từ 200K - 500K</option>
            <option value="500000-1000000">Từ 500K - 1 Triệu</option>
            <option value="1000000-5000000">Trên 1 Triệu</option>
            <option value="5000000-10000000">Trên 5 Triệu</option>
            <option value="10000000">Trên 10 Triệu</option>
        </select>
    </div>
</div>


@if(isset($dataAttribute))
    @php
        $attribute_set = $dataAttribute;
    @endphp
    @if(isset($attribute_set->attribute_group) && count($attribute_set->attribute_group))
        @php
            $attribute_group = $attribute_set->attribute_group;
        @endphp
        @foreach($attribute_group as $att)
            @if(isset($att->attribute) && count($att->attribute))
                @php
                    $attribute = $att->attribute;
                @endphp

                @foreach($attribute as $item_attribute)

                <div class="col-3 item_buy_form_search">
                    <div class="input-group">
                        <span class="input-group-addon">{{ $item_attribute->title }}</span>

                        <select type="text" class="form-control select" name="attribute_id_{{ $item_attribute->id }}">
                            <option value="">--Không chọn--</option>
                            @foreach($item_attribute->attribute_value as $val_filter)
                                @if($val_filter->parent_id == 0)
                                    <option value="{{ $val_filter->id }}">{{ $val_filter->title }}</option>

                                @endif

                            @endforeach
                        </select>
                    </div>

                </div>
                @endforeach
            @endif
        @endforeach




    @endif
@endif

<div class="col-12 item_buy_form_search pt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <button type="submit" class="btn btn_timkiem" style="position: relative">
                    <span class="btn_timkiem_text">Tìm kiếm</span>
                    <div class="row justify-content-center loading-data__timkiem">

                    </div>
                </button>
                <a href="javascript:void(0)" class="btn btn-danger btn-all" style="position: relative">
                    <span class="btn-all_text">Tất cả</span>
                    <div class="row justify-content-center loading-data__all">

                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-addon">Sắp xếp theo</span>
                        <select type="text" name="sort_by" class="form-control sort_by">
                            <option value="">Chọn cách sắp xếp</option>
                            <option value="random">Ngẫu nhiên</option>
                            <option value="price_start">Giá tiền từ cao đến thấp</option>
                            <option value="price_end">Giá tiền từ thấp đến cao</option>
                            <option value="created_at_start">Mới nhất</option>
                            <option value="created_at_end">Cũ nhất</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

