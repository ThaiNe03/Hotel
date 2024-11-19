@extends('layout')
@section('content')

<link rel='stylesheet' href="{{asset('frontend\css\menu.css')}}" type='text/css' media='all'>
<div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
               <h1 class="gdlr-page-title">Vietnam's leading experienced restaurant</h1>
            </div>
         </div>
         <section>
                  <div class="container center">
                     <h2>Các món chính tại đây</h2>
                     <p class="desc">Được nhập khẩu từ các nước hàng đầu và chế biến bởi đầu bếp có tay nghề cực đỉnh.
                     </p>
                     <div class="grid-container">
                        @foreach ($data as $item)
                        <div class="card">
                           <img class="card-img"
                              src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794tKi/{{ $item->image }}"
                              alt="">
                           <div class="card-title">{{ $item->productname }}</div>
                           <div class="card-money">
                              Giá: 850 $
                           </div>
                        </div>
                        @endforeach
                        <div class="card">
                           <img class="card-img"
                              src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794tKi/bo-kobe-853263.jpg"
                              alt="">
                           <div class="card-title">Bò Kobe</div>
                           <div class="card-money">
                              Giá: 850 $
                           </div>
                        </div>
                        <div class="card">
                           <img class="card-img"
                              src="https://media1.nguoiduatin.vn/media/dng-th-thu-nga/2019/02/22/salad-hoa-qua.jpg"
                              alt="">
                           <div class="card-title">Salad</div>
                           <div class="card-money">
                              Giá: 100 $
                           </div>
                        </div>
                        <div class="card">
                           <img class="card-img"
                              src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794abD/thit-bo-wagyu-853258.jpg"
                              alt="">
                           <div class="card-title">Bò Wagyu</div>
                           <div class="card-money">
                              Giá: 300 $
                           </div>
                        </div>
                     </div>
                  </div>
               </section>


@endsection 