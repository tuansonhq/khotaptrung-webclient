@if(isset($status))

    <div class="col-12 left-right background-nick-col-top-ct body-title-detail-span-ct">
        <span>Trạng thái</span>
    </div>
    <div class="col-12 left-right background-nick-col-bottom-ct status-finter-nick">
        <select class="wide status" name="status">
            <option>Chọn</option>
            @foreach($status as $ist => $valst)
                <option value="{{ $ist }}">{{ $valst }}</option>
            @endforeach
        </select>
    </div>

@endif

<script>
    $(document).ready(function (e) {
        $('.wide').niceSelect();
    })

</script>
