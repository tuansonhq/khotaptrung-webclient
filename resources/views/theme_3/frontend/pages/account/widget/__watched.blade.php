
<div class="container container-fix body-container-ct tk_watched">
        <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
            <div class="col-md-12 left-right">
                <div class="row marginauto body-row-ct media-ctbg-ct">

                    <div class="col-md-12 left-right napgamekhac">
                        <div class="row marginauto">
                            <div class="col-md-12 text-left left-right">
                                <span>Tài khoản đã xem</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right">
                        <div class="row nick-sider-header">
                            <div class="swiper-container view_dong_gia col-md-12 text-left left-right">
                                <div class="swiper-wrapper data_watched">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


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
                    html += '<div class="swiper-slide body-detail-nick-slider-ct">';
                        html += '<a href="/acc/' +randId_c + '" class="list-item-nick-hover">';
                            html += '<div class="row marginauto ">';
                                html += '<div class="col-md-12 left-right default-overlay-nick-ct related-acc-detail"><img class="lazy" src="' + image_c + '" alt=""></div>';
                                html += '<div class="col-md-12 left-right list-item-nick">';
                                    html += '<div class="row marginauto list-item-nick-body">';
                                        html += '<div class="col-md-12 left-right text-left body-detail-account-col-span-ct"><span>ID: ' +randId_c + '</span></div>';
                                        html += '<div class="col-md-12 left-right text-left body-detail-account-small-span-ct"><small>Đã bán: ' +buy_account_c + '</small></div>';
                                        html += '<div class="col-md-12 left-right text-left body-detail-account-small-span-ct">';
                                            html += '<ul>';
                                                html += '<li class="fist-li-account">' + price_c + 'đ</li>';
                                                html += '<li class="second-li-account">' + price_old_c + 'đ</li>';
                                                html += '<li class="three-li-account">-' + promotion_c + '%</li>';
                                            html += '</ul>';
                                        html += '</div>';
                                    html += '</div>';
                                html += '</div>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                // })

            })

            $('.data_watched').html('');
            $('.data_watched').html(html);
            $('.tk_watched').fadeIn();

            var view_dong_gia = new Swiper('.view_dong_gia', {
                autoplay: false,
                // preloadImages: false,
                updateOnImagesReady: true,
                // lazyLoading: false,
                watchSlidesVisibility: false,
                lazyLoadingInPrevNext: false,
                lazyLoadingOnTransitionStart: false,
                freeMode:true,
                loop: false,
                centeredSlides: false,
                slidesPerView: 4.5,
                speed: 800,
                spaceBetween: 0,
                touchMove: true,
                freeModeSticky:true,
                grabCursor: true,
                observer: true,
                observeParents: true,
                breakpoints: {
                    992: {
                        slidesPerView: 3.2,
                    },
                    768:{
                        slidesPerView: 2.5,
                    },
                    480: {
                        slidesPerView: 1.8,

                    }
                }
            });
        }



    })
</script>


