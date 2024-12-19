import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Home";
import Room from "./components/Page/Room";
import Booking from "./components/Page/Booking/Booking1";
import Booking2 from "./components/Page/Booking/Booking2";
import Booking3 from "./components/Page/Booking/Booking3";
import Booking4 from "./components/Page/Booking/Booking4";
import Blog from "./components/Page/Blog";
import Product from "./components/Page/Product";
import Facility from "./components/Page/Facility";
import DetailRoom from "./components/Page/DetailRoom";
import SignUp from "./components/Page/Signup";
import Login from "./components/Page/Login";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <Router>
      <App>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/facility" element={<Facility />} />
          <Route path="/room" element={<Room />} />
          <Route path="/room/:id" element={<DetailRoom />} />
          <Route path="/booking" element={<Booking />} />
          <Route path="/booking2" element={<Booking2 />} />
          <Route path="/booking3" element={<Booking3 />} />
          <Route path="/booking4" element={<Booking4 />} />
          <Route path="/blog" element={<Blog />} />
          <Route path="/product" element={<Product />} />
          <Route path="/sign-up" element={<SignUp />} />
          <Route path="/login" element={<Login />} />
        </Routes>
      </App>
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
