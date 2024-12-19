import { Link, useNavigate } from "react-router-dom";
import React, { useState } from "react";
import Swal from "sweetalert2";
import axios from "axios";

const SignUp = () => {
  const navigate = useNavigate();
  const [formData, setFormData] = useState({
    username: "",
    email: "",
    password: "",
    phoneNumber: ""
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (
      formData.username === "" ||
      formData.email === "" ||
      formData.password === "" ||
      formData.phoneNumber === ""
    ) {
      Swal.fire({
        title: "Please fill in all fields!",
        icon: "warning"
      });

      return;
    }

    const formDataNew = new FormData();
    formDataNew.append("email", formData.email);
    formDataNew.append("password", formData.password);
    formDataNew.append("name", formData.username);
    formDataNew.append("phone", formData.phoneNumber);

    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/register",
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
        title: response.data[0],
        showConfirmButton: false,
        timer: 1500
      });
      setTimeout(() => {
        navigate("/login");
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
    <div className="signup">
      <div className="signup__container">
        <h1>Đăng Ký</h1>
        <form onSubmit={handleSubmit}>
          <h5>Username</h5>
          <input
            type="text"
            name="username"
            className="input-signup-username"
            value={formData.username}
            onChange={handleChange}
          />
          <h5>Email</h5>
          <input
            type="text"
            name="email"
            className="input-signup-username"
            value={formData.email}
            onChange={handleChange}
          />
          <h5>Password</h5>
          <input
            type="password"
            name="password"
            className="input-signup-password"
            value={formData.password}
            onChange={handleChange}
          />
          <h5>Phone Number</h5>
          <input
            type="text"
            name="phoneNumber"
            className="input-signup-password"
            value={formData.phoneNumber}
            onChange={handleChange}
          />
          <button type="submit" className="signup__signInButton">
            Đăng Ký
          </button>
        </form>
        <Link
          to="/login"
          className="signup__registerButton"
          style={{ color: "rgb(48, 123, 244)" }}
        >
          Đã có tài khoản?
        </Link>
      </div>
    </div>
  );
};

export default SignUp;
