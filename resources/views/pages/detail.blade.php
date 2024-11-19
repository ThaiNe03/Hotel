@extends('layout')
@section('content')

<style>
.gdlr-room-content{
	margin-left: 358px; 
}
.gdlr-head {
    font-weight: 700;
    margin-right: 10px;
}
.gdlr-tail {
    font-style: italic;
}
</style>
<style>
	table {
    width: 63%;
    text-align: left;
		margin-left: 358px; 
}
	#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}
	#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
	}
	#customers tr:nth-child(even){background-color: #f2f2f2;}
	#customers tr:hover {background-color: #ddd;}
	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #252525;
		color: white;
	}
	</style>

<div id="gdlr-header-substitute" ></div>
               <div class="gdlr-page-title-wrapper"  >
                  <div class="gdlr-page-title-overlay"></div>
                  <div class="gdlr-page-title-container container" >
                     <h3 class="gdlr-page-title">Standard Room &#8211; One King Bed</h3>
                  </div>
               </div>
               <!-- is search -->	
               <div class="content-wrapper">
                  <div class="gdlr-content">
                     <div class="with-sidebar-wrapper">
                        <div class="with-sidebar-container container gdlr-class-no-sidebar">
                           <div class="with-sidebar-left twelve columns">
                              <div class="with-sidebar-content twelve columns">
                                 <div class="gdlr-item gdlr-item-start-content ">
                                    <div id="room-3596" class="post-3596 room type-room status-publish has-post-thumbnail hentry room_category-room room_tag-luxury room_tag-room room_tag-standard">
                                       <form class="gdlr-reservation-bar" id="gdlr-reservation-bar" data-action="gdlr_hotel_booking" method="post" action="https://demo.goodlayers.com/hotelmaster/dark/?booking"  >
                                          <div class="gdlr-reservation-bar-title">Chọn phòng của bạn</div>
                                          <div class="gdlr-reservation-bar-summary-form" id="gdlr-reservation-bar-summary-form"></div>
                                          <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form"></div>
                                          <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                                             <div class="gdlr-reservation-field gdlr-resv-datepicker">
                                                <span class="gdlr-reservation-field-title">Check In</span>
                                                <div class="gdlr-datepicker-wrapper">
																									<input type="text"  id="gdlr-check-in" class="gdlr-datepicker" data-current-date="2024-05-30" autocomplete="off" data-dfm="d M yy" data-block="[]" value="30 May 2024" />
																									<input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2024-05-30" /></div>
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
                                             <div class="clear"></div>
                                             <div class="gdlr-reservation-field gdlr-resv-datepicker">
                                                <span class="gdlr-reservation-field-title">Check Out</span>
                                                <div class="gdlr-datepicker-wrapper">
																									<input type="text"  id="gdlr-check-out" class="gdlr-datepicker" data-current-date="2024-05-30" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="31 May 2024" />
																									<input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="31 May 2024" /></div>
                                             </div>
                                             <div class="clear"></div>
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
                                             <input type="hidden" name="hotel_data" value="1" >
																						 <a class="gdlr-reservation-bar-button gdlr-button with-border" href="{{route('choose2')}}" >Kiểm tra</a>
                                             <div class="clear"></div>
                                          </div>
                                          <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form"></div>
                                          <input type="hidden" name="single-room" value="3596" />
                                       </form>
                                       <div class="gdlr-room-main-content ">
                                          <div class="gdlr-room-thumbnail gdlr-single-room-thumbnail">
                                             <a href="#" data-rel="fancybox" >
																							<img src="{{asset('frontend/anh/1doi.png')}}" alt="" width="750" height="330" /></a>										
                                          </div>
                                          <div class="gdlr-room-title-wrapper">
                                             <h3 class="gdlr-room-title">STANDARD ROOM – ONE KING BED</h3>
                                             <div class="gdlr-room-price"><span class="gdlr-head">Giá chỉ từ </span><span class="gdlr-tail" style="color: #74b7d3"> $90.00 / Đêm</span></div>
                                             <div class="clear"></div>
                                          </div>
																					<br><br>
																					<table id="customer">
																						<tr>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Giường </span>
																									<span class="gdlr-tail">1 Giường vua</span>
																								</div>
																							</td>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Tối đa </span>
																									<span class="gdlr-tail">3 Người</span>
																								</div>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Phong cảnh </span>
																									<span class="gdlr-tail">Biển</span>
																								</div>
																							</td>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Kích thước phòng </span>
																									<span class="gdlr-tail">1000 m²</span>
																								</div>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Wifi </span>
																									<span class="gdlr-tail">Có</span>
																								</div>
																							</td>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Phục vụ ăn sáng </span>
																									<span class="gdlr-tail">Có</span>
																								</div>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Dịch vụ phòng </span>
																									<span class="gdlr-tail">Có</span>
																								</div>
																							</td>
																							<td>
																								<div>
																									<i class="fa fa-check-square-o icon-check" ></i>
																									<span class="gdlr-head">Dịch vụ đón tận nơi </span>
																									<span class="gdlr-tail">$20/Lượt</span>
																								</div>
																							</td>
																						</tr>
																					</table>
                                          <br><br>
                                          <div class="gdlr-room-content">
                                             <p>Tọa lạc ở Hội An, cách Bãi biển Hà My 5 phút đi bộ, Shilla Monogram Quangnam Danang cung cấp chỗ nghỉ có hồ bơi ngoài trời, chỗ đậu xe riêng miễn phí, trung tâm thể dục và khu vườn. Chỗ nghỉ này có các tiện nghi như nhà hàng, câu lạc bộ trẻ em và phòng chờ chung, cùng với Wi-Fi miễn phí. Chỗ nghỉ này có phòng xông hơi khô, nhân viên phục vụ hoạt động giải trí và dịch vụ phòng.</p>
                                             <p>Các phòng tại resort được trang bị điều hòa, khu vực ghế ngồi, TV màn hình phẳng có truyền hình vệ tinh, két an toàn, phòng tắm riêng, vòi xịt/chậu rửa vệ sinh, đồ vệ sinh cá nhân miễn phí và máy sấy tóc. Tất cả các phòng đều được thiết kế có ấm đun nước, trong đó một số phòng có bếp với tủ lạnh và lò vi sóng. Tại Shilla Monogram Quangnam Danang, tất cả các phòng đều có ga trải giường và khăn tắm.</p>
                                             <div class="clear"></div>
                                             <div class="gdlr-space" style="margin-top: 35px;"></div>
                                             <div class="gdlr-shortcode-wrapper">
                                                <div class="gdlr-gallery-item gdlr-item" >
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="clear"></div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																												<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																												<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="gallery-column one-fifth column">
                                                      <div class="gallery-item">
																												<a href="#" data-fancybox-group="gdlr-gal-1" data-rel="fancybox" >
																													<img loading="lazy" decoding="async" src="{{asset('frontend/anh/1doi.png')}}" alt="" width="150" height="150" /></a></div>
                                                   </div>
                                                   <div class="clear"></div>
                                                </div>
                                             </div>
                                             <p>Khách có thể sử dụng dịch vụ văn phòng hoặc thư giãn tại quầy bar. Thành thạo tiếng Anh, tiếng Hàn và tiếng Việt, đội ngũ nhân viên luôn túc trực 24/7 tại lễ tân.</p>
                                             <p>Các điểm tham quan nổi tiếng gần Shilla Monogram Quangnam Danang bao gồm Bãi tắm Tân Trà, Sân golf Montgomerie Links và Sân golf Montgomerie Links Vietnam Golf Club. Sân bay gần nhất là Sân bay Quốc tế Đà Nẵng, cách resort 16 km.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- #room -->
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
               <!-- content wrapper -->
            </div>
            

@endsection