import { Link,useNavigate } from "react-router-dom";
import React, { useState } from "react";
import Cookies from "js-cookie";
import Swal from "sweetalert2";
import axios from "axios";

const Login = () => {
  const navigate = useNavigate();
  const [formData, setFormData] = useState({
    username: "",
    password: ""
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (formData.username === "" || formData.password === "") {
      Swal.fire({
        title: "Please fill in all fields!",
        icon: "warning"
      });

      return;
    }
    const formDataNew = new FormData();
    formDataNew.append("email", formData.username);
    formDataNew.append("password", formData.password);

    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/login",
        formDataNew,
        {
          headers: {
            "Content-Type": "multipart/form-data",
            Accept: "application/json"
          }
        }
      );
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Login successfully",
        showConfirmButton: false,
        timer: 1500
      });
      Cookies.set('Auth', JSON.stringify(response.data.Auth), {
        expires: 30,
        path: '/',
      });
      Cookies.set('token', response.data.token, {
        expires: 30,
        path: '/',
      });
      setTimeout(() => {
        navigate("/");
      }, 1500);
    } catch (error) {
      Swal.fire({
        title: "Fails!",
        text: error.response.data.message,
        icon: "error"
      });
    }
  };

  return (
    <div className="login">
      <div className="login__container">
        <h1>Đăng Nhập</h1>
        <form onSubmit={handleSubmit}>
          <h5>Username</h5>
          <input
            type="text"
            name="username"
            className="input-login-username"
            value={formData.username}
            onChange={handleChange}
          />
          <h5>Password</h5>
          <input
            type="password"
            name="password"
            className="input-login-password"
            value={formData.password}
            onChange={handleChange}
          />
          <button type="submit" className="login__signInButton">
            Đăng Nhập
          </button>
        </form>
        <Link
          to="/sign-up"
          className="login__registerButton"
          style={{ color: "rgb(48, 123, 244)" }}
        >
          Tạo tài khoản mới
        </Link>
      </div>
    </div>
  );
};

export default Login;
