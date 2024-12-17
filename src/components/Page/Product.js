// import { Link } from "react-router-dom";

function Product() {
  return (
    <div>
      <link
        rel="stylesheet"
        href="{{asset('frontend\css\menu.css')}}"
        type="text/css"
        media="all"
      />
      <div className="gdlr-page-title-wrapper">
        <div className="gdlr-page-title-overlay" />
        <div className="gdlr-page-title-container container">
          <h1 className="gdlr-page-title">
            Vietnam's leading experienced restaurant
          </h1>
        </div>
      </div>
      <section>
        <div className="container center">
          <h2>Các món chính tại đây</h2>
          <p className="desc">
            Được nhập khẩu từ các nước hàng đầu và chế biến bởi đầu bếp có tay
            nghề cực đỉnh.
          </p>
          <div className="grid-container">
            @foreach ($data as $item)
            <div className="card">
              <img
                className="card-img"
                src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794tKi/{{ $item->image }}"
                alt=""
              />
              <div className="card-title">
                {"{"}
                {"{"} $item-&gt;productname {"}"}
                {"}"}
              </div>
              <div className="card-money">Giá: 850 $</div>
            </div>
            @endforeach
            <div className="card">
              <img
                className="card-img"
                src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794tKi/bo-kobe-853263.jpg"
                alt=""
              />
              <div className="card-title">Bò Kobe</div>
              <div className="card-money">Giá: 850 $</div>
            </div>
            <div className="card">
              <img
                className="card-img"
                src="https://media1.nguoiduatin.vn/media/dng-th-thu-nga/2019/02/22/salad-hoa-qua.jpg"
                alt=""
              />
              <div className="card-title">Salad</div>
              <div className="card-money">Giá: 100 $</div>
            </div>
            <div className="card">
              <img
                className="card-img"
                src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/473794abD/thit-bo-wagyu-853258.jpg"
                alt=""
              />
              <div className="card-title">Bò Wagyu</div>
              <div className="card-money">Giá: 300 $</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Product;
