
<div class="row justify-content-center" id="loading-data">
    <div class="loading"></div>
</div>
<div class="" id="form-content" style="display: none">
    <form action="{{route('postTelecomDepositAuto')}}" id="form-charge" method="POST">
        @csrf

        <div class="form-group">
            <div class="col-12">
                <select name="type"  id="telecom"  class="form-control" >

                </select>

            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <select class="form-control " id="amount" name="amount">

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

                    <div class="captcha_trangchu">
                        <span class="reload"  id="">
                            {!! captcha_img() !!}
                        </span>

                    </div>
                    <div type="button" class="btn reload"  id="reload_trangchu" style="color: red;background: #1f2228 !important;border: 1px solid #30343c;">
                        &#x21bb;
                    </div>
                </div>
            </div>

        </div>
        <div class="form-group" >
            <div class="col-12" id="form-charge-submit">
             @if (App\Library\AuthCustom::check())
                <button class="btn btn-submit" type="submit">Nạp thẻ</button>
            @else
                <button class="btn btn-submit"  onclick="window.location.href='/login'">Nạp thẻ</button>
            @endif
            </div>
        </div>

    </form>
</div>

