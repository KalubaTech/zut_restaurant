<template>
    <header class="header">
      <div class="header-left">
        <img src="../../../public/assets/logo.png" alt="Food Logo" class="logo">
      </div>
      <nav class="header-nav">
        <ul>
          <li><a href="#">Receipes</a></li>
          <li><a href="#">Menus</a></li> 
          <li><a href="#">Seasonal Sensations</a></li>
          <li><a href="#">Shop</a></li>
        </ul>
      </nav>
      <div class="header-right">
        <button class="subscribe-button">Subscribe</button>
      </div>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header',
  }
  </script>
  
  <style scoped>
  *{
    font-family: sans-serif;
  }
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
  }
  
  .logo {
    height: 40px;
  }
  
  .header-nav ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .header-nav li {
    margin: 0 20px;
  }
  
  .header-nav a {
    text-decoration: none;
    color: #0f579f;
    font-weight: 700; 
    font-size: 14px;
  }
  
  .subscribe-button {
    background-color: #2E5B9A;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
  }
  
  .subscribe-button:hover {
    background-color: #1d4171;
  }
  </style>
  