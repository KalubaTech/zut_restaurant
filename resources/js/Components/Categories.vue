<template>
    <div class="shop-section">
      <h2>Today's <span>Menu</span></h2>
      <div class="shop-categories">
        <div v-for="(category, index) in categories" :key="index" class="category-item">
          <div class="image-wrapper">
            <img src="../../../public/assets/food1.jpg" :alt="category.name" />
          </div>
          <p>{{ category.name }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        categories: [
          {
            name: "Appetizers",
            image:'../../../public/assets/food1.jpg' // Replace with actual image path
          },
          {
            name: "Bread",
            image: '../../../public/assets/food2.webp'
          },
          {
            name: "Breakfasts",
            image: '../../../public/assets/food3.jpg'
          },
          {
            name: "Cheese Pizza",
            image: '../../../public/assets/food5.jpeg'
          },
          {
            name: "Dessert",
            image: '../../../public/assets/food5.jpeg'
          },
          {
            name: "Soups",
            image: '../../../public/assets/food5.jpeg'
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .shop-section {
    text-align: center;
    padding: 20px;
    background-color: whitesmoke;
  }
  
  .shop-section h2 {
    font-size: 2rem;
    margin-bottom: 20px;
  }
  
  .shop-section h2 span {
    color: #f57c00; /* Customize this color */
  }
  
  .shop-categories {
    display: flex;
    justify-content: center;
    gap: 20px;
  }
  
  .category-item {
    text-align: center;
    max-width: 100px;
  }
  
  .image-wrapper {
    border-radius: 50%;
    border: 5px solid transparent;
    padding: 5px;
    transition: border-color 0.3s ease;
  }
  
  .image-wrapper img {
    border-radius: 50%;
    width: 100%;
    height: auto;
  }
  
  .category-item p {
    margin-top: 10px;
    font-size: 1rem;
    font-family: sans-serif;
  }
  
  .category-item:hover .image-wrapper {
    border-color: #f57c00; /* Customize this color */
    cursor: pointer;
  }
  </style>
  