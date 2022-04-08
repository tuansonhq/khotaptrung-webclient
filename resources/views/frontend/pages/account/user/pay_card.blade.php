@extends('frontend.layouts.master')
@push('style')
@endpush
@push('js')
<script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge.js"></script>
@endpush
@section('content')
<div class="account">
   <div class="account_content">
      <div class="container">
         @include('frontend.pages.account.sidebar')
         <div class="account_sidebar_content">
            <div class="account_pay_card">
               <div class="account_sidebar_content_title">
                  <p>NẠP THẺ</p>
                  <div class="account_sidebar_content_line"></div>
               </div>
               @if (setting('sys_charge_content') != "")
               <div class="alert alert-primary" role="alert">
                  {!! setting('sys_charge_content') !!}

               </div>
               @endif
               <div class="row justify-content-center" id="loading-data">
                   <div class="loading"></div>
                </div>
            <div class="col-auto pl-0 pr-0 hide" id="form-content">
               <form action="{{route('postTelecomDepositAuto')}}" method="POST" class="form-charge" id="form-charge">
                  @csrf
{{--                   <div class="form-group row">--}}
{{--                    <label class="col-md-3 control-label">--}}
{{--                    Tài khoản--}}
{{--                    </label>--}}
{{--                    <div class="col-md-6">--}}
{{--                       <div class="input-group" style="width: 100%">--}}
{{--                          <input class="form-control" id="username" value="" readonly>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                 </div>--}}
                 <div class="form-group row ">
                    <label class="col-md-3 control-label">
                     Loại thẻ:
                    </label>
                    <div class="col-md-6">
                       <div class="input-group" style="width: 100%">
                        <select id="telecom" name="type" class="form-control">

                        </select>
                       </div>
                    </div>
                 </div>
                 <div class="form-group row">
                    <label class="col-md-3 control-label">
                    Mệnh giá:
                    </label>
                    <div class="col-md-6">
                       <div class="input-group" style="width: 100%">
                          <select name="amount" id="amount" class="form-control">

                          </select>
                       </div>
                    </div>
                 </div>
                  <div class="form-group row">
                     <label class="col-md-3 control-label">
                     Mã số thẻ:
                     </label>
                     <div class="col-md-6">
                        <div class="input-group" style="width: 100%">
                           <input type="text" class="form-control" name="pin" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 control-label">
                     Số Serial:
                     </label>
                     <div class="col-md-6">
                        <div class="input-group" style="width: 100%">
                           <input type="text" class="form-control"  name="serial" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 control-label">
                     Mã bảo vệ:
                     </label>
                     <div class="col-md-6">
                        <div class="input-group" style="width: 100%">
                           <input type="text" class="form-control" name="captcha" id="captcha" required>
                           <div class="captcha">
                              <span class="reload"  id="reload">
                              {!! captcha_img() !!}
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row " style="margin: 20px 0">
                     <div class="col-md-6" style="    margin-left: 25%;">
                        <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block " type="submit">Nạp thẻ</button>
                     </div>
                  </div>
               </form>
            </div>
            </div>

             <div class="paycartdata">
                 @include('frontend.pages.account.user.function.__pay_card')
             </div>
         </div>
      </div>
   </div>
</div>
<input type="hidden" name="hidden_page_ls" id="hidden_page_service_nt" class="hidden_page_service_nt" value="1" />
@endsection
