@if(isset($data) && count($data) > 0)
    <!--popup work start here-->
    <div class="d-flex justify-content-between" style="padding-top: 24px; padding-bottom: 16px">
        <div class="main-title">
            <h1>Danh mục game</h1>
        </div>
        <div class="service-search d-none d-lg-block ">
            <div class="input-group p-box">
                <input type="text" id="txtSearchNick" placeholder="Tìm danh mục" value="" class="" width="200px">
                <span class="icon-search"><i class="fas fa-search"></i></span>
            </div>
        </div>
    </div>

    <div class="entries">
        <div class="row fix-border fix-border-nick">
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
                            <h2 class="text-title text-left">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</h2>

                            @if(isset($item->items_count))
                                @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                @else
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ $item->items_count }} </p>
                                @endif

                            @else
                                <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: 0 </p>
                            @endif
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
                            <h2 class="text-title text-left">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</h2>

                            @if(isset($item->items_count))
                                @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                @else
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ $item->items_count }} </p>
                                @endif

                            @else
                                <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: 0 </p>
                            @endif
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
                            <h2 class="text-title text-left">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</h2>

                            @if(isset($item->items_count))
                                @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                @else
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ $item->items_count }} </p>
                                @endif

                            @else
                                <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: 0 </p>
                            @endif
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
                            <h2 class="text-title text-left">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</h2>

                            @if(isset($item->items_count))
                                @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                @else
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ $item->items_count }} </p>
                                @endif

                            @else
                                <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: 0 </p>
                            @endif
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
                            <h2 class="text-title text-left">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</h2>

                            @if(isset($item->items_count))
                                @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                @else
                                    <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: {{ $item->items_count }} </p>
                                @endif

                            @else
                                <p class="text-left" style="margin-bottom: 0;margin-top: 4px">Số tài khoản: 0 </p>
                            @endif
                        </a>
                    </div>
                @endif
            @endforeach


            <button id="btn-expand-serivce-nick" class="expand-button" data-page-current="1" data-page-max="{{ $index }}">
                Xem thêm danh mục
            </button>


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

                    $('#txtSearchNick').on('input', function() {

                        let keyword = convertToSlug($(this).val());

                        let index = 0;
                        let value = 0;
                        $('.list-item-nick').each(function (i,elm) {
                            $(this).removeClass('dis-block');
                        })

                        $('.list-item-nick').each(function (i,elm) {
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


                        $('.dis-block').each(function (i,elm) {
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
                            $('.fix-border-nick').append(htmlnick);
                        }

                        if (index == 0){
                            $('.data-nick-search').css('display','block');
                        }else {
                            $('.data-nick-search').css('display','none');
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
            <div class="row fix-border ">
            </div>
        </div>

    </div>
@endif
