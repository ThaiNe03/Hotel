@extends('layout')
@section('content')
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
                                 <div class="gdlr-reservation-room-title">Phòng 1 : </div>
                                 <div class="gdlr-reservation-room-info"><span>Người lớn : 2</span><span>Trẻ em : 0</span></div>
                              </div>
                              <input type="text" name="gdlr-room-id[]" value="">
                           </div>
                        </div>
                        <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                           <div class="gdlr-reservation-field gdlr-resv-datepicker">
                              <span class="gdlr-reservation-field-title">Check In</span>
                              <div class="gdlr-datepicker-wrapper">
                                 <input type="text" class="gdlr-datepicker" data-current-date="29/05/2024" autocomplete="off" data-dfm="dd/mm/yy" data-block="[]" value="29/05/2024" />
                                 <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="29/05/2024" />
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