@if(isset($data) && count($data) > 0)
    <!--popup work start here-->
    @php
        $total_key_nick = 8;
        $flag_slide_nick = 0;
        if(setting('sys_theme_nick_list') != ''){
            if (setting('sys_theme_nick_list') > 1){
                $total_key_nick = (int)setting('sys_theme_nick_list')*4;
            }elseif (setting('sys_theme_nick_list') == 1){
                $flag_slide_nick = 1;
            }
        }
    @endphp
    <div class="wp_content_post_index__minigame">
        <div class="post_index">
            <div class="d-flex justify-content-between" style="padding-top: 24px; padding-bottom: 16px">
                <div class="main-title">
                    <h2>Danh mục game</h2>
                </div>
                @if($flag_slide_nick == 0)
                    <div class="service-search d-none d-lg-block ">
                        <div class="input-group p-box">
                            <input type="text" id="txtSearchNick" placeholder="Tìm danh mục" value="" class="" width="200px">
                            <span class="icon-search"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                @else
                    <div class="service-search d-none d-lg-block " style="font-size: 14px;line-height: 24px;font-weight: 600">
                        <div class="input-group p-box">
                            <a href="/mua-acc" class="dich__vu__home">Xem tất cả »</a>
                        </div>
                    </div>
                @endif
            </div>

            @if($flag_slide_nick == 0)
                <div class="entries" id="nick__widget" style="padding-bottom: 16px">
                    <div class="row marginauto">

                        <div class="col-md-12 left-right data-nick-search">
                            <span style="color: rgb(238, 70, 35);">Danh mục cần tìm không tồn tại.</span>
                        </div>
                        @php
                            $index = 0;
                        @endphp
                        @foreach($data as $key => $item)
                            @if($key < 8)
                                @php
                                    $index = 1;
                                @endphp
                                <div class="col-md-3 col-sm-6 col-6 list-item list-item-nick item-page-nick-1" style="display: block">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @elseif($key < 16)
                                @php
                                    $index = 2;
                                @endphp
                                <div class="col-md-3 col-sm-6 col-6 list-item list-item-nick item-page-nick-2" style="display: none">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @elseif($key < 24)
                                @php
                                    $index = 3;
                                @endphp
                                <div class="col-md-3 col-sm-6 col-6 list-item list-item-nick item-page-nick-3" style="display: none">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @elseif($key < 32)
                                @php
                                    $index = 4;
                                @endphp
                                <div class="col-md-3 col-sm-6 col-6 list-item list-item-nick item-page-nick-4" style="display: none">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @elseif($key < 40)
                                @php
                                    $index = 5;
                                @endphp
                                <div class="col-md-3 col-sm-6 col-6 list-item list-item-nick item-page-nick-5" style="display: none">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @endif
                        @endforeach

                        @if(count($data) > 8)
                        <button id="btn-expand-serivce-nick" class="expand-button" data-page-current="1" data-page-max="{{ $index }}">
                            Xem thêm danh mục
                        </button>

                        @endif
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#btn-expand-serivce-nick').on('click', function(e) {
                                    var pageCurrrent=$(this).data('page-current');
                                    var pageMax=$(this).data('page-max');
                                    pageCurrrent=pageCurrrent+1;
                                    $('.item-page-nick-'+pageCurrrent).fadeIn( "fast", function() {
                                        // Animation complete
                                    });
                                    $(this).data('page-current',pageCurrrent);
                                    if(pageCurrrent==pageMax){
                                        $(this).remove();
                                    }
                                });

                                $('body').on('click','#btn-expand-nick-search',function(){

                                    var pageCurrrent=$(this).data('page-current');
                                    var pageMax=$(this).data('page-max');
                                    pageCurrrent=pageCurrrent+1;
                                    $('.dis-block').each(function (i,elm) {
                                        if (pageCurrrent == 2){
                                            if (i < 16){
                                                $(this).css('display','block');
                                            }
                                        }else if (pageCurrrent == 3){
                                            if (i < 24){
                                                $(this).css('display','block');
                                            }
                                        }else if (pageCurrrent == 4){
                                            if (i < 32){
                                                $(this).css('display','block');
                                            }
                                        }else if (pageCurrrent == 5){
                                            if (i < 40){
                                                $(this).css('display','block');
                                            }
                                        }
                                    });

                                    $(this).data('page-current',pageCurrrent);
                                    if(pageCurrrent==pageMax){
                                        $(this).remove();
                                    }
                                });

                                $('#txtSearchNick').on('input', function() {

                                    let keyword = convertToSlug($(this).val());

                                    let index = 0;
                                    let value = 0;
                                    $('#nick__widget .list-item-nick').each(function (i,elm) {
                                        $(this).removeClass('dis-block');
                                    })

                                    $('#nick__widget .list-item-nick').each(function (i,elm) {
                                        // $('.body-modal__nick__text-error').css('display','none');
                                        let slug_item = $(elm).find('img').attr('alt');
                                        slug_item = convertToSlug(slug_item);
                                        $(this).toggle(slug_item.indexOf(keyword) > -1);
                                        if (slug_item.indexOf(keyword) > -1){
                                            ++index;
                                            $(this).addClass('dis-block');
                                        }else {

                                        }
                                        $('#btn-expand-serivce-nick').remove();
                                        $('#btn-expand-serivce-nick-search').remove();
                                    })


                                    $('#nick__widget .dis-block').each(function (i,elm) {
                                        if (i>=8){
                                            $(this).css('display','none');
                                        }
                                    })
                                    if (index <= 8){
                                        value = 1;
                                    }else if (index <= 16){
                                        value = 2;
                                    }else if (index <= 24){
                                        value = 3;
                                    }else if (index <= 32){
                                        value = 4;
                                    }else if (index <= 40){
                                        value = 5;
                                    }

                                    if (value > 1){

                                        let htmlnick = '<button id="btn-expand-serivce-nick-search" class="expand-button" data-page-current="1" data-page-max="' + value + '">Xem thêm danh mục</button>';
                                        $('#nick__widget .fix-border-nick').append(htmlnick);
                                    }

                                    if (index == 0){
                                        $('#nick__widget .data-nick-search').css('display','block');
                                    }else {
                                        $('#nick__widget .data-nick-search').css('display','none');
                                    }
                                    //$(this).val() // get the current value of the input field.
                                });

                                function convertToSlug(title) {
                                    var slug;
                                    //Đổi chữ hoa thành chữ thường
                                    slug = title.toLowerCase();
                                    //Đổi ký tự có dấu thành không dấu
                                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                                    slug = slug.replace(/đ/gi, 'd');
                                    //Xóa các ký tự đặt biệt
                                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\<|\'|\"|\:|\;|_/gi, '');
                                    //Đổi khoảng trắng thành ký tự gạch ngang
                                    slug = slug.replace(/ /gi, "-");
                                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                                    slug = slug.replace(/\-\-\-\-/gi, '-');
                                    slug = slug.replace(/\-\-\-/gi, '-');
                                    slug = slug.replace(/\-\-/gi, '-');
                                    //Xóa các ký tự gạch ngang ở đầu và cuối
                                    slug = '@' + slug + '@';
                                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                                    // trả về kết quả
                                    return slug;
                                }

                            });

                        </script>
                    </div>


                    <div class="entries-search">
                        <div class="row fix-border-nick">
                        </div>
                    </div>

                </div>
            @else
                <div class="entries" style="margin-bottom: 0;padding-bottom: 16px">

                    <div class="swiper swiper-container swiper-list-item swiper-service-related overflow-hidden" style="background: none;box-shadow: none">
                        <div class=" swiper-wrapper">
                            @foreach($data as $item)

                                <div class="list-item image swiper-slide">
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}"
                                             alt="{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}" class="list-item-img">
                                        <div class="card-attr">
                                            <div class="text-title fw-700 text-limit limit-1">
                                                {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                            </div>
                                            <div class="info-attr">
                                                @if(isset($item->items_count))
                                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $item->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
                                            </div>

                                        </div>

                                    </a>
                                </div>

                            @endforeach

                        </div>

                        <div class="navigation swiper-list-prev"></div>
                        <div class="navigation swiper-list-next"></div>

                    </div>
                </div>

                <script>
                    let swiper_list_item = new Swiper('.swiper-list-item', {
                        autoplay: false,
                        updateOnImagesReady: true,
                        watchSlidesVisibility: false,
                        lazyLoadingInPrevNext: false,
                        lazyLoadingOnTransitionStart: false,
                        loop: false,
                        centeredSlides: false,
                        slidesPerView: 4,
                        speed: 800,
                        spaceBetween: 0,
                        freeMode: true,
                        touchMove: true,
                        freeModeSticky:true,
                        grabCursor: true,
                        observer: true,
                        observeParents: true,
                        keyboard: {
                            enabled: true,
                        },
                        breakpoints: {

                            992: {
                                slidesPerView: 4,
                            },
                            768: {
                                slidesPerView: 3,
                            },

                            480: {
                                slidesPerView: 1.8,
                                spaceBetween: 6,
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-list-item .navigation.swiper-list-next',
                            prevEl: '.swiper-list-item .navigation.swiper-list-prev',
                        },
                    });
                </script>
            @endif
        </div>
    </div>

@endif
@section('scripts')

@endsection
