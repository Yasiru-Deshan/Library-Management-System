<template>
  <div class="card">
    <img :src="imageSrc" :alt="imageAlt" />
    <div class="card-content">
      <h2>{{ title }}</h2>
      <p>{{ description }}</p>
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

p {
  margin: 5px 0;
  font-size: 14px;
}
</style>
