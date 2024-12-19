// import { Link } from "react-router-dom";

import axios from "axios";
import React from "react";
import { useNavigate } from "react-router-dom";
import { useEffect, useState } from "react";

function Room() {
  const navigate = useNavigate();
  const [listRoom, setListRoom] = useState([]);
  const fetchDataRoom = async () => {
    try {
      const response = await axios.get(`http://127.0.0.1:8000/api/list-room`, {
        headers: {
          Accept: "application/json"
        }
      });
      setListRoom(response.data);
    } catch (error) {
      console.error(error);
    }
  };
  useEffect(() => {
    fetchDataRoom();
  }, []);
  const handleDetailRoom = (id) => {
    navigate(`/room/${id}`);
  };
  return (
    <div>
      <div className="gdlr-page-title-wrapper">
        <div className="gdlr-page-title-overlay" />
        <div className="gdlr-page-title-container container">
          <h1 className="gdlr-page-title">Phòng</h1>
          <span className="gdlr-page-caption">Tất cả đều có tại đây</span>
        </div>
      </div>
      <div id="gdlr-header-substitute"></div>

      <div className="content-wrapper">
        <div className="gdlr-content">
          <div className="with-sidebar-wrapper">
            <section id="content-section-1">
              <div className="section-container container">
                <div
                  className="room-item-wrapper type-classic"
                  style={{ marginBottom: "30px" }}
                >
                  <div className="room-item-holder ">
                    <div className="clear" />
                    {listRoom.map((room, index) => {
                      return (
                        <React.Fragment key={index}>
                          <div className="four columns" onClick={() => {handleDetailRoom(room.id)}}>
                            <div className="gdlr-item gdlr-room-item gdlr-classic-room">
                              <div className="gdlr-ux gdlr-classic-room-ux">
                                <div className="gdlr-room-thumbnail">
                                  <img
                                    src={
                                      room.room_category.image
                                        ? room.room_category.image
                                        : "https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg"
                                    }
                                    alt=""
                                    width={700}
                                    height={400}
                                  />
                                </div>
                                <h3 className="gdlr-room-title">
                                  {room.room_name} -{" "}
                                  {room.room_category.room_type}
                                </h3>
                                <div className="gdlr-hotel-room-info">
                                  <div className="gdlr-room-info">
                                    <i className="fa fa-check-square-o icon-check" />
                                    <span className="gdlr-head">Giường</span>
                                    <span className="gdlr-tail">
                                      1 giường đôi / 2 giường đơn
                                    </span>
                                  </div>
                                  <div className="gdlr-room-info">
                                    <i className="fa fa-check-square-o icon-check" />
                                    <span className="gdlr-head">
                                      Người tối đa
                                    </span>
                                    <span className="gdlr-tail">3</span>
                                  </div>
                                  <div className="gdlr-room-info">
                                    <i className="fa fa-check-square-o icon-check" />
                                    <span className="gdlr-head">View</span>
                                    <span className="gdlr-tail">Thành phố</span>
                                  </div>
                                  <div className="gdlr-room-info">
                                    <i className="fa fa-check-square-o icon-check" />
                                    <span className="gdlr-head">Wifi</span>
                                    <span className="gdlr-tail">Có</span>
                                  </div>
                                  <div className="gdlr-room-price">
                                    <span className="gdlr-head">Giá từ</span>
                                    <span className="gdlr-tail">
                                      {room.price.toLocaleString("vi-VN")} VNĐ /
                                      Đêm
                                    </span>
                                  </div>
                                  <div className="clear" />
                                </div>
                              </div>
                            </div>
                          </div>
                          {(index + 1) % 3 === 0 && <div className="clear" />}
                        </React.Fragment>
                      );
                    })}
                    <div className="clear" />
                  </div>
                </div>
                <div className="clear" />
              </div>
            </section>
          </div>
          {/* Below Sidebar Section*/}
        </div>
        {/* gdlr-content */}
        <div className="clear" />
      </div>
    </div>
  );
}
export default Room;
