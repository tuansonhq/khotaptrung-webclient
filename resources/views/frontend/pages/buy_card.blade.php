@extends('frontend.layouts.master')
@push('js')
    <script src="/assets/frontend/js/charge/charge.js"></script>
@endpush
@section('content')
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
   <div class="container">
   </div>
   <div class="text-center" style="margin-bottom: 50px;">
      <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ MUA THẺ </h2>
   </div>
   <form method="POST" action="{{route('postStoreCard')}}" id="formStoreCard">
      @csrf
      <div class="container detail-service">
         <div class="row">
            <div class="col-md-8" style="margin-bottom:20px;">
               <div class="service-info">
                  <div class="row">
                     <div class="col-md-5 d-none d-md-block d-lg-block">
                        <div class="">
                           <div class="news_image">
                              <img src="https://nick.vn/assets/frontend/images/store-card.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="mb-2 control-label bb"><strong>Chọn nhà mạng:</strong> </div>
                        <div class="mb-3">
                           <select name="telecom_key" id="telecom_key" class="server-filter form-control t14" style="">

                           </select>
                        </div>
                        <div class="mb-2 control-label bb"><strong>Mệnh giá:</strong> </div>
                        <div class="mb-3">
                           <select name="amount" id="amount" class="server-filter form-control t14" style="">

                           </select>
                        </div>
                        <div class="mb-2 control-label bb"><strong>Số lượng:</strong></div>
                        <div class="mb-3">
                           <select name="quantity" id="quantity" class="server-filter form-control t14" style="">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-12">
                     <div class=" emply-btns text-center">
                        <a id="txtPrice" style="font-size: 20px;font-weight: bold" class="">Tổng: 0 VNĐ</a>
                        <button id="btnPurchase" type="submit" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                     </div>
                  </div>
               </div>
               <div class="row box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
<div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center;margin: auto">Xác nhận thông tin thanh toán</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <p> Bạn thực sự muốn thanh toán?</p>
         </div>
         <div class="modal-footer">
            <button type="button" data-dismiss="modal" id="ok" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold " style="">Xác nhận thanh toán</button>
            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
         </div>
      </div>
   </div>
</div>
@endsection