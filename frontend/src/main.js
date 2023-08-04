// main.js (or app.js)

import { createApp } from "vue"; // Import createApp from Vue 3
import App from "./App.vue";
import HomePage from "./components/Home.vue";
import LoginForm from "./components/Login.vue";
import MyCollection from "./components/Collection.vue";
import { createRouter, createWebHistory } from "vue-router";

const app = createApp(App); // Create the app instance

app.component("HomePage", HomePage); 
app.component("LoginForm", LoginForm); 
app.component("MyCollection", MyCollection);

const routes = [
  { path: "/", component: HomePage },
  { path: "/login", component: LoginForm },
  { path: "/myCollection", component: MyCollection},
];

// Define Vue Router setup here
const router = createRouter({
  history: createWebHistory(),
  routes,
});

app.use(router); 

app.mount("#app"); // Mount the app to the #app element
