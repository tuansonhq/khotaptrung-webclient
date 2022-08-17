<section class="section-category watched tk_watched">
    <div class="section-header c-mb-24 c-mb-lg-16">
        <h2 class="section-title fz-lg-15">
            {{--            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/1362.svg)"></i>--}}
            Tài khoản đã xem
        </h2>
        <a href="" class="link arr-right ml-auto">Xem thêm</a>
    </div>

    <!-- Đặt tên class cho swiper sau đó config trong file "public/assets/frontend/{{theme('')->theme_key}}/js/swiper-slider-conf/swiper-slider-conf.js" -->
    <!-- Nếu có giao diện giống nhau hoàn toàn thì có thể dùng chung config (chung tên class 'class-config-demo') -->

    <div class="swiper class-config-account-viewed">
        <div class="swiper-wrapper data_watched">

{{--            <div class="swiper-slide">--}}
{{--                <div class="item-category">--}}
{{--                    <div class="card">--}}
{{--                        <a href="/acc/id" class="card-body scale-thumb c-p-16 c-p-lg-12">--}}
{{--                            <div class="account-thumb c-mb-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/image 2.png" alt="" class="account-thumb-image"></div>--}}
{{--                            <div class="account-title"><div class="text-title fw-700 text-limit limit-1">Nick Freefire random....</div></div>--}}
{{--                            <div class="account-info c-mb-8">--}}
{{--                                <div class="info-attr">Đã bán: 45.000</div>--}}
{{--                                <div class="info-attr">ID: #451234</div>--}}
{{--                            </div>--}}
{{--                            <div class="price">--}}
{{--                                <div class="price-current w-100">250.000đ</div>--}}
{{--                                <div class="price-old c-mr-8">250.000đ</div>--}}
{{--                                <div class="discount">10%</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>
        <div class="navigation slider-next"></div>
        <div class="navigation slider-prev"></div>
    </div>

</section>

<script>
    $(document).ready(function(){

        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        let cookies_new = getCookie('for_you_nick');

        if (cookies_new){

            let n_cookies =  cookies_new.split(',');


            var html = '';
            n_cookies = n_cookies.reverse();
            $.each(n_cookies,function(n_key,n_value){

                let s_cookies = n_value.split('|');
                let image_c = '';
                let category_c = '';
                let randId_c = '';
                let price_c = '';
                let price_old_c = '';
                let promotion_c = '';
                let buy_account_c = '';

                if (s_cookies[0]){
                    image_c = s_cookies[0];
                }

                if (s_cookies[1]){
                    category_c = s_cookies[1];
                }

                if (s_cookies[2]){
                    randId_c = s_cookies[2];
                }

                if (s_cookies[3]){
                    price_c = s_cookies[3];
                }

                if (s_cookies[4]){
                    price_old_c = s_cookies[4];
                }

                if (s_cookies[5]){
                    promotion_c = s_cookies[5];
                }

                if (s_cookies[6]){
                    buy_account_c = s_cookies[6];
                }

                // $.each(s_cookies,function(s_key,s_value){
                    html += '<div class="swiper-slide">';
                        html += '<div class="item-category">';
                            html += '<div class="card">';
                                html += '<a href="/acc/' +randId_c + '" class="card-body scale-thumb c-p-16 c-p-lg-12">';
                                    html += '<div class="account-thumb c-mb-8"><img src="' + image_c + '" alt="" class="account-thumb-image lazy"></div>';
                                    html += '<div class="account-title"><div class="text-title fw-700 text-limit limit-1">' + category_c + '</div></div>';
                                    html += '<div class="account-info c-mb-8">';
                                        html += '<div class="info-attr">Đã bán: ' + buy_account_c + '</div>';
                                        html += '<div class="info-attr">ID: #' + randId_c + '</div>';
                                    html += '</div>';
                                    html += '<div class="price">';
                                        html += '<div class="price-current w-100">' + price_c + 'đ</div>';
                                        html += '<div class="price-old c-mr-8">' + price_old_c + 'đ</div>';
                                        html += '<div class="discount">' + promotion_c + '%</div>';
                                    html += '</div>';
                                html += '</a>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                // })

            })

            $('.data_watched').html('');
            $('.data_watched').html(html);
            $('.tk_watched').fadeIn();
        }

    })
</script>


