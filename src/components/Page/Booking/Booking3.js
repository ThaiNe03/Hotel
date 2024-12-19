import axios from "axios";
import React, { useState } from "react";
import Cookies from "js-cookie";
import { useLocation, useNavigate } from "react-router-dom";
import Swal from "sweetalert2";

function Booking3() {
  const token = Cookies.get("token");

  const navigate = useNavigate();
  const location = useLocation();
  const idRoom = location.state?.idRoom;
  const checkIn = location.state?.checkIn;
  const checkOut = location.state?.checkOut;

  console.log(checkIn);
  console.log(checkOut);
  console.log(idRoom);

  // State variables for each form input
  const [firstName, setFirstName] = useState("");
  const [lastName, setLastName] = useState("");
  const [email, setEmail] = useState("");
  const [phone, setPhone] = useState("");
  const [address, setAddress] = useState("");
  const [additionalNote, setAdditionalNote] = useState("");
  const [coupon, setCoupon] = useState("");
  const [paymentMethod, setPaymentMethod] = useState("paypal");

  // Handle form submission (if needed)
  const handleSubmit = async (event) => {
    event.preventDefault();
    // Handle form submission logic here

    const data = {
      IssueDate: checkIn,
      DueDate: checkOut,
      firstName: firstName,
      lastName: lastName,
      email: email,
      phone: phone,
      id_room: idRoom
    };

    const params = new URLSearchParams(data).toString();

    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/booking",
        params,
        {
          headers: {
            Accept: "application/json",
            Authorization: `Bearer ${token}`
          }
        }
      );

      console.log("Kết quả trả về từ server:", response.data);

      Swal.fire({
        position: "center",
        icon: "success",
        title: response.data.message,
        showConfirmButton: false,
        timer: 1500
      });

      navigate("/booking4", {
        state: { total_price: response.data.total_price }
      });
    } catch (error) {
      console.error(
        "Lỗi khi gửi yêu cầu:",
        error.response ? error.response.data : error.message
      );
    }
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
                        className="gdlr-reservation-bar-summary-form gdlr-active"
                        id="gdlr-reservation-bar-summary-form"
                        style={{ display: "block" }}
                      >
                        <div className="gdlr-price-summary-wrapper">
                          <div className="gdlr-price-summary-head">
                            Giảm giá
                          </div>
                          <div className="gdlr-price-room-summary">
                            <div className="gdlr-price-room-summary-title">
                              Phòng 1 : Standard Room – One King Bed
                            </div>
                            <div className="gdlr-price-room-summary-info gdlr-title-font">
                              <span>Người lớn : 2</span>
                              <span>Trẻ em : 0</span>
                              <span
                                className="gdlr-price-room-summary-price"
                                href="#"
                              >
                                $90.00
                              </span>
                            </div>
                          </div>
                          <div className="gdlr-service-price-summary">
                            <div className="gdlr-service-price-summary-head">
                              Dịch vụ thêm
                            </div>
                            <div className="gdlr-service-price-summary-item">
                              <span className="gdlr-head">
                                Wifi<span className="gdlr-sep">/</span>1 phòng
                              </span>
                              <span className="gdlr-tail">$14.00</span>
                              <div className="clear" />
                            </div>
                          </div>
                          <div className="gdlr-price-summary-vat">
                            <div className="gdlr-price-summary-vat-total">
                              <span className="gdlr-head">Thành tiền</span>
                              <span className="gdlr-tail">$90.00</span>
                              <div className="clear" />
                            </div>
                            <div className="gdlr-price-summary-vat-amount">
                              <span className="gdlr-head">Vat 8%</span>
                              <span className="gdlr-tail">$7.20</span>
                              <div className="clear" />
                            </div>
                          </div>
                          <div className="gdlr-price-summary-grand-total gdlr-active">
                            <span className="gdlr-head">Tổng cộng</span>
                            <span className="gdlr-tail">$97.20</span>
                          </div>
                          <div className="gdlr-price-deposit-wrapper">
                            <div className="gdlr-price-deposit-input">
                              <span className="gdlr-active">
                                <label className="gdlr-radio-input">
                                  <input
                                    type="radio"
                                    name="pay_deposit"
                                    defaultValue="false"
                                    defaultChecked
                                  />
                                </label>
                                Thanh toán toàn bộ
                              </span>
                              <span>
                                <label className="gdlr-radio-input">
                                  <input
                                    type="radio"
                                    name="pay_deposit"
                                    defaultValue="true"
                                  />
                                </label>
                                Thanh toán đặt cọc 20%
                              </span>
                            </div>
                            <div className="gdlr-price-deposit-inner-wrapper">
                              <div className="gdlr-price-deposit-title">
                                Trả trước 20%
                              </div>
                              <div className="gdlr-price-deposit-caption">
                                *Thanh toán phần còn lại khi đến nơi
                              </div>
                              <div className="gdlr-price-deposit-amount">
                                $19.44
                              </div>
                            </div>
                          </div>
                          <a
                            id="gdlr-edit-booking-button"
                            className="gdlr-edit-booking-button gdlr-button with-border"
                            href="{{route('choose1')}}"
                          >
                            Chỉnh sửa đặt phòng
                          </a>
                        </div>
                      </div>
                      <div
                        className="gdlr-reservation-bar-room-form"
                        id="gdlr-reservation-bar-room-form"
                        style={{ display: "none", height: "auto" }}
                      >
                        <div className="gdlr-reservation-room gdlr-title-font ">
                          <i className="fa fa-angle-double-right icon-double-angle-right" />
                          <div className="gdlr-reservation-room-content">
                            <div className="gdlr-reservation-room-title">
                              Room 1 : Standard Room – One King Bed
                            </div>
                            <div className="gdlr-reservation-room-info">
                              <span>Adult : 2</span>
                              <span>Children : 0</span>
                              <a
                                data-room={1}
                                className="gdlr-reservation-change-room"
                                href="#"
                              >
                                Change Room
                              </a>
                            </div>
                          </div>
                          <input
                            type="text"
                            name="gdlr-room-id[]"
                            defaultValue={3596}
                          />
                        </div>
                      </div>
                      <div
                        className="gdlr-reservation-bar-date-form"
                        id="gdlr-reservation-bar-date-form"
                        style={{ display: "none" }}
                      >
                        <div className="gdlr-reservation-field gdlr-resv-datepicker">
                          <span className="gdlr-reservation-field-title">
                            Check In
                          </span>
                          <div className="gdlr-datepicker-wrapper">
                            <input
                              type="text"
                              id="gdlr-check-in"
                              className="gdlr-datepicker hasDatepicker"
                              data-current-date="2024-05-27"
                              autoComplete="off"
                              data-dfm="d M yy"
                              data-block="[]"
                              defaultValue="2024-05-27"
                            />
                            <input
                              type="hidden"
                              className="gdlr-datepicker-alt"
                              name="gdlr-check-in"
                              autoComplete="off"
                              defaultValue="2024-05-27"
                            />
                          </div>
                        </div>
                        <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
                          <span className="gdlr-reservation-field-title">
                            Nights
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
                        <div className="clear" />
                        <div className="gdlr-reservation-field gdlr-resv-datepicker">
                          <span className="gdlr-reservation-field-title">
                            Check Out
                          </span>
                          <div className="gdlr-datepicker-wrapper">
                            <input
                              type="text"
                              id="gdlr-check-out"
                              className="gdlr-datepicker hasDatepicker"
                              data-current-date="2024-05-27"
                              autoComplete="off"
                              data-min-night={1}
                              data-dfm="d M yy"
                              data-block="[]"
                              defaultValue="2024-05-28"
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
                        <div className="clear" />
                        <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                          <span className="gdlr-reservation-field-title">
                            Rooms
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
                              Room <span>1</span>
                            </div>
                            <div className="gdlr-reservation-field gdlr-resv-combobox ">
                              <span className="gdlr-reservation-field-title">
                                Adults
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
                                Children
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
                      <div className="gdlr-booking-content">
                        <div
                          className="gdlr-booking-process-bar"
                          id="gdlr-booking-process-bar"
                          data-state={3}
                        >
                          <div
                            data-process={1}
                            className="gdlr-booking-process"
                          >
                            1. Chọn thời gian
                          </div>
                          <div
                            data-process={2}
                            className="gdlr-booking-process"
                          >
                            2. Chọn phòng
                          </div>
                          <div
                            data-process={3}
                            className="gdlr-booking-process gdlr-active"
                          >
                            3. Đặt phòng
                          </div>
                          <div
                            data-process={4}
                            className="gdlr-booking-process"
                          >
                            4. Xác nhận
                          </div>
                        </div>
                        <div className="gdlr-booking-content-wrapper">
                          <div
                            className="gdlr-booking-content-inner"
                            id="gdlr-booking-content-inner"
                            style={{ opacity: 1, height: "auto" }}
                          >
                            <div className="gdlr-booking-contact-container">
                              <form
                                className="gdlr-booking-contact-form"
                                method="post"
                                data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php"
                                onSubmit={handleSubmit}
                              >
                                <p className="gdlr-form-half-left">
                                  <span>Tên *</span>
                                  <input
                                    type="text"
                                    name="first_name"
                                    value={firstName}
                                    onChange={(e) =>
                                      setFirstName(e.target.value)
                                    }
                                  />
                                </p>
                                <p className="gdlr-form-half-right">
                                  <span>Họ *</span>
                                  <input
                                    type="text"
                                    name="last_name"
                                    value={lastName}
                                    onChange={(e) =>
                                      setLastName(e.target.value)
                                    }
                                  />
                                </p>
                                <div className="clear" />
                                <p className="gdlr-form-half-left">
                                  <span>Email *</span>
                                  <input
                                    type="text"
                                    name="email"
                                    value={email}
                                    onChange={(e) => setEmail(e.target.value)}
                                  />
                                </p>
                                <p className="gdlr-form-half-right">
                                  <span>Số điện thoại *</span>
                                  <input
                                    type="text"
                                    name="phone"
                                    value={phone}
                                    onChange={(e) => setPhone(e.target.value)}
                                  />
                                </p>
                                <div className="clear" />
                                <p className="gdlr-form-half-left">
                                  <span>Địa chỉ</span>
                                  <textarea
                                    name="address"
                                    value={address}
                                    onChange={(e) => setAddress(e.target.value)}
                                  />
                                </p>
                                <p className="gdlr-form-half-right">
                                  <span>Ghi chú</span>
                                  <textarea
                                    name="additional-note"
                                    value={additionalNote}
                                    onChange={(e) =>
                                      setAdditionalNote(e.target.value)
                                    }
                                  />
                                </p>
                                <div className="clear" />
                                <p className="gdlr-form-coupon">
                                  <span>Mã giảm giá</span>
                                  <input
                                    type="text"
                                    name="coupon"
                                    id="gdlr-coupon-id"
                                    value={coupon}
                                    onChange={(e) => setCoupon(e.target.value)}
                                    data-action="gdlr_hotel_coupon_check"
                                  />
                                </p>
                                <div className="clear" />
                                <div className="gdlr-error-message" />
                                <a
                                  href="#"
                                  className="gdlr-button with-border gdlr-booking-contact-submit"
                                >
                                  Đặt ngay bây giờ qua email và chúng tôi sẽ
                                  liên hệ lại với bạn.
                                </a>
                                <div className="gdlr-booking-contact-or">
                                  Or
                                  <div className="gdlr-booking-contact-or-divider gdlr-left" />
                                  <div className="gdlr-booking-contact-or-divider gdlr-right" />
                                </div>
                                <div className="gdlr-payment-method">
                                  <label className="gdlr-active">
                                    <input
                                      type="radio"
                                      name="payment-method"
                                      value="paypal"
                                      checked={paymentMethod === "paypal"}
                                      onChange={() =>
                                        setPaymentMethod("paypal")
                                      }
                                    />
                                    <img
                                      src="https://demo.goodlayers.com/hotelmaster/dark/wp-content/plugins/gdlr-hotel/include/../images/paypal.png"
                                      alt=""
                                    />
                                  </label>
                                  <label>
                                    <input
                                      type="radio"
                                      name="payment-method"
                                      value="stripe"
                                      checked={paymentMethod === "stripe"}
                                      onChange={() =>
                                        setPaymentMethod("stripe")
                                      }
                                    />
                                    <img
                                      src="https://demo.goodlayers.com/hotelmaster/dark/wp-content/plugins/gdlr-hotel/include/../images/stripe.png"
                                      alt=""
                                    />
                                  </label>
                                  <label>
                                    <input
                                      type="radio"
                                      name="payment-method"
                                      value="authorize"
                                      checked={paymentMethod === "authorize"}
                                      onChange={() =>
                                        setPaymentMethod("authorize")
                                      }
                                    />
                                    <img
                                      src="https://demo.goodlayers.com/hotelmaster/dark/wp-content/plugins/gdlr-hotel/include/../images/authorize.png"
                                      alt=""
                                    />
                                  </label>
                                </div>
                                <div
                                  className="gdlr-button with-border gdlr-booking-payment-submit"
                                  onClick={handleSubmit}
                                >
                                  Thanh toán ngay
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div className="clear" />
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
          {/* gdlr-content */}
          <div className="clear" />
        </div>
      </div>
    </div>
  );
}
export default Booking3;
