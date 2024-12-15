//import { Link } from "react-router-dom";

function Header() {
  return (
    <header id="header">
      <div className="gdlr-header-inner">
      <div className="gdlr-header-container container">
        <div className="gdlr-logo">
          <div className="gdlr-logo-inner">
            <a href="index.html">
              <img src="frontend\anh\logo.png" alt="" /></a>
            <div className="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
              <button className="dl-trigger">Open Menu</button>
              <ul id="menu-main-menu" className="dl-menu gdlr-main-mobile-menu">
                <li className="menu-item current-menu-item "><a href="/index">Trang chủ</a></li>
                <li className="menu-item menu-item-has-children"><a href="/about-us">Cơ sở vật chất</a>
                  <ul className="dl-submenu">
                    <li className="menu-item"><a href="about-us.html">Hồ bơi</a></li>
                    <li className="menu-item"><a href="contact-page.html">Hỗ trợ Page 1</a></li>
                    <li className="menu-item"><a href="contact-page-2.html">Contact Page 2</a></li>
                    <li className="menu-item menu-item-has-children"><a href="portfolio-grid-3-columns-no-space.html">Portfolio</a>
                      <ul className="dl-submenu">
                        <li className="menu-item menu-item-has-children"><a href="portfolio-grid-3-columns.html">Portfolio Classic</a>
                          <ul className="dl-submenu">
                            <li className="menu-item"><a href="portfolio-grid-1-column.html">Portfolio Grid 1 Column (Both Sidebar)</a></li>
                            <li className="menu-item"><a href="portfolio-grid-2-columns.html">Portfolio Grid 2 Columns (Right Sidebar)</a></li>
                            <li className="menu-item"><a href="portfolio-grid-3-columns.html">Portfolio Grid 3 Columns</a></li>
                            <li className="menu-item"><a href="portfolio-grid-4-columns.html">Portfolio Grid 4 Columns</a></li>
                            <li className="menu-item"><a href="portfolio-grid-2-columns-no-space.html">Portfolio Grid 2 Columns, No Space</a></li>
                          </ul>
                        </li>
                        <li className="menu-item menu-item-has-children"><a href="portfolio-modern-3-columns.html">Portfolio Modern</a>
                          <ul className="dl-submenu">
                            <li className="menu-item"><a href="portfolio-modern-3-columns.html">Portfolio Modern 3 Columns</a></li>
                            <li className="menu-item"><a href="portfolio-modern-4-columns.html">Portfolio Modern 4 Columns</a></li>
                            <li className="menu-item"><a href="portfolio-modern-3-columns-no-space.html">Portfolio Modern 3 Columns, No Space</a></li>
                            <li className="menu-item"><a href="portfolio-modern-4-columns-no-space.html">Portfolio Modern 4 Columns, No Space</a></li>
                          </ul>
                        </li>
                        <li className="menu-item menu-item-has-children"><a href="portfolio-modern-3-columns-with-filter.html">Portfolio With Filter</a>
                          <ul className="dl-submenu">
                            <li className="menu-item"><a href="portfolio-grid-1-columns-with-filter.html">Portfolio Grid 1 Col With Filter</a></li>
                            <li className="menu-item"><a href="portfolio-grid-2-columns-with-filter.html">Portfolio Grid 2 Cols With Filter</a></li>
                            <li className="menu-item"><a href="portfolio-grid-3-columns-with-filter.html">Portfolio Grid 3 Cols With Filter</a></li>
                            <li className="menu-item"><a href="portfolio-grid-4-columns-with-filter.html">Portfolio Grid 4 Cols With Filter</a></li>
                            <li className="menu-item"><a href="portfolio-modern-3-columns-with-filter.html">Portfolio Modern 3 Cols With Filter</a></li>
                            <li className="menu-item"><a href="portfolio-modern-4-columns-with-filter.html">Portfolio Modern 4 Cols With Filter</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li className="menu-item menu-item-has-children"><a href="room-classic-3-columns.html">Phòng</a>
                  <ul className="dl-submenu">
                    <li className="menu-item menu-item-has-children"><a href="room-modern-3-columns.html">Room Modern</a>
                      <ul className="dl-submenu">
                        <li className="menu-item"><a href="room-modern-1-column.html">Room Modern 1 Column</a></li>
                        <li className="menu-item"><a href="room-modern-2-columns.html">Room Modern 2 Columns</a></li>
                        <li className="menu-item"><a href="room-modern-3-columns.html">Room Modern 3 Columns</a></li>
                        <li className="menu-item"><a href="room-modern-4-columns-2.html">Room Modern 4 Columns</a></li>
                      </ul>
                    </li>
                    <li id="menu-item-4089" className="menu-item menu-item-4089"><a href="room-modern-new-style.html">Room Modern (New Style)</a></li>
                    <li className="menu-item menu-item-has-children"><a href="room-classic-3-columns.html">Room Classic 3 Columns</a>
                      <ul className="dl-submenu">
                        <li className="menu-item"><a href="room-classic-1-column.html">Room Classic 1 Column</a></li>
                        <li className="menu-item"><a href="room-classic-2-columns.html">Room Classic 2 Columns</a></li>
                        <li className="menu-item"><a href="room-classic-3-columns.html">Room Classic 3 Columns</a></li>
                        <li className="menu-item"><a href="room-classic-4-columns.html">Room Classic 4 Columns</a></li>
                      </ul>
                    </li>
                    <li className="menu-item"><a href="room-modern-4-columns.html">Room Medium Thumbnail</a></li>
                    <li id="menu-item-4088" className="menu-item menu-item-4088"><a href="room-medium-thumbnail-new-style.html">Room Medium Thumbnail (New Style)</a></li>
                    <li className="menu-item menu-item-type-post_type menu-item-object-room"><a href="superior-room-two-double-beds.html">Phòng đơn</a></li>
                  </ul>
                </li>
                <li className="menu-item"><a href="booking.html">Đặt lịch</a></li>
                <li className="menu-item menu-item-has-children"><a href="blog-full-with-right-sidebar.html">Hoạt động</a>
                  <ul className="dl-submenu">
                    <li className="menu-item menu-item-has-children"><a href="#">Blog Full</a>
                      <ul className="dl-submenu">
                        <li className="menu-item"><a href="blog-full-with-right-sidebar.html">Blog Full With Right Sidebar</a></li>
                        <li className="menu-item"><a href="blog-full-with-left-sidebar.html">Blog Full With Left Sidebar</a></li>
                        <li className="menu-item"><a href="blog-full-with-both-sidebar.html">Blog Full With Both Sidebar</a></li>
                      </ul>
                    </li>
                    <li className="menu-item menu-item-has-children"><a href="#">Blog Column</a>
                      <ul className="dl-submenu">
                        <li className="menu-item"><a href="blog-1-column.html">Blog 1 Column (Right Sidebar)</a></li>
                        <li className="menu-item"><a href="blog-2-columns.html">Blog 2 Columns (Right Sidebar)</a></li>
                        <li className="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                        <li className="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                      </ul>
                    </li></ul>
                </li></ul>
            </div>
          </div>
        </div>
        {/* navigation */}
        <div className="gdlr-navigation-wrapper">
          <nav className="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
            <ul id="menu-main-menu-1" className="sf-menu gdlr-main-menu">
              <li className="menu-item current-menu-item menu-item current-menu-item  gdlr-normal-menu"><a href="/">Trang chủ</a></li>
              <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="/about-us" className="sf-with-ul-pre">Cơ sở vật chất</a>
                <ul className="sub-menu">
                  <li className="menu-item"><a href="about-us.html">Tiện ích &amp; Dịch vụ</a></li>                                      
                </ul>
              </li>
              <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="room-classic-3-columns.html" className="sf-with-ul-pre">Phòng</a>
              </li>
              <li className="menu-itemmenu-item gdlr-normal-menu"><a href="booking.html">Đặt lịch</a></li>
              <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="blog-full-with-right-sidebar.html" className="sf-with-ul-pre">Blog</a>
              </li><li className="menu-item">
                <a href="menu.html">
                  Menu
                </a>
              </li>
            </ul>
          </nav>
          <span className="gdlr-menu-search-button-sep">•</span>
          <i className="fa fa-search icon-search gdlr-menu-search-button" id="gdlr-menu-search-button" />
          <div className="gdlr-menu-search" id="gdlr-menu-search">
            <form method="get" id="searchform" action="#">
              <div className="search-text">
                <input type="text" defaultValue="Type Keywords" name="s" autoComplete="off" data-default="Type Keywords" />
              </div>
              <input type="submit" defaultValue />
              <div className="clear" />
            </form>
          </div>
          <div className="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick" />
          <div className="clear" />
        </div>
        <div className="clear" />
      </div>
      </div>
    </header>
  );
}
export default Header;