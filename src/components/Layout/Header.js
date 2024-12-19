import { Link } from "react-router-dom";

function Header() {
  return (
    <header id="header">
      <div className="gdlr-header-inner">
        <div className="gdlr-header-container container">
          <div className="gdlr-logo">
            <div className="gdlr-logo-inner">
              <img src="frontend\anh\logo.png" alt="" />
            </div>
          </div>
          {/* navigation */}
          <div className="gdlr-navigation-wrapper">
            <nav
              className="gdlr-navigation"
              id="gdlr-main-navigation"
              role="navigation"
            >
              <ul id="menu-main-menu-1" className="sf-menu gdlr-main-menu">
                <li className="menu-item current-menu-item menu-item current-menu-item  gdlr-normal-menu">
                  <Link to="/">Trang chủ</Link>
                </li>
                <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu">
                  <Link to="/facility">Cơ sở vật chất</Link>
                </li>
                <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu">
                  <Link to="/room">Phòng</Link>
                </li>
                <li className="menu-itemmenu-item gdlr-normal-menu">
                  <Link to="/booking">Đặt lịch</Link>
                </li>
                <li className="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu">
                  <Link to="/blog">Blog</Link>
                </li>
                <li className="menu-item">
                  <Link to="/product">Menu</Link>
                </li>
              </ul>
            </nav>
            <span className="gdlr-menu-search-button-sep">•</span>
            <i
              className="fa fa-search icon-search gdlr-menu-search-button"
              id="gdlr-menu-search-button"
            />
            <div className="gdlr-menu-search" id="gdlr-menu-search">
              <form method="get" id="searchform" action="#">
                <div className="search-text">
                  <input
                    type="text"
                    defaultValue="Type Keywords"
                    name="s"
                    autoComplete="off"
                    data-default="Type Keywords"
                  />
                </div>
                <input type="submit" defaultValue />
                <div className="clear" />
              </form>
            </div>
            <div
              className="gdlr-navigation-gimmick "
              id="gdlr-navigation-gimmick"
            />
            <div className="clear" />
          </div>
          <div className="clear" />
        </div>
      </div>
    </header>
  );
}
export default Header;
