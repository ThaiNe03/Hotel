@extends('layout')
@section('content')
<!-- is search -->
<div class="content-wrapper">
   <div class="gdlr-content">
      <!-- Above Sidebar Section-->
      <!-- Sidebar With Content Section-->
      <div class="with-sidebar-wrapper">
         <section id="content-section-1">
            <div class="gdlr-full-size-wrapper gdlr-show-all" style="padding-bottom: 0px;  background-color: #ffffff; ">
               <div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" style="margin-bottom: 0px;">
                  <!-- MasterSlider -->
                  <div id="P_MS5af5c0e887f3f" class="master-slider-parent ms-parent-id-2">
                     <!-- MasterSlider Main -->
                     <div id="MS5af5c0e887f3f" class="master-slider ms-skin-default">
                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                           <img src="plugins\masterslider\public\assets\css\blank.gif" alt="" title="" data-src="{{asset('frontend/anh/slide1.jpg')}}">
                           <div class="ms-layer  msp-cn-1-1" data-duration="862" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-117" data-origin="mc" data-position="normal">
                              Welcome To
                           </div>
                           <div class="ms-layer  msp-cn-1-3" style="width:48px;height:2px;" data-duration="775" data-delay="525" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-61" data-origin="mc" data-position="normal">
                           </div>
                           <div class="ms-layer  msp-cn-1-2" data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="712" data-delay="975" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="7" data-origin="mc" data-position="normal">
                              Shilla Monogram
                           </div>
                           <div class="ms-layer  msp-cn-1-4" data-effect="t(true,n,n,500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="750" data-delay="1462" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="90" data-origin="mc" data-position="normal">
                              Hotel số 1 Đà Nẵng 
                           </div>
                        </div>
                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                           <img src="plugins\masterslider\public\assets\css\blank.gif" alt="" title="" data-src="{{asset('frontend/anh/hoboi.png')}}">
                           <div class="ms-layer  msp-cn-1-5" data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="850" data-ease="easeOutQuint" data-offset-x="375" data-offset-y="14" data-origin="ml" data-position="normal">
                              Thỏa thích
                           </div>
                           <div class="ms-layer  msp-cn-1-6" data-duration="937" data-delay="525" data-ease="easeOutQuint" data-offset-x="33" data-offset-y="102" data-origin="ml" data-position="normal">
                              Với hồ bơi
                           </div>
                           <div class="ms-layer  msp-cn-1-7" data-duration="975" data-delay="1137" data-ease="easeOutQuint" data-offset-x="176" data-offset-y="176" data-origin="ml" data-position="normal">
                              Hiện đại nhất thế giới
                           </div>
                        </div>
                        <div class="ms-slide" data-delay="3" data-fill-mode="fill">
                           <img src="plugins\masterslider\public\assets\css\blank.gif" alt="" title="" data-src="{{asset('frontend/anh/nhahang.png')}}">
                           <div class="ms-layer  msp-cn-1-8" data-effect="t(true,n,150,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="1212" data-ease="easeOutQuint" data-offset-x="28" data-offset-y="157" data-origin="bl" data-position="normal">
                              Buffet ăn tối
                           </div>
                           <div class="ms-layer  msp-cn-1-9" style="width:509px;" data-delay="937" data-ease="easeOutQuint" data-offset-x="30" data-offset-y="88" data-origin="bl" data-position="normal">
                              Phục vụ đầy đủ các món Á - Âu vào sáng và tối.
                           </div>
                        </div>
                     </div>
                     <!-- END MasterSlider Main -->
                  </div>
                  <!-- END MasterSlider -->
               </div>
               <div class="clear"></div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-2">
            <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-brown" style="background-color: #322b23; padding-top: 48px; padding-bottom: 27px; ">
               <div class="container">
                  <div class="gdlr-hotel-availability-wrapper" style="margin-bottom: 20px;">
                     <form class="gdlr-hotel-availability gdlr-item" id="gdlr-hotel-availability" method="post" action="https://demo.goodlayers.com/hotelmaster/dark/?booking">
                        <div class="gdlr-reservation-field gdlr-resv-datepicker">
                           <span class="gdlr-reservation-field-title">Thời gian vào</span>
                           <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-in" class="gdlr-datepicker" autocomplete="off" data-dfm="d M yy" data-block="[]" value="2018-05-11"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2018-05-11"></div>
                        </div>
                        <div class="gdlr-reservation-field gdlr-resv-combobox ">
                           <span class="gdlr-reservation-field-title">Đêm</span>
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
                        <div class="gdlr-reservation-field gdlr-resv-datepicker">
                           <span class="gdlr-reservation-field-title">Thời gian ra</span>
                           <div class="gdlr-datepicker-wrapper"><input type="text" id="gdlr-check-out" class="gdlr-datepicker" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="2018-05-12"><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2018-05-12"></div>
                        </div>
                        <div class="gdlr-reservation-field gdlr-resv-combobox ">
                           <span class="gdlr-reservation-field-title">Số người lớn</span>
                           <div class="gdlr-combobox-wrapper">
                              <select name="gdlr-adult-number[]">
                                 <option value="0">0</option>
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
                           <span class="gdlr-reservation-field-title">Số trẻ em</span>
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
                        <div class="gdlr-hotel-availability-submit"><input type="hidden" name="hotel_data" value="1"><input type="hidden" name="gdlr-room-number" value="1"><input type="submit" class="gdlr-reservation-bar-button gdlr-button with-border" value="Kiểm tra"></div>
                        <div class="clear"></div>
                     </form>
                  </div>
                  <div class="clear"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-3">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #0a0a0a; padding-top: 60px; ">
               <div class="container">
                  <div class="four columns">
                     <div class="gdlr-ux column-service-ux">
                        <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                           <div class="column-service-image"><img src="{{asset('frontend\anh\letan.png')}}" alt="" width="500" height="257"></div>
                           <div class="column-service-content-wrapper">
                              <h3 class="column-service-title">Dịch vụ lễ tân chu đáo chuyên nghiệp</h3>
                              <div class="column-service-divider"></div>
                              <div class="column-service-content gdlr-skin-content">
                                 <p>Nhân viên được đào tạo với hơn 5 năm kinh nghiệm và sự thấu hiểu khách hàng mang đến các lựa chọn hoàn hảo.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="four columns">
                     <div class="gdlr-ux column-service-ux">
                        <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                           <div class="column-service-image"><img src="{{asset('frontend\anh\spa.png')}}" alt="" width="500" height="257"></div>
                           <div class="column-service-content-wrapper">
                              <h3 class="column-service-title">Phòng spa thư giãn mỗi cuối ngày</h3>
                              <div class="column-service-divider"></div>
                              <div class="column-service-content gdlr-skin-content">
                                 <p>Phòng được trang bị các thiết bị tiện ích giúp khách hàng thư giãn khi được tận hưởng.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="four columns">
                     <div class="gdlr-ux column-service-ux">
                        <div class="gdlr-item gdlr-column-service-item gdlr-type-2">
                           <div class="column-service-image"><img src="{{asset('frontend\anh\gym.png')}}" alt="" width="500" height="257"></div>
                           <div class="column-service-content-wrapper">
                              <h3 class="column-service-title">Phòng tập gym đầy đủ hiện đại</h3>
                              <div class="column-service-divider"></div>
                              <div class="column-service-content gdlr-skin-content">
                                 <p>Phòng được trang bị các thiết bị hiện đại và đầy đủ giúp mọi người nâng cao sức khỏe.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-4">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-light-grey" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('{{asset('frontend/anh/duoi1.png')}}'); padding-top: 80px; padding-bottom: 10px; ">
               <div class="container">
                  <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                     <div class="gdlr-item-title-head">
                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Shilla Monogram Rooms</h3>
                        <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                        <div class="clear"></div>
                        <!--Phòng demo http://demo.goodlayers.com/hotelmaster/room-classic-3-columns/-->
                     </div>
                     <a class="gdlr-item-title-link" href="http://172.25.186.232:5501/room-classic-3-columns.html">Xem tất cả phòng tại đây<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                  </div>
                  <div class="room-item-wrapper type-modern">
                     <div class="room-item-holder ">
                        <div class="gdlr-room-carousel-item gdlr-item">
                           <div class="flexslider" data-type="carousel" data-nav-container="room-item-wrapper" data-columns="3">
                              <ul class="slides">
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\standard-room-one-king-bed\index.html"><img src="{{asset('frontend\anh\1doi.png')}}" alt="" width="700" height="400"></a></div>
                                    {{asset('frontend/')}}
                                    <h3 class="gdlr-room-title"><a href="room\standard-room-one-king-bed\index.html">Standard Room &#8211; Một giường đôi</a></h3>
                                    <a href="room\standard-room-one-king-bed\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\superior-room-two-double-beds\index.html"><img src="{{asset('frontend\anh\1doi2don.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\superior-room-two-double-beds\index.html">Superior Room &#8211; 1 giường đôi hoặc 2 giường đơn</a></h3>
                                    <a href="room\superior-room-two-double-beds\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\junior-suite-one-single-bed\index.html"><img src="{{asset('frontend\anh\2don.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\junior-suite-one-single-bed\index.html">Junior Suite &#8211; 2 giường đơn</a></h3>
                                    <a href="room\junior-suite-one-single-bed\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\grand-superior-room-two-king-beds\index.html"><img src="{{asset('frontend\anh\2doi.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\grand-superior-room-two-king-beds\index.html">Grand Superior Room &#8211; 2 giường đôi</a></h3>
                                    <a href="room\grand-superior-room-two-king-beds\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\superior-room-one-king-bed\index.html"><img src="{{asset('frontend\anh\luxury.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\superior-room-one-king-bed\index.html">Superior Room &#8211; Phòng sang trọng</a></h3>
                                    <a href="room\superior-room-one-king-bed\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\deluxe-room-one-king-bed\index.html"><img src="{{asset('frontend\anh\vua.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\deluxe-room-one-king-bed\index.html">Deluxe Room &#8211; Phòng tổng thống</a></h3>
                                    <a href="room\deluxe-room-one-king-bed\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\family-special-three-double-beds\index.html"><img src="{{asset('frontend\anh\giadinh.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\family-special-three-double-beds\index.html">Family Special &#8211; Phòng gia đình</a></h3>
                                    <a href="room\family-special-three-double-beds\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                                 <li class="gdlr-item gdlr-modern-room">
                                    <div class="gdlr-room-thumbnail"><a href="room\premium-room-two-single-beds\index.html"><img src="{{asset('frontend\anh\dacbiet.png')}}" alt="" width="700" height="400"></a></div>
                                    <h3 class="gdlr-room-title"><a href="room\premium-room-two-single-beds\index.html">Super Premium &#8211; Phòng đặc biệt</a></h3>
                                    <a href="room\premium-room-two-single-beds\index.html" class="gdlr-room-detail"></i></a>
                                 </li>
                              </ul>
                              <div class="clear"></div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-5">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2" data-bgspeed="0.1" style="background-image: url('anh/duoi2.png'); padding-top: 160px; padding-bottom: 110px; ">
               <div class="container">
                  <div class="six columns">
                     <div class="gdlr-title-item">
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center pos-center-divider ">
                           <div class="gdlr-item-title-head">
                              <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Thông tin về chúng tôi</h3>
                              <div class="clear"></div>
                           </div>
                           <div class="gdlr-item-title-divider"></div>
                           <div class="gdlr-item-title-caption gdlr-title-font gdlr-skin-info">Cảm hứng có thể được tìm thấy ở khắp mọi nơi</div>
                        </div>
                     </div>
                  </div>
                  <div class="six columns">
                     <div class="gdlr-item gdlr-content-item">
                        <p style="text-align: center;">Khách sạn Đà Năng là khách sạn đầu tiên được ra mắt của Shilla Monogram, mang đến truyền thống yêu thích phong cảnh thiên nhiên vốn có của Hàn Quốc, chứa đựng trong tự nhiên và văn hóa Việt Nam cùng thiết kế đặc trưng.
                           Quý khách có thể bắt gặp các tác phẩm nghệ thuật của họa sĩ nổi tiếng Việt Nam Hà Mạnh Thắng, với cách trưu tượng hóa cành biên Đà Năng thay đổi theo mùa, tại khắp nơi trong khách sạn, truyền tải đến quý khách nét hấp dẫn tại địa phương được chúng tôi chọn lọc kỹ lưỡng và tái hiện lại.
                           Hy vọng quý khách có thể tận hưởng những khoảnh khắc như kỹ nghi mỗi ngày cùng các hoạt động đa dạng tại khu vui chơi dành cho trẻ em Little Monogram, không gian trãi nghiêm giải trí Activity Studio, các bề bơi ngoài trời đa dạng hãp dẫn của Shilla Monogram Đà Nẵng. 
                        </p>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-6">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #292929; padding-top: 70px; ">
               <div class="container">
                  <div class="six columns">
                     <div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                        <div class="gdlr-item-title-head">
                           <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Các cấp thành viên</h3>
                           <div class="clear"></div>
                        </div>
                        <div class="gdlr-item-title-divider"></div>
                     </div>
                     <div class="blog-item-wrapper">
                        <div class="blog-item-holder">
                           <div class="gdlr-item gdlr-blog-widget">
                              <div class="gdlr-ux gdlr-blog-widget-ux">
                                 <article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                    <div class="gdlr-standard-style">
                                       <div class="blog-date-wrapper gdlr-title-font">
                                          <span class="blog-date-day">Lần</span>
                                          <span class="blog-date-month">Đầu</span>
                                       </div>
                                       <header class="post-header">
                                          <h3 class="gdlr-blog-title"><a href="magna-pars-studiorum\index.html">Hạng đồng</a></h3>
                                          <div class="gdlr-blog-excerpt">
                                             Quà lần đầu, điểm(3% giá trị phòng),...
                                             <div class="clear"></div>
                                             <a href="magna-pars-studiorum\index.html" class="excerpt-read-more">Continue Reading<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                          </div>
                                          <div class="clear"></div>
                                       </header>
                                       <!-- entry-header -->
                                       <div class="clear"></div>
                                    </div>
                                 </article>
                                 <!-- #post -->
                              </div>
                           </div>
                           <div class="gdlr-item gdlr-blog-widget">
                              <div class="gdlr-ux gdlr-blog-widget-ux">
                                 <article id="post-859" class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
                                    <div class="gdlr-standard-style">
                                       <div class="blog-date-wrapper gdlr-title-font">
                                          <span class="blog-date-day">1 ngày</span>
                                          <span class="blog-date-month">100 điểm</span>
                                       </div>
                                       <header class="post-header">
                                          <h3 class="gdlr-blog-title"><a href="sedial-eiusmod-tempor\index.html">Hạng bạc</a></h3>
                                          <div class="gdlr-blog-excerpt">
                                             Quà thành viên, điểm (1000+3%), phiếu giảm giá 10%,...
                                             <div class="clear"></div>
                                             <a href="sedial-eiusmod-tempor\index.html" class="excerpt-read-more">Continue Reading<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                          </div>
                                          <div class="clear"></div>
                                       </header>
                                       <!-- entry-header -->
                                       <div class="clear"></div>
                                    </div>
                                 </article>
                                 <!-- #post -->
                              </div>
                           </div>
                           <div class="gdlr-item gdlr-blog-widget">
                              <div class="gdlr-ux gdlr-blog-widget-ux">
                                 <article id="post-2211" class="post-2211 post type-post status-publish format-gallery has-post-thumbnail hentry category-blog category-life-style category-news-article tag-blog tag-gallery-thumbnail tag-life-style tag-news post_format-post-format-gallery">
                                    <div class="gdlr-standard-style">
                                       <div class="blog-date-wrapper gdlr-title-font">
                                          <span class="blog-date-day">10 ngày</span>
                                          <span class="blog-date-month">1000 điểm</span>
                                       </div>
                                       <header class="post-header">
                                          <h3 class="gdlr-blog-title"><a href="gallery-post-format-title\index.html">Hạng Vàng</a></h3>
                                          <div class="gdlr-blog-excerpt">
                                             Quà thành viên, điểm(3000+5%), phiếu giảm giá 20%, quà khác...
                                             <div class="clear"></div>
                                             <a href="gallery-post-format-title\index.html" class="excerpt-read-more">Continue Reading<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a>
                                          </div>
                                          <div class="clear"></div>
                                       </header>
                                       <!-- entry-header -->
                                       <div class="clear"></div>
                                    </div>
                                 </article>
                                 <!-- #post -->
                              </div>
                           </div>
                           </i></a>
                        </div>
                     </div>
                  </div>
                  <div class="six columns">
                     <div class="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                        <div class="gdlr-item-title-head">
                           <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Trưng bày</h3>
                           <div class="clear"></div>
                        </div>
                        <div class="gdlr-item-title-divider"></div>
                     </div>
                     <div class="gdlr-gallery-item gdlr-item">
                        <div class="gallery-column six columns">
                           <div class="gallery-item"></a><img src="{{('frontend\anh\tb1.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"></a><img src="{{('frontend\anh\tb2.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb3.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb4.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb5.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb6.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb7.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb8.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="gallery-column three columns">
                           <div class="gallery-item"><img src="{{('frontend\anh\tb9.png')}}" alt="" width="400" height="400"></a></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
         <section id="content-section-7">
            <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-testimonial" style="background-color: #1e1e1e; padding-top: 80px; padding-bottom: 45px; ">
               <div class="container">
                  <div class="gdlr-testimonial-item-wrapper">
                     <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                        <div class="gdlr-item-title-head">
                           <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">SHILLA REWARDS</h3>
                           <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                           <div class="clear"></div>
                        </div>
                     </div>
                     <div class="gdlr-item gdlr-testimonial-item carousel large plain-style">
                        <div class="gdlr-ux gdlr-testimonial-ux">
                           <div class="flexslider" data-type="carousel" data-nav-container="gdlr-testimonial-item" data-columns="1">
                              <ul class="slides">
                                 <li class="testimonial-item">
                                    <div class="testimonial-content gdlr-skin-content">
                                       <p>Shilla Rewards là dịch vụ tổng hợp hoàn toàn mới dành cho hội viên, cung cấp các ưu đãi và lợi ích điểm thường tại Seoul/Jeju Shilla Hotel, Shilla Monogram, Shilla Stay và các khách sạn liên kết.</p>
                                    </div>
                                    <div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Co-op</span><span class="testimonial-position gdlr-skin-info"><span>, </span>Shilla Stay</span>
                                    </div>
                                 </li>
                                 <li class="testimonial-item">
                                    <div class="testimonial-content gdlr-skin-content">
                                       <p>Tận hưởng kỳ nghi dưỡng của bạn tại Đà Năng.
                                          Việt Nam với nhiều hoạt động bao gồm các sự kiện và các môn thể thao giải trí.
                                       </p>
                                    </div>
                                    <div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Phòng giải trí</span><span class="testimonial-position gdlr-skin-info"><span>, </span>Shilla Monogram</span>
                                    </div>
                                 </li>
                                 <li class="testimonial-item">
                                    <div class="testimonial-content gdlr-skin-content">Tại Little Monogram, các khách hàng nhỏ tuổi có thể thoả sức vui chơi với các hoạt động như leo núi nhân tạo, nhà bóng, cầu trượt và cửa hàng cho các bạn nhỏ mặc thử nhiều loại trang phục khác nhau.</p>
                                    </div>
                                    <div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Không gian mở</span><span class="testimonial-position gdlr-skin-info"><span>, </span>Dành cho khách nhí</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
      </div>
   </div>
   <!-- gdlr-content -->
   <div class="clear"></div>
</div>
<script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Đóng",
                "currentText": "Hôm nay",
                "monthNames": ["Tháng Một", "Tháng Hai", "Tháng Ba", "Tháng Tư", "Tháng Năm", "Tháng Sáu", "Tháng Bảy", "Tháng Tám", "Tháng Chín", "Tháng Mười", "Tháng Mười Một", "Tháng Mười Hai"],
                "monthNamesShort": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript'>
        var objectL10n = {
            "closeText": "Đóng",
                "currentText": "Hôm nay",
                "monthNames": ["Tháng Một", "Tháng Hai", "Tháng Ba", "Tháng Tư", "Tháng Năm", "Tháng Sáu", "Tháng Bảy", "Tháng Tám", "Tháng Chín", "Tháng Mười", "Tháng Mười Một", "Tháng Mười Hai"],
                "monthNamesShort": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
            "monthStatus": "Hiển thị một tháng khác",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            "dayNamesMin": ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            "firstDay": "1"
        };
    </script>
@endsection