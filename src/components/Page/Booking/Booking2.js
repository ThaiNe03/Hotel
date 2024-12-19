import React from "react";
import { useLocation, useNavigate } from "react-router-dom";

function Booking2() {
  const navigate = useNavigate();
  const location = useLocation();
  const result = location.state?.result;
  const checkIn = location.state?.checkIn;
  const checkOut = location.state?.checkOut;


  const handleBooking = async (item) => {
    navigate("/booking3", {
      state: { idRoom: item.id, checkIn, checkOut }
    });
  };

  return (
    <div>
      <div className="gdlr-page-title-wrapper">
        <div className="gdlr-page-title-overlay" />
        <div className="gdlr-page-title-container container">
          <h1 className="gdlr-page-title">Đặt phòng</h1>
        </div>
      </div>
      <div className="content-wrapper">
        <div className="gdlr-content">
          <div className="with-sidebar-wrapper">
            <div className="with-sidebar-container container gdlr-class-no-sidebar">
              <div className="with-sidebar-left twelve columns">
                <div className="with-sidebar-content twelve columns">
                  <div
                    className="gdlr-item gdlr-item-start-content"
                    id="gdlr-single-booking-content"
                    data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php"
                  >
                    <form
                      className="gdlr-reservation-bar"
                      id="gdlr-reservation-bar"
                      data-action="gdlr_hotel_booking"
                    >
                      <div className="gdlr-reservation-bar-title">
                        Đặt phòng của bạn
                      </div>
                      <div
                        className="gdlr-reservation-bar-summary-form"
                        id="gdlr-reservation-bar-summary-form"
                      />
                      <div
                        className="gdlr-reservation-bar-room-form"
                        id="gdlr-reservation-bar-room-form"
                      />
                      <div
                        className="gdlr-reservation-bar-room-form gdlr-active"
                        id="gdlr-reservation-bar-room-form"
                        style={{ display: "block" }}
                      >
                        <div className="gdlr-reservation-room gdlr-title-font gdlr-active">
                          <i className="fa fa-angle-double-right icon-double-angle-right" />
                          <div className="gdlr-reservation-room-content">
                            <div className="gdlr-reservation-room-title">
                              Phòng 1 :{" "}
                            </div>
                            <div className="gdlr-reservation-room-info">
                              <span>Người lớn : 2</span>
                              <span>Trẻ em : 0</span>
                            </div>
                          </div>
                          <input
                            type="text"
                            name="gdlr-room-id[]"
                            defaultValue
                          />
                        </div>
                      </div>
                      <div
                        className="gdlr-reservation-bar-date-form"
                        id="gdlr-reservation-bar-date-form"
                      >
                        <div className="gdlr-reservation-field gdlr-resv-datepicker">
                          <span className="gdlr-reservation-field-title">
                            Check In
                          </span>
                          <div className="gdlr-datepicker-wrapper">
                            <input
                              type="text"
                              className="gdlr-datepicker"
                              data-current-date="29/05/2024"
                              autoComplete="off"
                              data-dfm="dd/mm/yy"
                              data-block="[]"
                              defaultValue="29/05/2024"
                            />
                            <input
                              type="hidden"
                              className="gdlr-datepicker-alt"
                              name="gdlr-check-in"
                              autoComplete="off"
                              defaultValue="29/05/2024"
                            />
                          </div>
                        </div>
                        <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
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
                        <div className="clear"></div>
                        <div className="gdlr-reservation-field gdlr-resv-datepicker">
                          <span className="gdlr-reservation-field-title">
                            Check Out
                          </span>
                          <div className="gdlr-datepicker-wrapper">
                            <input
                              type="text"
                              id="gdlr-check-out"
                              className="gdlr-datepicker"
                              data-current-date="2024-05-27"
                              autoComplete="off"
                              data-min-night={1}
                              data-dfm="d M yy"
                              data-block="[]"
                              defaultValue="30 May 2024"
                            />
                            <input
                              type="hidden"
                              className="gdlr-datepicker-alt"
                              name="gdlr-check-out"
                              autoComplete="off"
                              defaultValue="2024-05-28"
                            />
                          </div>
                        </div>
                        <div className="clear"></div>
                        <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                          <span className="gdlr-reservation-field-title">
                            Số lượng phòng
                          </span>
                          <div className="gdlr-combobox-wrapper">
                            <select
                              name="gdlr-room-number"
                              id="gdlr-room-number"
                            >
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
                        <div className="clear" />
                        <div
                          className="gdlr-reservation-people-amount-wrapper"
                          id="gdlr-reservation-people-amount-wrapper"
                        >
                          <div className="gdlr-reservation-people-amount">
                            <div className="gdlr-reservation-people-title">
                              Phòng <span>1</span>
                            </div>
                            <div className="gdlr-reservation-field gdlr-resv-combobox ">
                              <span className="gdlr-reservation-field-title">
                                Người lớn
                              </span>
                              <div className="gdlr-combobox-wrapper">
                                <select name="gdlr-adult-number[]">
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
                                Trẻ em
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
                            <div className="clear" />
                          </div>
                        </div>
                        <div className="clear" />
                        <div className="clear" />
                      </div>
                      <div
                        className="gdlr-reservation-bar-service-form"
                        id="gdlr-reservation-bar-service-form"
                      />
                    </form>
                    <div className="gdlr-booking-content">
                      <div
                        className="gdlr-booking-process-bar"
                        id="gdlr-booking-process-bar"
                        data-state={2}
                      >
                        <div data-process={1} className="gdlr-booking-process">
                          1. Chọn thời gian
                        </div>
                        <div
                          data-process={2}
                          className="gdlr-booking-process gdlr-active"
                        >
                          2. Chọn phòng
                        </div>
                        <div data-process={3} className="gdlr-booking-process">
                          3. Đặt phòng
                        </div>
                        <div data-process={4} className="gdlr-booking-process">
                          4. Xác nhận
                        </div>
                      </div>
                      <div className="clear" />
                    </div>
                    <div
                      className="gdlr-booking-content-inner"
                      id="gdlr-booking-content-inner"
                      style={{ opacity: 1, height: "auto" }}
                    >
                      <div className="gdlr-booking-room-wrapper">
                        <div className="gdlr-item gdlr-room-item gdlr-medium-room ">
                          <div className="gdlr-ux gdlr-medium-room-ux">
                            {result?.map((item, index) => {
                              console.log(item);
                              return (
                                <>
                                  <div>
                                    <div
                                      className="gdlr-room-thumbnail"
                                      key={index}
                                    >
                                      <img
                                        src="https://demo.goodlayers.com/hotelmaster/dark/wp-content/uploads/2015/03/photodune-2676493-suite-bed-room-with-balcony-of-a-luxury-resort-m-400x300.jpg"
                                        alt=""
                                        width={400}
                                        height={300}
                                      />
                                    </div>
                                    <div className="gdlr-room-content-wrapper">
                                      <h3 className="gdlr-room-title">
                                        {item[0].room_name}
                                      </h3>
                                      <div className="gdlr-hotel-room-info">
                                        <div className="gdlr-room-info">
                                          <i className="fa fa-check-square-o icon-check" />
                                          <span className="gdlr-head">Bed</span>
                                          <span className="gdlr-tail">
                                            1 King Bed
                                          </span>
                                        </div>
                                        <div className="gdlr-room-info">
                                          <i className="fa fa-check-square-o icon-check" />
                                          <span className="gdlr-head">Max</span>
                                          <span className="gdlr-tail">
                                            3 People
                                          </span>
                                        </div>
                                        <div className="gdlr-room-info">
                                          <i className="fa fa-check-square-o icon-check" />
                                          <span className="gdlr-head">
                                            View
                                          </span>
                                          <span className="gdlr-tail">
                                            City
                                          </span>
                                        </div>
                                        <div className="clear" />
                                      </div>
                                      {/* <div className="gdlr-room-content">
                                      Nằm ở Đà Nẵng, cách Bãi biển Thanh Bình
                                      2.9 km, Shilla Monogram cung cấp chỗ nghỉ
                                      có hồ bơi ngoài trời, chỗ đậu xe riêng
                                      miễn phí, trung tâm thể dục và phòng chờ
                                      chung. Mỗi phòng tại khách sạn 5 sao này
                                      đều nhìn ra thành phố, đồng thời khách có
                                      thể sử dụng sân hiên và phòng xông hơi
                                      khô. Chỗ nghỉ này cung cấp dịch vụ phòng,
                                      quầy lễ tân 24 giờ và dịch vụ thu đổi
                                      ngoại tệ cho khách. Tại khách sạn, tất cả
                                      các phòng có điều hòa, khu vực ghế ngồi,
                                      TV màn hình phẳng có truyền hình vệ tinh,
                                      két an toàn, phòng tắm riêng, vòi sen, đồ
                                      vệ sinh cá nhân miễn phí và máy sấy tóc.
                                      Tại đây, phòng nào cũng có ga trải giường
                                      và khăn tắm.
                                    </div> */}
                                      <div
                                        className="gdlr-room-selection gdlr-button with-border"
                                        onClick={() => {
                                          handleBooking(item[0]);
                                        }}
                                      >
                                        Chọn phòng này
                                      </div>
                                      <div className="gdlr-room-price">
                                        <span className="gdlr-head">
                                          Giá chỉ từ
                                        </span>
                                        <span className="gdlr-tail">
                                          {item[0].price.toLocaleString(
                                            "vi-VN"
                                          )}{" "}
                                          / Đêm
                                        </span>
                                        <div className="gdlr-price-break-down">
                                          {/* <span>* Xem giảm giá</span>
                                        <div className="price-breakdown-wrapper">
                                          <div className="price-breakdown-close" />
                                          <div className="price-breakdown-content">
                                            <div className="price-breakdown-info">
                                              <span className="gdlr-head">
                                                Base Price
                                                <span>x 1 Night (Weekday)</span>
                                              </span>
                                              <span className="gdlr-tail">
                                                $90.00
                                              </span>
                                            </div>
                                            <div className="price-breakdown-total">
                                              <span className="gdlr-head">
                                                Total
                                                <span className>
                                                  *vat is not included yet
                                                </span>
                                              </span>
                                              <span className="gdlr-tail">
                                                $90.00
                                              </span>
                                            </div>
                                          </div>
                                        </div> */}
                                        </div>
                                      </div>
                                      <div className="clear" />
                                    </div>
                                  </div>
                                </>
                              );
                            })}
                            <div className="clear" />
                          </div>
                        </div>
                        <div className="clear" />
                      </div>
                    </div>
                    <div className="clear" />
                  </div>
                </div>
                <div className="clear" />
              </div>
              <div className="clear" />
            </div>
          </div>
        </div>

        <div className="clear" />
      </div>
    </div>
  );
}
export default Booking2;
