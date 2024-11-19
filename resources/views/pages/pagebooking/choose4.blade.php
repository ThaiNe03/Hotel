@extends('layout')
@section('content')

<div id="gdlr-header-substitute" ></div>
<div class="gdlr-page-title-wrapper"  >
   <div class="gdlr-page-title-overlay"></div>
   <div class="gdlr-page-title-container container" >
      <h1 class="gdlr-page-title">Đặt phòng</h1>
   </div>
</div>
<div class="content-wrapper">
  <div class="gdlr-content">
     <div class="with-sidebar-wrapper">
        <div class="with-sidebar-container container gdlr-class-no-sidebar">
           <div class="with-sidebar-left twelve columns">
              <div class="with-sidebar-content twelve columns">
                 <div class="gdlr-item gdlr-item-start-content" id="gdlr-single-booking-content" data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php">
                    <form class="gdlr-reservation-bar" id="gdlr-reservation-bar" data-action="gdlr_hotel_booking">
                       <div class="gdlr-reservation-bar-title">Đặt phòng của bạn</div>
                       <div class="gdlr-reservation-bar-summary-form gdlr-active" id="gdlr-reservation-bar-summary-form" style="display: block;">
                          <div class="gdlr-price-summary-wrapper">
                             <div class="gdlr-price-summary-head">Giảm giá</div>
                             <div class="gdlr-price-room-summary">
                                <div class="gdlr-price-room-summary-title">Phòng 1 : Standard Room – One King Bed</div>
                                <div class="gdlr-price-room-summary-info gdlr-title-font">
                                  <span>Người lớn : 2</span>
                                  <span>Trẻ em : 0</span>
                                  <span class="gdlr-price-room-summary-price" href="#">$90.00</span>
                                </div>
                             </div>
                             <div class="gdlr-service-price-summary">
                                <div class="gdlr-service-price-summary-head">Dịch vụ thêm</div>
                                <div class="gdlr-service-price-summary-item">
                                   <span class="gdlr-head">Wifi<span class="gdlr-sep">/</span>1 phòng</span><span class="gdlr-tail">$14.00</span>
                                   <div class="clear"></div>
                                </div>
                             </div>
                             <div class="gdlr-price-summary-vat">
                                <div class="gdlr-price-summary-vat-total">
                                   <span class="gdlr-head">Thành tiền</span><span class="gdlr-tail">$90.00</span>
                                   <div class="clear"></div>
                                </div>
                                <div class="gdlr-price-summary-vat-amount">
                                   <span class="gdlr-head">Vat 8%</span><span class="gdlr-tail">$7.20</span>
                                   <div class="clear"></div>
                                </div>
                             </div>
                             <div class="gdlr-price-summary-grand-total gdlr-active"><span class="gdlr-head">Tổng cộng</span><span class="gdlr-tail">$97.20</span></div>
                             <div class="gdlr-price-deposit-wrapper">
                                <div class="gdlr-price-deposit-input">
                                </div>
                                <div class="gdlr-price-deposit-inner-wrapper">
                                   <div class="gdlr-price-deposit-title">Trả trước 20%</div>
                                   <div class="gdlr-price-deposit-caption">*Thanh toán phần còn lại khi đến nơi</div>
                                   <div class="gdlr-price-deposit-amount">$19.44</div>
                                </div>
                             </div>
                             <a id="gdlr-edit-booking-button" class="gdlr-edit-booking-button gdlr-button with-border" href="{{route('choose1')}}">Chỉnh sửa đặt phòng</a>
                          </div>
                       </div>
                       <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form" style="display: none; height: auto;">
                          <div class="gdlr-reservation-room gdlr-title-font ">
                             <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                             <div class="gdlr-reservation-room-content">
                                <div class="gdlr-reservation-room-title">Room 1 : Standard Room – One King Bed</div>
                                <div class="gdlr-reservation-room-info"><span>Adult : 2</span><span>Children : 0</span><a data-room="1" class="gdlr-reservation-change-room" href="#">Change Room</a></div>
                             </div>
                             <input type="text" name="gdlr-room-id[]" value="3596">
                          </div>
                       </div>
                       <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form" style="display: none;">
                          <div class="gdlr-reservation-field gdlr-resv-datepicker">
                             <span class="gdlr-reservation-field-title">Check In</span>
                             <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-in" class="gdlr-datepicker hasDatepicker" data-current-date="2024-05-27" autocomplete="off" data-dfm="d M yy" data-block="[]" value="2024-05-27"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2024-05-27"></div>
                          </div>
                          <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
                             <span class="gdlr-reservation-field-title">Nights</span>
                             <div class="gdlr-combobox-wrapper">
                                <select name="gdlr-night" id="gdlr-night">
                                   <option value="1" selected="">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                </select>
                             </div>
                          </div>
                          <div class="clear"></div>
                          <div class="gdlr-reservation-field gdlr-resv-datepicker">
                             <span class="gdlr-reservation-field-title">Check Out</span>
                             <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-out" class="gdlr-datepicker hasDatepicker" data-current-date="2024-05-27" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="2024-05-28"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2024-05-28"></div>
                          </div>
                          <div class="clear"></div>
                          <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                             <span class="gdlr-reservation-field-title">Rooms</span>
                             <div class="gdlr-combobox-wrapper">
                                <select name="gdlr-room-number" id="gdlr-room-number">
                                   <option value="1" selected="">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                </select>
                             </div>
                          </div>
                          <div class="clear"></div>
                          <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper">
                             <div class="gdlr-reservation-people-amount">
                                <div class="gdlr-reservation-people-title">Room <span>1</span></div>
                                <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                   <span class="gdlr-reservation-field-title">Adults</span>
                                   <div class="gdlr-combobox-wrapper">
                                      <select name="gdlr-adult-number[]">
                                         <option value="1">1</option>
                                         <option value="2" selected="">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                                         <option value="9">9</option>
                                      </select>
                                   </div>
                                </div>
                                <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                   <span class="gdlr-reservation-field-title">Children</span>
                                   <div class="gdlr-combobox-wrapper">
                                      <select name="gdlr-children-number[]">
                                         <option value="0">0</option>
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                                         <option value="9">9</option>
                                      </select>
                                   </div>
                                </div>
                                <div class="clear"></div>
                             </div>
                          </div>
                          <div class="clear"></div>
                          <div class="clear"></div>
                       </div>
                       <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form"></div>
                    </form>
                    <div class="gdlr-booking-content">
                       <div class="gdlr-booking-process-bar" id="gdlr-booking-process-bar" data-state="2">
                          <div data-process="1" class="gdlr-booking-process">1. Chọn thời gian</div>
                          <div data-process="2" class="gdlr-booking-process">2. Chọn phòng</div>
                          <div data-process="3" class="gdlr-booking-process">3. Đặt phòng</div>
                          <div data-process="4" class="gdlr-booking-process gdlr-active">4. Xác nhận</div>
                       </div>
                       <div class="gdlr-booking-content-wrapper">
                          <div class="gdlr-booking-content-inner" id="gdlr-booking-content-inner" style="opacity: 1; height: auto;">
                             <div class="gdlr-booking-complete">
                                <div class="gdlr-booking-complete-title">Đặt chỗ đã hoàn tất!</div>
                                <div class="gdlr-booking-complete-caption">Chi tiết đặt phòng của bạn vừa được gửi đến email của bạn. Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi. Cảm ơn!</div>
                                <div class="gdlr-booking-complete-additional"><span style="margin-right: 20px;"><i class="fa fa-phone"></i> +00-011-022-033</span> <span><i class="fa fa-envelope"></i> saleshotelNDT@gmail.com</span></div>
                             </div>
                          </div>
                       </div>
                       <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                 </div>
              </div>
              <div class="clear"></div>
           </div>
           <div class="clear"></div>
        </div>
     </div>
  </div>
  <!-- gdlr-content -->
  <div class="clear" ></div>
</div>


@endsection