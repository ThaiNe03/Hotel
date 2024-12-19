function Booking() {
  return (
    // <div>
    //   <div className="gdlr-page-title-wrapper">
    //     <div className="gdlr-page-title-overlay" />
    //     <div className="gdlr-page-title-container container">
    //       <h1 className="gdlr-page-title">Đặt phòng</h1>
    //     </div>
    //   </div>
    //   <div className="content-wrapper">
    //     <div className="gdlr-content">
    //       <div className="with-sidebar-wrapper">
    //         <div className="with-sidebar-container container gdlr-class-no-sidebar">
    //           <div className="with-sidebar-left twelve columns">
    //             <div className="with-sidebar-content twelve columns">
    //               <div
    //                 className="gdlr-item gdlr-item-start-content"
    //                 id="gdlr-single-booking-content"
    //                 data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php"
    //               >
    //                 <form
    //                   className="gdlr-reservation-bar"
    //                   id="gdlr-reservation-bar"
    //                   data-action="gdlr_hotel_booking"
    //                 >
    //                   <div className="gdlr-reservation-bar-title">
    //                     Đặt phòng của bạn
    //                   </div>
    //                   <div
    //                     className="gdlr-reservation-bar-summary-form"
    //                     id="gdlr-reservation-bar-summary-form"
    //                   />
    //                   <div
    //                     className="gdlr-reservation-bar-room-form"
    //                     id="gdlr-reservation-bar-room-form"
    //                   />
    //                   <div
    //                     className="gdlr-reservation-bar-date-form"
    //                     id="gdlr-reservation-bar-date-form"
    //                   >
    //                     <div className="gdlr-reservation-field gdlr-resv-datepicker">
    //                       <span className="gdlr-reservation-field-title">
    //                         Check In
    //                       </span>
    //                       <div className="gdlr-datepicker-wrapper">
    //                         <input
    //                           type="text"
    //                           id="gdlr-check-in"
    //                           className="gdlr-datepicker"
    //                           data-current-date="2024-05-29"
    //                           autoComplete="off"
    //                           data-dfm="d M yy"
    //                           data-block="[]"
    //                           defaultValue="2024-05-29"
    //                         />
    //                         <input
    //                           type="hidden"
    //                           className="gdlr-datepicker-alt"
    //                           name="gdlr-check-in"
    //                           autoComplete="off"
    //                           defaultValue="2024-05-29"
    //                         />
    //                       </div>
    //                     </div>
    //                     <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
    //                       <span className="gdlr-reservation-field-title">
    //                         Đêm
    //                       </span>
    //                       <div className="gdlr-combobox-wrapper">
    //                         <select name="gdlr-night" id="gdlr-night">
    //                           <option value={1} selected>
    //                             1
    //                           </option>
    //                           <option value={2}>2</option>
    //                           <option value={3}>3</option>
    //                           <option value={4}>4</option>
    //                           <option value={5}>5</option>
    //                           <option value={6}>6</option>
    //                           <option value={7}>7</option>
    //                           <option value={8}>8</option>
    //                           <option value={9}>9</option>
    //                         </select>
    //                       </div>
    //                     </div>
    //                     <div className="clear" />
    //                     <div className="gdlr-reservation-field gdlr-resv-datepicker">
    //                       <span className="gdlr-reservation-field-title">
    //                         Check Out
    //                       </span>
    //                       <div className="gdlr-datepicker-wrapper">
    //                         <input
    //                           type="text"
    //                           id="gdlr-check-out"
    //                           className="gdlr-datepicker"
    //                           data-current-date="2024-05-29"
    //                           autoComplete="off"
    //                           data-min-night={1}
    //                           data-dfm="d M yy"
    //                           data-block="[]"
    //                           defaultValue="2024-05-30"
    //                         />
    //                         <input
    //                           type="hidden"
    //                           className="gdlr-datepicker-alt"
    //                           name="gdlr-check-out"
    //                           autoComplete="off"
    //                           defaultValue="2024-05-30"
    //                         />
    //                       </div>
    //                     </div>
    //                     <div className="clear" />
    //                     <div className="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
    //                       <span className="gdlr-reservation-field-title">
    //                         Số lượng phòng
    //                       </span>
    //                       <div className="gdlr-combobox-wrapper">
    //                         <select
    //                           name="gdlr-room-number"
    //                           id="gdlr-room-number"
    //                         >
    //                           <option value={1} selected>
    //                             1
    //                           </option>
    //                           <option value={2}>2</option>
    //                           <option value={3}>3</option>
    //                           <option value={4}>4</option>
    //                           <option value={5}>5</option>
    //                           <option value={6}>6</option>
    //                           <option value={7}>7</option>
    //                           <option value={8}>8</option>
    //                           <option value={9}>9</option>
    //                         </select>
    //                       </div>
    //                     </div>
    //                     <div className="clear" />
    //                     <div
    //                       className="gdlr-reservation-people-amount-wrapper"
    //                       id="gdlr-reservation-people-amount-wrapper"
    //                     >
    //                       <div className="gdlr-reservation-people-amount">
    //                         <div className="gdlr-reservation-people-title">
    //                           Phòng <span>1</span>
    //                         </div>
    //                         <div className="gdlr-reservation-field gdlr-resv-combobox ">
    //                           <span className="gdlr-reservation-field-title">
    //                             Người lớn
    //                           </span>
    //                           <div className="gdlr-combobox-wrapper">
    //                             <select name="gdlr-adult-number[]">
    //                               <option value={1}>1</option>
    //                               <option value={2} selected>
    //                                 2
    //                               </option>
    //                               <option value={3}>3</option>
    //                               <option value={4}>4</option>
    //                               <option value={5}>5</option>
    //                               <option value={6}>6</option>
    //                               <option value={7}>7</option>
    //                               <option value={8}>8</option>
    //                               <option value={9}>9</option>
    //                             </select>
    //                           </div>
    //                         </div>
    //                         <div className="gdlr-reservation-field gdlr-resv-combobox ">
    //                           <span className="gdlr-reservation-field-title">
    //                             Trẻ em
    //                           </span>
    //                           <div className="gdlr-combobox-wrapper">
    //                             <select name="gdlr-children-number[]">
    //                               <option value={0}>0</option>
    //                               <option value={1}>1</option>
    //                               <option value={2}>2</option>
    //                               <option value={3}>3</option>
    //                               <option value={4}>4</option>
    //                               <option value={5}>5</option>
    //                               <option value={6}>6</option>
    //                               <option value={7}>7</option>
    //                               <option value={8}>8</option>
    //                               <option value={9}>9</option>
    //                             </select>
    //                           </div>
    //                         </div>
    //                         <div className="clear" />
    //                       </div>
    //                     </div>
    //                     <div className="clear" />
    //                     {"{"}
    //                     {"{"}-- href="{"{"}
    //                     {"{"}route('choose1'){"}"}
    //                     {"}"}" --{"}"}
    //                     {"}"}
    //                     <a
    //                       id="btn_kiemTra"
    //                       className="gdlr-reservation-bar-button gdlr-button with-border"
    //                     >
    //                       Kiểm tra
    //                     </a>
    //                     <div className="clear" />
    //                   </div>
    //                   <div
    //                     className="gdlr-reservation-bar-service-form"
    //                     id="gdlr-reservation-bar-service-form"
    //                   />
    //                 </form>
    //                 <div className="gdlr-booking-content">
    //                   <div
    //                     className="gdlr-booking-process-bar"
    //                     id="gdlr-booking-process-bar"
    //                     data-state={1}
    //                   >
    //                     <div
    //                       data-process={1}
    //                       className="gdlr-booking-process gdlr-active"
    //                     >
    //                       1. Chọn thời gian
    //                     </div>
    //                     <div data-process={2} className="gdlr-booking-process">
    //                       2. Chọn phòng
    //                     </div>
    //                     <div data-process={3} className="gdlr-booking-process">
    //                       3. Đặt phòng
    //                     </div>
    //                     <div data-process={4} className="gdlr-booking-process">
    //                       4. Xác nhận
    //                     </div>
    //                   </div>
    //                   <div className="gdlr-booking-content-wrapper">
    //                     <div
    //                       className="gdlr-booking-content-inner"
    //                       id="gdlr-booking-content-inner"
    //                     >
    //                       <div className="gdlr-datepicker-range-wrapper">
    //                         <div
    //                           className="gdlr-datepicker-range"
    //                           data-current-date="2024-05-29"
    //                           id="gdlr-datepicker-range"
    //                           data-dfm="d M yy"
    //                           data-block="[]"
    //                         />
    //                       </div>
    //                     </div>
    //                   </div>
    //                   <div className="clear" />
    //                 </div>
    //                 <div className="clear" />
    //               </div>
    //             </div>
    //             <div className="clear" />
    //           </div>
    //           <div className="clear" />
    //         </div>
    //       </div>
    //     </div>
    //     <div className="clear" />
    //   </div>
    // </div>

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
export default Booking;
