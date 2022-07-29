@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container" id="account-list">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc" class="breadcrumb-link">Shop Account</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc/id" class="breadcrumb-link">Danh sách Nick Liên Quân</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/mua-acc" class="link-back"></a>

            <h1 class="head-title text-title">Shop Account</h1>

            <a href="/" class="home"></a>
        </div>

        {{--            Slider baner    --}}
        @include('frontend.widget.__slider__banner')

{{--        Danh sách acount    --}}
        @include('frontend.pages.account.widget.__datalist')
{{--  Danh mục nick khác   --}}
        @include('frontend.pages.account.widget.__related__category')

        {{--            Dịch vụ khác   --}}
        @include('frontend.widget.__services__other')

    </div>
@endsection


