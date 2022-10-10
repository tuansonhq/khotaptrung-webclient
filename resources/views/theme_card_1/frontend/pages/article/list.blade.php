@extends('frontend.layouts.master')

@section('content')

    <div class="" style="width:100%;position: relative;">
        <div class="divcontent1">
            <div class="left left_list">
                <div class="row">
                    <div class="col-md-12 col-xs-12 main-tintuc-left">

                        <ul class="bread_crumb">
                            <li><a href="/" title="Trang chủ">Trang chủ</a> ›</li>
                            <li class="active"><a href="/blog" title="Tin tức">Tin tức</a></li>
                        </ul>
                        <h1 class="h1_list">Tin tức</h1>
                    </div>

                    <div class="main_list_new" >
                        <div class="blog-item mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="item-blog-img">
                                        <a href="/blog/huong-dan-nap-game-thieu-nien-vo-song-ace-uy-tin" title="Hướng dẫn nạp game Thiếu Niên Vô Song ACE uy tín"><img class="img-fluid" src="/upload-usr/images/1tQA6bhEwI_1664002359.jpg" alt="Hướng dẫn nạp game Thiếu Niên Vô Song ACE uy tín"></a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                    <h3><a href="/blog/huong-dan-nap-game-thieu-nien-vo-song-ace-uy-tin" title="Hướng dẫn nạp game Thiếu Niên Vô Song ACE uy tín">Hướng dẫn nạp game Thiếu Niên Vô Song ACE uy tín</a></h3>
                                    <div class="note-item-blog">
                                        <p><span class="time_list"> 24/09/2022
                                                                                                    <span class="mx-3">|</span> Danh mục : <a href="huong-dan">Hướng dẫn</a>
                                                                                                </span>
                                        </p>
                                        <div class="item-content">
                                            <p>Hướng dẫn cách nạp game Thiếu Niên Vô Song nhanh chóng, giá rẻ. Hướng dẫn mua thẻ game online giá rẻ tại website bán thẻ game uy tín thegarenagiare.com</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <hr>
                        <div class="pull-right pagination">
                            <div class="col-sm-12" style="text-align:right">
                                <div id="paginate-aricles" class="mt-5">
                                    <ul class="pagination pagination-sm">

                                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>



                                        <li class="page-item active"><span class="page-link">1</span></li>
                                        <li class="page-item" ><a class="page-link" href="https://thegarenagiare.com/blog?page=2">2</a></li>




                                        <li class="page-item"><a class="page-link" href="https://thegarenagiare.com/blog?page=2" rel="next">&raquo;</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="right right_list">
                <div class="right-home">

                    <div class="item_news chtg">
                        <div class="divcauhoithuonggap">
                            <h4>Danh mục</h4>
                            <div class="main_news">
                                <div class="tt_news">
                                    <a class="right_news" title="Hướng dẫn" href="/blog/huong-dan">Hướng dẫn</a>
                                </div>

                                <div class="tt_news">
                                    <a class="right_news" title="Tin Tức" href="/blog/tin-tuc">Tin Tức</a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

@endsection
