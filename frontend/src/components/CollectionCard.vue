<template>
  <div class="card">
    <img :src="imageSrc" :alt="imageAlt" />
    <div class="card-content">
      <h2>{{ title }}</h2>
 
      <div class="description-row">
      <p>{{ description }}</p>
 <button class="borrow-button"><p>Remove</p>
     
      </button>
      
      
      </div>
      
    </div>
  </div>
</template>

<script>
export default {
  name: "CollectionCard",
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
  font-family: Poppins, sans-serif;
  background: linear-gradient(to right, #f953c6, #b91d73);
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
