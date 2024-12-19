import Section1 from "./components/Content/Section1";
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

function Home() {
  return (
    <>
      <Swiper
        modules={[Navigation, Pagination, Autoplay]}
        navigation
        pagination={{ clickable: true }}
        autoplay={{ delay: 3000 }}
        loop
      >
        <SwiperSlide>
          <img src="/frontend/anh/slide1.jpg" alt="Slide 1" />
          </SwiperSlide>
        <SwiperSlide>
          <img src="/frontend/anh/hoboi.png" alt="Slide 2" />
        </SwiperSlide>
        <SwiperSlide>
          <img src="/frontend/anh/nhahang.png" alt="Slide 3" />
        </SwiperSlide>
      </Swiper>
      <div className="content-wrapper">
        <div className="gdlr-content">
          {/* Above Sidebar Section*/}
          {/* Sidebar With Content Section*/}
          <div className="with-sidebar-wrapper">
            <section id="content-section-1">
              <div
                className="gdlr-full-size-wrapper gdlr-show-all"
                style={{ paddingBottom: "0px", backgroundColor: "#ffffff" }}
              >
                <div
                  className="gdlr-master-slider-item gdlr-slider-item gdlr-item"
                  style={{ marginBottom: "0px" }}
                >
                  {/* MasterSlider */}
                  <div
                    id="P_MS5af5c0e887f3f"
                    className="master-slider-parent ms-parent-id-2"
                  >
                    {/* MasterSlider Main */}
                    <div
                      id="MS5af5c0e887f3f"
                      className="master-slider ms-skin-default"
                    >
                      <div
                        className="ms-slide"
                        data-delay={7}
                        data-fill-mode="fill"
                      >
                        <img
                          src="plugins\masterslider\public\assets\css\blank.gif"
                          alt=""
                          title
                          data-src="anh/slide1.jpg"
                        />
                        <div
                          className="ms-layer  msp-cn-1-1"
                          data-duration={862}
                          data-ease="easeOutQuint"
                          data-offset-x={0}
                          data-offset-y={-117}
                          data-origin="mc"
                          data-position="normal"
                        >
                          Welcome To
                        </div>
                        <div
                          className="ms-layer  msp-cn-1-3"
                          style={{ width: "48px", height: "2px" }}
                          data-duration={775}
                          data-delay={525}
                          data-ease="easeOutQuint"
                          data-offset-x={0}
                          data-offset-y={-61}
                          data-origin="mc"
                          data-position="normal"
                        ></div>
                        <div
                          className="ms-layer  msp-cn-1-2"
                          data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)"
                          data-duration={712}
                          data-delay={975}
                          data-ease="easeOutQuint"
                          data-offset-x={0}
                          data-offset-y={7}
                          data-origin="mc"
                          data-position="normal"
                        >
                          Shilla Monogram
                        </div>
                        <div
                          className="ms-layer  msp-cn-1-4"
                          data-effect="t(true,n,n,500,n,n,n,n,n,n,n,n,n,n,n)"
                          data-duration={750}
                          data-delay={1462}
                          data-ease="easeOutQuint"
                          data-offset-x={0}
                          data-offset-y={90}
                          data-origin="mc"
                          data-position="normal"
                        >
                          Hotel số 1 Đà Nẵng{" "}
                        </div>
                      </div>
                      <div
                        className="ms-slide"
                        data-delay={3}
                        data-fill-mode="fill"
                      >
                        <img
                          src="plugins\masterslider\public\assets\css\blank.gif"
                          alt=""
                          title
                          data-src="anh/hoboi.png"
                        />
                        <div
                          className="ms-layer  msp-cn-1-5"
                          data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)"
                          data-duration={850}
                          data-ease="easeOutQuint"
                          data-offset-x={375}
                          data-offset-y={14}
                          data-origin="ml"
                          data-position="normal"
                        >
                          Thỏa thích
                        </div>
                        <div
                          className="ms-layer  msp-cn-1-6"
                          data-duration={937}
                          data-delay={525}
                          data-ease="easeOutQuint"
                          data-offset-x={33}
                          data-offset-y={102}
                          data-origin="ml"
                          data-position="normal"
                        >
                          Với hồ bơi
                        </div>
                        <div
                          className="ms-layer  msp-cn-1-7"
                          data-duration={975}
                          data-delay={1137}
                          data-ease="easeOutQuint"
                          data-offset-x={176}
                          data-offset-y={176}
                          data-origin="ml"
                          data-position="normal"
                        >
                          Hiện đại nhất thế giới
                        </div>
                      </div>
                      <div
                        className="ms-slide"
                        data-delay={3}
                        data-fill-mode="fill"
                      >
                        <img
                          src="plugins\masterslider\public\assets\css\blank.gif"
                          alt=""
                          title
                          data-src="anh/nhahang.png"
                        />
                        <div
                          className="ms-layer  msp-cn-1-8"
                          data-effect="t(true,n,150,n,n,n,n,n,n,n,n,n,n,n,n)"
                          data-duration={1212}
                          data-ease="easeOutQuint"
                          data-offset-x={28}
                          data-offset-y={157}
                          data-origin="bl"
                          data-position="normal"
                        >
                          Buffet ăn tối
                        </div>
                        <div
                          className="ms-layer  msp-cn-1-9"
                          style={{ width: "509px" }}
                          data-delay={937}
                          data-ease="easeOutQuint"
                          data-offset-x={30}
                          data-offset-y={88}
                          data-origin="bl"
                          data-position="normal"
                        >
                          Phục vụ đầy đủ các món Á - Âu vào sáng và tối.
                        </div>
                      </div>
                    </div>
                    {/* END MasterSlider Main */}
                  </div>
                  {/* END MasterSlider */}
                </div>
                <div className="clear" />
                <div className="clear" />
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-2">
              <div
                className="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-brown"
                style={{
                  backgroundColor: "#322b23",
                  paddingTop: "48px",
                  paddingBottom: "27px"
                }}
              >
                <div className="container">
                  <div
                    className="gdlr-hotel-availability-wrapper"
                    style={{ marginBottom: "20px" }}
                  >
                    <form
                      className="gdlr-hotel-availability gdlr-item"
                      id="gdlr-hotel-availability"
                      method="post"
                      action="https://demo.goodlayers.com/hotelmaster/dark/?booking"
                    >
                      <div className="gdlr-reservation-field gdlr-resv-datepicker">
                        <span className="gdlr-reservation-field-title">
                          Thời gian vào
                        </span>
                        <div className="gdlr-datepicker-wrapper">
                          <input
                            type="text"
                            id="gdlr-check-in"
                            className="gdlr-datepicker"
                            autoComplete="off"
                            data-dfm="d M yy"
                            data-block="[]"
                            defaultValue="2018-05-11"
                          />
                          <input
                            type="hidden"
                            className="gdlr-datepicker-alt"
                            name="gdlr-check-in"
                            autoComplete="off"
                            defaultValue="2018-05-11"
                          />
                        </div>
                      </div>
                      <div className="gdlr-reservation-field gdlr-resv-combobox ">
                        <span className="gdlr-reservation-field-title">
                          Đêm
                        </span>
                        <div className="gdlr-combobox-wrapper">
                          <select name="gdlr-night" id="gdlr-night">
                            <option value={1} selected>
                              1
                            </option>
                            <option value={2}>2</option>
                            <option value={3}>3</option>
                            <option value={4}>4</option>
                            <option value={5}>5</option>
                            <option value={6}>6</option>
                            <option value={7}>7</option>
                            <option value={8}>8</option>
                            <option value={9}>9</option>
                          </select>
                        </div>
                      </div>
                      <div className="gdlr-reservation-field gdlr-resv-datepicker">
                        <span className="gdlr-reservation-field-title">
                          Thời gian ra
                        </span>
                        <div className="gdlr-datepicker-wrapper">
                          <input
                            type="text"
                            id="gdlr-check-out"
                            className="gdlr-datepicker"
                            autoComplete="off"
                            data-min-night={1}
                            data-dfm="d M yy"
                            data-block="[]"
                            defaultValue="2018-05-12"
                          />
                          <input
                            type="hidden"
                            className="gdlr-datepicker-alt"
                            name="gdlr-check-out"
                            autoComplete="off"
                            defaultValue="2018-05-12"
                          />
                        </div>
                      </div>
                      <div className="gdlr-reservation-field gdlr-resv-combobox ">
                        <span className="gdlr-reservation-field-title">
                          Số người lớn
                        </span>
                        <div className="gdlr-combobox-wrapper">
                          <select name="gdlr-adult-number[]">
                            <option value={0}>0</option>
                            <option value={1}>1</option>
                            <option value={2} selected>
                              2
                            </option>
                            <option value={3}>3</option>
                            <option value={4}>4</option>
                            <option value={5}>5</option>
                            <option value={6}>6</option>
                            <option value={7}>7</option>
                            <option value={8}>8</option>
                            <option value={9}>9</option>
                          </select>
                        </div>
                      </div>
                      <div className="gdlr-reservation-field gdlr-resv-combobox ">
                        <span className="gdlr-reservation-field-title">
                          Số trẻ em
                        </span>
                        <div className="gdlr-combobox-wrapper">
                          <select name="gdlr-children-number[]">
                            <option value={0}>0</option>
                            <option value={1}>1</option>
                            <option value={2}>2</option>
                            <option value={3}>3</option>
                            <option value={4}>4</option>
                            <option value={5}>5</option>
                            <option value={6}>6</option>
                            <option value={7}>7</option>
                            <option value={8}>8</option>
                            <option value={9}>9</option>
                          </select>
                        </div>
                      </div>
                      <div className="gdlr-hotel-availability-submit">
                        <input
                          type="hidden"
                          name="hotel_data"
                          defaultValue={1}
                        />
                        <input
                          type="hidden"
                          name="gdlr-room-number"
                          defaultValue={1}
                        />
                        <input
                          type="submit"
                          className="gdlr-reservation-bar-button gdlr-button with-border"
                          defaultValue="Kiểm tra"
                        />
                      </div>
                      <div className="clear" />
                    </form>
                  </div>
                  <div className="clear" />
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-3">
              <div
                className="gdlr-color-wrapper  gdlr-show-all no-skin"
                style={{ backgroundColor: "#0a0a0a", paddingTop: "60px" }}
              >
                <div className="container">
                  <div className="four columns">
                    <div className="gdlr-ux column-service-ux">
                      <div className="gdlr-item gdlr-column-service-item gdlr-type-2">
                        <div className="column-service-image">
                          <img
                            src="/frontend/anh/letan.png"
                            alt=""
                            width={500}
                            height={257}
                          />
                        </div>
                        <div className="column-service-content-wrapper">
                          <h3 className="column-service-title">
                            Dịch vụ lễ tân chu đáo chuyên nghiệp
                          </h3>
                          <div className="column-service-divider" />
                          <div className="column-service-content gdlr-skin-content">
                            <p>
                              Nhân viên được đào tạo với hơn 5 năm kinh nghiệm
                              và sự thấu hiểu khách hàng mang đến các lựa chọn
                              hoàn hảo.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="four columns">
                    <div className="gdlr-ux column-service-ux">
                      <div className="gdlr-item gdlr-column-service-item gdlr-type-2">
                        <div className="column-service-image">
                          <img
                            src="/frontend/anh/spa.png"
                            alt=""
                            width={500}
                            height={257}
                          />
                        </div>
                        <div className="column-service-content-wrapper">
                          <h3 className="column-service-title">
                            Phòng spa thư giãn mỗi cuối ngày
                          </h3>
                          <div className="column-service-divider" />
                          <div className="column-service-content gdlr-skin-content">
                            <p>
                              Phòng được trang bị các thiết bị tiện ích giúp
                              khách hàng thư giãn khi được tận hưởng.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="four columns">
                    <div className="gdlr-ux column-service-ux">
                      <div className="gdlr-item gdlr-column-service-item gdlr-type-2">
                        <div className="column-service-image">
                          <img
                            src="/frontend/anh/gym.png"
                            alt=""
                            width={500}
                            height={257}
                          />
                        </div>
                        <div className="column-service-content-wrapper">
                          <h3 className="column-service-title">
                            Phòng tập gym đầy đủ hiện đại
                          </h3>
                          <div className="column-service-divider" />
                          <div className="column-service-content gdlr-skin-content">
                            <p>
                              Phòng được trang bị các thiết bị hiện đại và đầy
                              đủ giúp mọi người nâng cao sức khỏe.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-4">
              <div
                className="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-light-grey"
                id="gdlr-parallax-wrapper-1"
                data-bgspeed="0.1"
                style={{
                  backgroundImage: 'url("/frontend/anh/duoi1.png")',
                  paddingTop: "80px",
                  paddingBottom: "10px"
                }}
              >
                <div className="container">
                  <div className="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                    <div className="gdlr-item-title-head">
                      <h3 className="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                        Shilla Monogram Rooms
                      </h3>
                      <div className="gdlr-item-title-carousel">
                        <i className="icon-angle-left gdlr-flex-prev" />
                        <i className="icon-angle-right gdlr-flex-next" />
                      </div>
                      <div className="clear" />
                      {/*Phòng demo http://demo.goodlayers.com/hotelmaster/room-classic-3-columns/*/}
                    </div>
                    <a
                      className="gdlr-item-title-link"
                      href="#"
                    >
                      Xem tất cả phòng tại đây
                      <i className="fa fa-long-arrow-right icon-long-arrow-right" />
                    </a>
                  </div>
                  <div className="room-item-wrapper type-modern">
                    <div className="room-item-holder ">
                      <div className="gdlr-room-carousel-item gdlr-item">
                        <div
                          className="flexslider"
                          data-type="carousel"
                          data-nav-container="room-item-wrapper"
                          data-columns={3}
                        >
                          <ul className="slides">
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\standard-room-one-king-bed\index.html">
                                  <img
                                    src="anh\1doi.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\standard-room-one-king-bed\index.html">
                                  Standard Room – Một giường đôi
                                </a>
                              </h3>
                              <a
                                href="room\standard-room-one-king-bed\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\superior-room-two-double-beds\index.html">
                                  <img
                                    src="anh\1doi2don.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\superior-room-two-double-beds\index.html">
                                  Superior Room – 1 giường đôi hoặc 2 giường đơn
                                </a>
                              </h3>
                              <a
                                href="room\superior-room-two-double-beds\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\junior-suite-one-single-bed\index.html">
                                  <img
                                    src="anh\2don.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\junior-suite-one-single-bed\index.html">
                                  Junior Suite – 2 giường đơn
                                </a>
                              </h3>
                              <a
                                href="room\junior-suite-one-single-bed\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\grand-superior-room-two-king-beds\index.html">
                                  <img
                                    src="anh\2doi.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\grand-superior-room-two-king-beds\index.html">
                                  Grand Superior Room – 2 giường đôi
                                </a>
                              </h3>
                              <a
                                href="room\grand-superior-room-two-king-beds\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\superior-room-one-king-bed\index.html">
                                  <img
                                    src="anh\luxury.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\superior-room-one-king-bed\index.html">
                                  Superior Room – Phòng sang trọng
                                </a>
                              </h3>
                              <a
                                href="room\superior-room-one-king-bed\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\deluxe-room-one-king-bed\index.html">
                                  <img
                                    src="anh\vua.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\deluxe-room-one-king-bed\index.html">
                                  Deluxe Room – Phòng tổng thống
                                </a>
                              </h3>
                              <a
                                href="room\deluxe-room-one-king-bed\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\family-special-three-double-beds\index.html">
                                  <img
                                    src="anh\giadinh.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\family-special-three-double-beds\index.html">
                                  Family Special – Phòng gia đình
                                </a>
                              </h3>
                              <a
                                href="room\family-special-three-double-beds\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                            <li className="gdlr-item gdlr-modern-room">
                              <div className="gdlr-room-thumbnail">
                                <a href="room\premium-room-two-single-beds\index.html">
                                  <img
                                    src="anh\dacbiet.png"
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </a>
                              </div>
                              <h3 className="gdlr-room-title">
                                <a href="room\premium-room-two-single-beds\index.html">
                                  Super Premium – Phòng đặc biệt
                                </a>
                              </h3>
                              <a
                                href="room\premium-room-two-single-beds\index.html"
                                className="gdlr-room-detail"
                              />
                            </li>
                          </ul>
                          <div className="clear" />
                        </div>
                      </div>
                      <div className="clear" />
                    </div>
                  </div>
                  <div className="clear" />
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-5">
              <div
                className="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
                id="gdlr-parallax-wrapper-2"
                data-bgspeed="0.1"
                style={{
                  backgroundImage: 'url("/frontend/anh/duoi2.png")',
                  paddingTop: "160px",
                  paddingBottom: "110px"
                }}
              >
                <div className="container">
                  <div className="six columns">
                    <div className="gdlr-title-item">
                      <div className="gdlr-item-title-wrapper gdlr-item pos-center pos-center-divider ">
                        <div className="gdlr-item-title-head">
                          <h3 className="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                            Thông tin về chúng tôi
                          </h3>
                          <div className="clear" />
                        </div>
                        <div className="gdlr-item-title-divider" />
                        <div className="gdlr-item-title-caption gdlr-title-font gdlr-skin-info">
                          Cảm hứng có thể được tìm thấy ở khắp mọi nơi
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="six columns">
                    <div className="gdlr-item gdlr-content-item">
                      <p style={{ textAlign: "center" }}>
                        Khách sạn Đà Năng là khách sạn đầu tiên được ra mắt của
                        Shilla Monogram, mang đến truyền thống yêu thích phong
                        cảnh thiên nhiên vốn có của Hàn Quốc, chứa đựng trong tự
                        nhiên và văn hóa Việt Nam cùng thiết kế đặc trưng. Quý
                        khách có thể bắt gặp các tác phẩm nghệ thuật của họa sĩ
                        nổi tiếng Việt Nam Hà Mạnh Thắng, với cách trưu tượng
                        hóa cành biên Đà Năng thay đổi theo mùa, tại khắp nơi
                        trong khách sạn, truyền tải đến quý khách nét hấp dẫn
                        tại địa phương được chúng tôi chọn lọc kỹ lưỡng và tái
                        hiện lại. Hy vọng quý khách có thể tận hưởng những
                        khoảnh khắc như kỹ nghi mỗi ngày cùng các hoạt động đa
                        dạng tại khu vui chơi dành cho trẻ em Little Monogram,
                        không gian trãi nghiêm giải trí Activity Studio, các bề
                        bơi ngoài trời đa dạng hãp dẫn của Shilla Monogram Đà
                        Nẵng.&nbsp;
                      </p>
                    </div>
                  </div>
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-6">
              <div
                className="gdlr-color-wrapper  gdlr-show-all no-skin"
                style={{ backgroundColor: "#292929", paddingTop: "70px" }}
              >
                <div className="container">
                  <div className="six columns">
                    <div className="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                      <div className="gdlr-item-title-head">
                        <h3 className="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                          Các cấp thành viên
                        </h3>
                        <div className="clear" />
                      </div>
                      <div className="gdlr-item-title-divider" />
                    </div>
                    <div className="blog-item-wrapper">
                      <div className="blog-item-holder">
                        <div className="gdlr-item gdlr-blog-widget">
                          <div className="gdlr-ux gdlr-blog-widget-ux">
                            <article
                              id="post-862"
                              className="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news"
                            >
                              <div className="gdlr-standard-style">
                                <div className="blog-date-wrapper gdlr-title-font">
                                  <span className="blog-date-day">Lần</span>
                                  <span className="blog-date-month">Đầu</span>
                                </div>
                                <header className="post-header">
                                  <h3 className="gdlr-blog-title">
                                    <a href="magna-pars-studiorum\index.html">
                                      Hạng đồng
                                    </a>
                                  </h3>
                                  <div className="gdlr-blog-excerpt">
                                    Quà lần đầu, điểm(3% giá trị phòng),...
                                    <div className="clear" />
                                    <a
                                      href="magna-pars-studiorum\index.html"
                                      className="excerpt-read-more"
                                    >
                                      Continue Reading
                                      <i className="fa fa-long-arrow-right icon-long-arrow-right" />
                                    </a>
                                  </div>
                                  <div className="clear" />
                                </header>
                                {/* entry-header */}
                                <div className="clear" />
                              </div>
                            </article>
                            {/* #post */}
                          </div>
                        </div>
                        <div className="gdlr-item gdlr-blog-widget">
                          <div className="gdlr-ux gdlr-blog-widget-ux">
                            <article
                              id="post-859"
                              className="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row"
                            >
                              <div className="gdlr-standard-style">
                                <div className="blog-date-wrapper gdlr-title-font">
                                  <span className="blog-date-day">1 ngày</span>
                                  <span className="blog-date-month">
                                    100 điểm
                                  </span>
                                </div>
                                <header className="post-header">
                                  <h3 className="gdlr-blog-title">
                                    <a href="sedial-eiusmod-tempor\index.html">
                                      Hạng bạc
                                    </a>
                                  </h3>
                                  <div className="gdlr-blog-excerpt">
                                    Quà thành viên, điểm (1000+3%), phiếu giảm
                                    giá 10%,...
                                    <div className="clear" />
                                    <a
                                      href="sedial-eiusmod-tempor\index.html"
                                      className="excerpt-read-more"
                                    >
                                      Continue Reading
                                      <i className="fa fa-long-arrow-right icon-long-arrow-right" />
                                    </a>
                                  </div>
                                  <div className="clear" />
                                </header>
                                {/* entry-header */}
                                <div className="clear" />
                              </div>
                            </article>
                            {/* #post */}
                          </div>
                        </div>
                        <div className="gdlr-item gdlr-blog-widget">
                          <div className="gdlr-ux gdlr-blog-widget-ux">
                            <article
                              id="post-2211"
                              className="post-2211 post type-post status-publish format-gallery has-post-thumbnail hentry category-blog category-life-style category-news-article tag-blog tag-gallery-thumbnail tag-life-style tag-news post_format-post-format-gallery"
                            >
                              <div className="gdlr-standard-style">
                                <div className="blog-date-wrapper gdlr-title-font">
                                  <span className="blog-date-day">10 ngày</span>
                                  <span className="blog-date-month">
                                    1000 điểm
                                  </span>
                                </div>
                                <header className="post-header">
                                  <h3 className="gdlr-blog-title">
                                    <a href="gallery-post-format-title\index.html">
                                      Hạng Vàng
                                    </a>
                                  </h3>
                                  <div className="gdlr-blog-excerpt">
                                    Quà thành viên, điểm(3000+5%), phiếu giảm
                                    giá 20%, quà khác...
                                    <div className="clear" />
                                    <a
                                      href="gallery-post-format-title\index.html"
                                      className="excerpt-read-more"
                                    >
                                      Continue Reading
                                      <i className="fa fa-long-arrow-right icon-long-arrow-right" />
                                    </a>
                                  </div>
                                  <div className="clear" />
                                </header>
                                {/* entry-header */}
                                <div className="clear" />
                              </div>
                            </article>
                            {/* #post */}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="six columns">
                    <div className="gdlr-item-title-wrapper gdlr-item pos-left pos-left-divider ">
                      <div className="gdlr-item-title-head">
                        <h3 className="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                          Trưng bày
                        </h3>
                        <div className="clear" />
                      </div>
                      <div className="gdlr-item-title-divider" />
                    </div>
                    <div className="gdlr-gallery-item gdlr-item">
                      <div className="gallery-column six columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb1.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb2.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb3.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb4.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb5.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="clear" />
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb6.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb7.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb8.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="gallery-column three columns">
                        <div className="gallery-item">
                          <img
                            src="frontend\anh\tb9.png"
                            alt=""
                            width={400}
                            height={400}
                          />
                        </div>
                      </div>
                      <div className="clear" />
                    </div>
                  </div>
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
            <section id="content-section-7">
              <div
                className="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-testimonial"
                style={{
                  backgroundColor: "#1e1e1e",
                  paddingTop: "80px",
                  paddingBottom: "45px"
                }}
              >
                <div className="container">
                  <div className="gdlr-testimonial-item-wrapper">
                    <div className="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                      <div className="gdlr-item-title-head">
                        <h3 className="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                          SHILLA REWARDS
                        </h3>
                        <div className="gdlr-item-title-carousel">
                          <i className="icon-angle-left gdlr-flex-prev" />
                          <i className="icon-angle-right gdlr-flex-next" />
                        </div>
                        <div className="clear" />
                      </div>
                    </div>
                    <div className="gdlr-item gdlr-testimonial-item carousel large plain-style">
                      <div className="gdlr-ux gdlr-testimonial-ux">
                        <div
                          className="flexslider"
                          data-type="carousel"
                          data-nav-container="gdlr-testimonial-item"
                          data-columns={1}
                        >
                          <ul className="slides">
                            <li className="testimonial-item">
                              <div className="testimonial-content gdlr-skin-content">
                                <p>
                                  Shilla Rewards là dịch vụ tổng hợp hoàn toàn
                                  mới dành cho hội viên, cung cấp các ưu đãi và
                                  lợi ích điểm thường tại Seoul/Jeju Shilla
                                  Hotel, Shilla Monogram, Shilla Stay và các
                                  khách sạn liên kết.
                                </p>
                              </div>
                              <div className="testimonial-info">
                                <span className="testimonial-author gdlr-skin-link-color">
                                  Co-op
                                </span>
                                <span className="testimonial-position gdlr-skin-info">
                                  <span>, </span>Shilla Stay
                                </span>
                              </div>
                            </li>
                            <li className="testimonial-item">
                              <div className="testimonial-content gdlr-skin-content">
                                <p>
                                  Tận hưởng kỳ nghi dưỡng của bạn tại Đà Năng.
                                  Việt Nam với nhiều hoạt động bao gồm các sự
                                  kiện và các môn thể thao giải trí.
                                </p>
                              </div>
                              <div className="testimonial-info">
                                <span className="testimonial-author gdlr-skin-link-color">
                                  Phòng giải trí
                                </span>
                                <span className="testimonial-position gdlr-skin-info">
                                  <span>, </span>Shilla Monogram
                                </span>
                              </div>
                            </li>
                            <li className="testimonial-item">
                              <div className="testimonial-content gdlr-skin-content">
                                Tại Little Monogram, các khách hàng nhỏ tuổi có
                                thể thoả sức vui chơi với các hoạt động như leo
                                núi nhân tạo, nhà bóng, cầu trượt và cửa hàng
                                cho các bạn nhỏ mặc thử nhiều loại trang phục
                                khác nhau.
                                <p />
                              </div>
                              <div className="testimonial-info">
                                <span className="testimonial-author gdlr-skin-link-color">
                                  Không gian mở
                                </span>
                                <span className="testimonial-position gdlr-skin-info">
                                  <span>, </span>Dành cho khách nhí
                                </span>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="clear" />
                  <div className="clear" />
                </div>
              </div>
              <div className="clear" />
            </section>
          </div>
        </div>
        {/* gdlr-content */}
        <div className="clear" />
      </div>
    </>
  );
}
export default Home;
