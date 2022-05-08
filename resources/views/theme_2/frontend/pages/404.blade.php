@extends('frontend.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')

    <div class="site-content-body first last bg-white ">
        <div class="row align-items-stretch">
            <div class="col-lg-12">
                <div class="mb-4">
                <div class="alert alert-danger mb-3 text-center" role="alert">
                    <p class="display-6 text-danger mb-0"><i class="las la-frown"></i></p>
                    <h5 class="mb-0">uh oh, có lỗi xảy ra</h5>
                    <p class="mb-0">Xin vui lòng thử lại</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
