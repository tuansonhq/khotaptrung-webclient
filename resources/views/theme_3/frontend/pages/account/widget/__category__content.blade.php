<section>
    <div class="container container-fix body-container-ct">
        <div class="row marginauto body-container-row-ct">
            <div class="col-md-12 left-right">
                <div class="row marginauto body-row-ct footer-row-ct">
                    <div class="col-md-12 left-right">
                        <span>Chi tiết dịch vụ</span>
                    </div>
                    <div class="col-md-12 left-right footer-row-col-ct content-video-in content-video-in-add">
                        @if(isset($data->custom->content))
                            {!!  $data->custom->content !!}
                        @else
                            @if(isset($data->content))
                                {!!  $data->content !!}
                            @else

                            @endif
                        @endif
                    </div>

                    <div class="col-md-12 left-right text-center js-toggle-content noselect">
                        <div class="view-more">
                            <a href="javascript:void(0)" class="global__link__default">Xem thêm<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/svg/xemthem.svg)"></i></a>
                        </div>
                        <div class="view-less">
                            <a href="javascript:void(0)" class="global__link__default">Thu gọn<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/svg/rutgon.svg)"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
