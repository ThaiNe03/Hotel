@extends('layout')
@section('content')

<div class="gdlr-page-title-wrapper" >
   <div class="gdlr-page-title-overlay"></div>
   <div class="gdlr-page-title-container container">
      <h1 class="gdlr-page-title">Phòng</h1>
      <span class="gdlr-page-caption">Tất cả đều có tại đây</span>
   </div>
</div>
<!-- is search -->
<div class="content-wrapper">
   <div class="gdlr-content">
      <div class="with-sidebar-wrapper">
         <section id="content-section-1">
            <div class="section-container container">
               <div class="room-item-wrapper type-classic" style="margin-bottom: 30px;">
                  <div class="room-item-holder ">
                     <div class="clear"></div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\1doi.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Standard Room &#8211; Một giường đôi</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">1 giường đôi</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">3</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Thành phố</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">5.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\1doi2don.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Superior Room &#8211; Một giường đôi hoặc hai giường đơn</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">1 giường đôi / 2 giường đơn</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">3</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Thành phố</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">5.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\2don.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Junior Suite &#8211; Hai giường đơn</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">2 giường đơn</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">2</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Thành phố</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">4.500.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="clear"></div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\2doi.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Grand Superior Room &#8211; Hai giường đôi</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">2 giường đôi</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">6</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Biển</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">8.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\luxury.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Superior Room &#8211; Phòng sang trọng</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">2 Giường vua</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">6</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Biển</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">12.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\vua.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Deluxe Room &#8211; Phòng tổng thống</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">1 giường vua</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Max People</span><span class="gdlr-tail">3</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Biển ( Mặt monogram)</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">15.000.000 / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="clear"></div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\giadinh.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Family Special &#8211; Phòng gia đình</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">5 giường đơn</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">8</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Biển</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">10.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="four columns">
                        <div class="gdlr-item gdlr-room-item gdlr-classic-room">
                           <div class="gdlr-ux gdlr-classic-room-ux">
                              <div class="gdlr-room-thumbnail">
                                 <a href="{{route('detail')}}"><img src="{{asset('frontend\anh\dacbiet.png')}}" alt="" width="700" height="400"></a>
                              </div>
                              <h3 class="gdlr-room-title"><a href="{{route('detail')}}">Premium Room &#8211; Phòng đặc biệt</a></h3>
                              <div class="gdlr-hotel-room-info">
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Giường</span><span class="gdlr-tail">1 giường đặc biệt</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Người tối đa</span><span class="gdlr-tail">3</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">View</span><span class="gdlr-tail">Ngắm lòng biển</span></div>
                                 <div class="gdlr-room-info"><i class="fa fa-check-square-o icon-check"></i><span class="gdlr-head">Wifi</span><span class="gdlr-tail">Có</span></div>
                                 <div class="gdlr-room-price"><span class="gdlr-head">Giá từ</span><span class="gdlr-tail">20.000.000 VNĐ / Đêm</span></div>
                                 <div class="clear"></div>
                              </div>
                              </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </section>
      </div>
      <!-- Below Sidebar Section-->
   </div>
   <!-- gdlr-content -->
   <div class="clear"></div>
</div>

@endsection