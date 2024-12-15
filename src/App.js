import "./App.css";
import Footer from "./components/Layout/Footer";
import Header from "./components/Layout/Header";

function App(props) {
  return (
    <div>
      <body data-rsssl="1" class="home page-template-default page page-id-3720 _masterslider _msp_version_3.2.2  hotelmaster-button-classic-style  header-style-2  hotelmaster-classic-style  hotelmaster-single-classic-style">
        <div class="body-wrapper  float-menu gdlr-icon-light gdlr-header-solid" data-home="#">
          <Header />
            {props.children}
          <Footer />
        </div>
      </body>
      
    </div>
  );
}

export default App;
