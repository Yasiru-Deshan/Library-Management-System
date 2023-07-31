<template>
  <div class="home">
    <div class="search-bar">
      <input
        type="text"
        v-model="searchTerm"
        @input="handleSearch"
        placeholder="Search..."
      />

      <button @click="handleSearch"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg></button>
    </div>
    <div class="books-container">
      <BookCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e52cd7d5b408.43993033.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <BookCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e30b160ec240.36378255.JPG"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <BookCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70d4b9a9bc2.75639722.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <BookCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70bc074c3f9.51492930.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <BookCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70d4b9a9bc2.75639722.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
    </div>
  </div>
</template>

<script>
import BookCard from "./Card";


export default {
  name: "HomePage",
  components: {
    BookCard,
  },
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.home {
  padding: 50px;
}

.search-bar {
  display: flex;
  align-items: center;
  justify-content: center;
}

input[type="text"] {
  padding: 10px;
  margin-right: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  width: 250px;
}

button {
  padding: 10px 20px;
  background-color: #fff;
  color: #007bff;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
}

.books-container {
  justify-content: center;
  display: grid;
  grid: auto / auto auto auto auto;
}
</style>
