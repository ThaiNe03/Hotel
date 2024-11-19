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
                        <div class="gdlr-reservation-bar-summary-form" id="gdlr-reservation-bar-summary-form"></div>
                        <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form"></div>
                        <div class="gdlr-reservation-bar-room-form gdlr-active" id="gdlr-reservation-bar-room-form" style="display: block;">
                           <div class="gdlr-reservation-room gdlr-title-font gdlr-active">
                              <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                              <div class="gdlr-reservation-room-content">
                                 <div class="gdlr-reservation-room-title">Phòng 1 : Standard Room – One King Bed</div>
                                 <div class="gdlr-reservation-room-info"><span>Người lớn : 2</span><span>Trẻ em : 0</span></div>
                                 <a data-room="1" class="gdlr-reservation-change-room" href="{{route('choose1')}}">Thay đổi phòng</a>
                              </div>
                              <input type="text" name="gdlr-room-id[]" value="">
                           </div>
                        </div>
                        <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                           <div class="gdlr-reservation-field gdlr-resv-datepicker">
                              <span class="gdlr-reservation-field-title">Check In</span>
                              <div class="gdlr-datepicker-wrapper">
                                 <input type="text"  id="gdlr-check-in" class="gdlr-datepicker" data-current-date="2024-05-27" autocomplete="off" data-dfm="d M yy" data-block="[]" value="29 May 2024" />
                                 <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2024-05-27" />
                              </div>
                           </div>
                           <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
                              <span class="gdlr-reservation-field-title">Đêm</span>
                              <div class="gdlr-combobox-wrapper">
                                 <select name="gdlr-night" id="gdlr-night" >
                                    <option value="1" selected >1</option>
                                    <option value="2"  >2</option>
                                    <option value="3"  >3</option>
                                    <option value="4"  >4</option>
                                    <option value="5"  >5</option>
                                    <option value="6"  >6</option>
                                    <option value="7"  >7</option>
                                    <option value="8"  >8</option>
                                    <option value="9"  >9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="clear">
                           </div>
                           <div class="gdlr-reservation-field gdlr-resv-datepicker">
                              <span class="gdlr-reservation-field-title">Check Out</span>
                              <div class="gdlr-datepicker-wrapper">
                                 <input type="text"  id="gdlr-check-out" class="gdlr-datepicker" data-current-date="2024-05-27" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="30 May 2024" />
                                 <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2024-05-28" />
                              </div>
                           </div>
                           <div class="clear">
                           </div>
                           <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                              <span class="gdlr-reservation-field-title">Số lượng phòng</span>
                              <div class="gdlr-combobox-wrapper">
                                 <select name="gdlr-room-number" id="gdlr-room-number" >
                                    <option value="1" selected >1</option>
                                    <option value="2"  >2</option>
                                    <option value="3"  >3</option>
                                    <option value="4"  >4</option>
                                    <option value="5"  >5</option>
                                    <option value="6"  >6</option>
                                    <option value="7"  >7</option>
                                    <option value="8"  >8</option>
                                    <option value="9"  >9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper" >
                              <div class="gdlr-reservation-people-amount">
                                 <div class="gdlr-reservation-people-title" >Phòng <span>1</span></div>
                                 <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                    <span class="gdlr-reservation-field-title">Người lớn</span>
                                    <div class="gdlr-combobox-wrapper">
                                       <select name="gdlr-adult-number[]" >
                                          <option value="1"  >1</option>
                                          <option value="2" selected >2</option>
                                          <option value="3"  >3</option>
                                          <option value="4"  >4</option>
                                          <option value="5"  >5</option>
                                          <option value="6"  >6</option>
                                          <option value="7"  >7</option>
                                          <option value="8"  >8</option>
                                          <option value="9"  >9</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                    <span class="gdlr-reservation-field-title">Trẻ em</span>
                                    <div class="gdlr-combobox-wrapper">
                                       <select name="gdlr-children-number[]" >
                                          <option value="0"  >0</option>
                                          <option value="1"  >1</option>
                                          <option value="2"  >2</option>
                                          <option value="3"  >3</option>
                                          <option value="4"  >4</option>
                                          <option value="5"  >5</option>
                                          <option value="6"  >6</option>
                                          <option value="7"  >7</option>
                                          <option value="8"  >8</option>
                                          <option value="9"  >9</option>
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
                           <div data-process="2" class="gdlr-booking-process gdlr-active">2. Chọn phòng</div>
                           <div data-process="3" class="gdlr-booking-process">3. Đặt phòng</div>
                           <div data-process="4" class="gdlr-booking-process">4. Xác nhận</div>
                        </div>
                        <div class="gdlr-booking-content-wrapper">
                           <div class="gdlr-room-selection-complete">
                              <div class="gdlr-room-selection-title">Lựa chọn phòng đã hoàn tất</div>
                              <div class="gdlr-room-selection-caption">Bạn có thể chỉnh sửa đặt chỗ của mình bằng cách sử dụng bảng bên trái</div>
                              <div class="gdlr-room-selection-divider"></div>
                              <div class="gdlr-booking-service-wrapper">
                                 <span class="gdlr-booking-service-head">Vui lòng chọn các dịch vụ bổ sung ưa thích của bạn. (không bắt buộc)</span> 
                                 <form class="gdlr-booking-service-form" method="post" data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php">
                                    <div class="gdlr-room-service-option"><label class="gdlr-room-service-checkbox "><input type="checkbox" name="service-select[]" value="4160"></label><span class="gdlr-room-service-title">Wifi</span><input type="hidden" name="service-amount[]" value="1" disabled=""><span class="gdlr-room-service-unit">$14.00<span class="sep">/</span>Phòng<span class="sep">/</span>Đêm</span></div>
                                    <div class="gdlr-room-service-option"><label class="gdlr-room-service-checkbox "><input type="checkbox" name="service-select[]" value="4159"></label><span class="gdlr-room-service-title">Bãi đậu xe</span><input type="text" name="service-amount[]" value="1" disabled=""><span class="gdlr-room-service-title">Xe</span><span class="gdlr-room-service-unit">$9.00<span class="sep">/</span>Xe<span class="sep">/</span>Đêm</span></div>
                                 </form>
                              </div>
                              <div class="gdlr-room-selection-divider"></div>
                              <a href="{{route('choose3')}}" class="gdlr-button with-border gdlr-room-selection-next">Bước tiếp theo</a>
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
<div class="clear"></div>
</div>

@endsection