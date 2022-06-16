<div class="col-lg-3 col-12 navbar-media body-container-detail-left-ct">
    <div class="row marginauto">
        {{--Bắt đầu vòng lặp --}}
        @include('frontend.widget.__menu_profile')

    </div>
</div>

@if(Request::is('profile'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_profile').addClass('active')
        })
    </script>

@elseif(Request::is('change-password'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_change-password').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-giao-dich'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-giao-dich').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-nap-the'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-nap-the').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-dich-vu'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-dich-vu').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-mua-nick'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-mua-nick').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-tra-gop'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-tra-gop').addClass('active')
        })
    </script>
@elseif(Request::is('the-cao-da-mua'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_the-cao-da-mua').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-atm-tu-dong'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-atm-tu-dong').addClass('active')
        })
    </script>
@elseif(Request::is('the-cao-da-mua/detail'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_the-cao-da-mua').addClass('active')
        })
    </script>
@elseif(Request::is('rut-vat-pham'))
<script>
    $(document).ready(function (e) {
        $('.add-active_withdraw-items').addClass('active')
    })
</script>
@elseif(Request::is('lich-su-quay-thuong'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-quay-thuong').addClass('active')
        })
    </script>
@elseif(Request::is('rut-tien'))
<script>
    $(document).ready(function (e) {
        $('.add-active_withdraw-money').addClass('active')
    })
</script>
@endif

