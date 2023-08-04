<template>
  <div class="collection">
    <h1>My Collection</h1>
    <div class="books-container">
      <CollectionCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e52cd7d5b408.43993033.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <CollectionCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e30b160ec240.36378255.JPG"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <CollectionCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70d4b9a9bc2.75639722.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <CollectionCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70bc074c3f9.51492930.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
      <CollectionCard
        imageSrc="https://www.junkybooks.com/administrator/bookimages/62e70d4b9a9bc2.75639722.png"
        imageAlt="Card Image"
        title="Card Title"
        description="This is a card component with an image."
      />
    </div>
  </div>
</template>

<script>
import CollectionCard from "./CollectionCard";


export default {
  name: "MyCollection",
  components: {
    CollectionCard,
  },
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.collection {
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
