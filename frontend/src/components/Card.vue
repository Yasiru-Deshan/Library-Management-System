<template>
  <div class="card">
    <img :src="imageSrc" :alt="imageAlt" />
    <div class="card-content">
      <h2>{{ title }}</h2>
 
      <div class="description-row">
      <p>{{ description }}</p>
 <button class="borrow-button"><p>Romance</p>
     
      </button>
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
      
      
      </div>
      
    </div>
  </div>
</template>

<script>
export default {
  name: "BookCard",
  props: {
    imageSrc: {
      type: String,
      required: true,
    },
    imageAlt: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.card {
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 250px;
  margin: 20px;
  padding: 10px;
  position: relative;
  height: 500px;
}

img {
  width: 100%;
  height: 75%;
  border-radius: 5px;
}

.card-content {
  padding: 10px;
}

h2 {
  margin: 0;
  font-size: 18px;
}

.description-row{
  display: grid;
  grid: auto/ auto auto auto;
  position: absolute;
  bottom: 0;
  padding: 5px;
  //width: 100%;
  right: 0;
  left: 0;
  align-items: center;
  
}

p {
  margin: 5px 0;
  font-size: 14px;
}

.borrow-button{
  border-radius: 50px;
  background: linear-gradient(to right, #8e2de2, #4a00e0);;
  white-space: nowrap;
  padding: 10px 22px;
  color: white;
  font-size: 16px;
  outline: none;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  text-decoration: none;
  //width: 50px;
  margin:10px;
  
}

.borrow-button:hover {
  background: #8e2de2;
  color: #fff;
}


</style>
