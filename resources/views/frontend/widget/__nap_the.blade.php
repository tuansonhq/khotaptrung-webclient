<form action="{{route('postDeposit')}}" id="form-charge" method="POST">
    @csrf
    <div class="form-group">
        <div class="col-12">
            @if(isset($data))
                <select name="tele_card"  id="tele_card"  class="form-control" >
                    @foreach($data as $key=>$items)
                        <option value="{{$items->title}}" >{{$items->title}}</option>
                    @endforeach
                </select>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-12">
            <select class="form-control " id="tele_amount" name="tele_amount">
                <option value="VIETTEL">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-12">
            <input type="text" placeholder="Mã số thẻ" name="pin" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-12">
            <input type="text" placeholder="Số serial " name="serial" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <div class="input-group" style="width: 100%">
                <input type="text" class="form-control" placeholder="Mã bảo vệ" name="captcha" id="captcha">
                <div class="captcha">
                    <span class="reload"  id="reload">
                        {!! captcha_img() !!}
                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="form-group" style="margin-top: 40px">
        <div class="col-12">
            @if (App\Library\AuthCustom::check())
             <button class="btn btn-submit" type="submit">Nạp thẻ</button>
            @else
                    <a class="btn btn-submit" onclick="window.location.href='/login'">Nạp thẻ</a>

            @endif
        </div>
    </div>

</form>

