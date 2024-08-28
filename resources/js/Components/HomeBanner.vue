<template>
    <div class="image">
        <div class="wrapper">
            <div  class="title">
                9 Delicious for Food Lovers  
                <div style="text-align: center; width: 100%; display: flex; align-items: center; justify-content: center">
                    <div class="explore-button">Explore</div> 
                </div>
            </div> 
         
        </div>
     
        <div>

        </div>
    </div>
</template>

<style scoped>
    .image{
        height: 350px;
        width: 100%;
        background-image: url(../../../public/assets/foodbanner.jpg);
    }
    .wrapper{
        font-family: sans-serif;
        font-size: 30px;
        font-weight: 900;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        height: 100%;
        color: white;
        background-color: rgba(0, 0, 0, 0.523); 
    }

    .title{
        text-align: center;
    }
      
  .explore-button {
    background-color: #cdaf17;
    color: white;
    border: none;
    padding: 10px 20px;
    width: 200px;
    border-radius: 40px;
    cursor: pointer;
    margin-top: 20px;
    font-size: 16px;
  }
  
  .explore-button:hover {
    background-color: #8d820a;
  }
</style>