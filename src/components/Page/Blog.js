import axios from "axios";
import React from "react";
import { useEffect, useState } from "react";

function Blog() {
  const [listRoom, setListRoom] = useState([]);
  const fetchDataRoom = async () => {
    try {
      const response = await axios.get(`http://127.0.0.1:8000/api/list-blog`, {
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

  return (
    <div>
      <div className="gdlr-page-title-wrapper">
        <div className="gdlr-page-title-overlay" />
        <div className="gdlr-page-title-container container">
          <h1 className="gdlr-page-title">Vui chơi - Ăn uống - Giải trí</h1>
          <span className="gdlr-page-caption">
            Cùng Nhà hàng, Quầy bar &amp; Lounge
          </span>
        </div>
      </div>
      {/* is search */}
      <div className="content-wrapper">
        <div className="gdlr-content">
          <div className="with-sidebar-wrapper">
            <div className="with-sidebar-container container">
              <div className="with-sidebar-left eight columns">
                <div className="with-sidebar-content twelve columns">
                  <section id="content-section-1">
                    <div className="section-container container">
                      <div className="blog-item-wrapper">
                        <div className="blog-item-holder">
                          {listRoom.map((room, index) => {
                            return (
                              <div className="gdlr-item gdlr-blog-full">
                                <div className="gdlr-ux gdlr-blog-full-ux">
                                  <article
                                    id="post-859"
                                    className="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row"
                                  >
                                    <div className="gdlr-standard-style">
                                      <div className="gdlr-blog-thumbnail">
                                        <img
                                          src={
                                            room.img
                                              ? room.img
                                              : "https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg"
                                          }
                                          alt=""
                                          width={750}
                                          height={330}
                                        />
                                      </div>
                                      <div className="blog-content-wrapper">
                                        <header className="post-header">
                                          <div className="gdlr-blog-info gdlr-info">
                                            <div className="blog-info blog-author">
                                              <i className="fa fa-pencil" />
                                              Duy Thái
                                            </div>
                                            <div className="blog-info blog-category">
                                              <i className="fa fa-folder-open-o" />
                                              Blog
                                              <span className="sep" />{" "}
                                            </div>
                                            <div className="clear" />
                                          </div>
                                          <h3 className="gdlr-blog-title">
                                            {room.blog_name}
                                          </h3>
                                          <div className="clear" />
                                        </header>
                                        <div className="gdlr-blog-content">
                                          {room.detail_describe}
                                        </div>
                                        {/* blog content wrapper */}
                                      </div>
                                    </div>
                                  </article>
                                  {/* #post */}
                                </div>
                              </div>
                            );
                          })}
                        </div>
                        {/* #post */}
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div className="clear" />
            </div>
          </div>
          <div className="clear" />
        </div>
        <div className="gdlr-sidebar gdlr-right-sidebar four columns">
          <div className="gdlr-item-start-content sidebar-right-item">
            <div
              id="search-3"
              className="widget widget_search gdlr-item gdlr-widget"
            >
              <div className="clear" />
            </div>
          </div>
        </div>
        <div className="clear" />
      </div>
    </div>
  );
}
export default Blog;
