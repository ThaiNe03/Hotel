import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./Home";
import Room from "./components/Page/Room";

import Blog from "./components/Page/Blog";
import Product from "./components/Page/Product";
import Facility from "./components/Page/Facility";
import DetailRoom from "./components/Page/DetailRoom";

import Booking1 from "./components/Page/Bookings/Booking1";

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
          <Route path="/booking" element={<Booking1 />} />
          <Route path="/blog" element={<Blog />} />
          <Route path="/product" element={<Product />} />
        </Routes>
      </App>
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
