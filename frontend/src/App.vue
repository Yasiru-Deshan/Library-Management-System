<template>
  <div>
    <NavBar />

    <main>
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import NavBar from './components/Navbar';

export default {
  name: 'App',
  components:{
  NavBar,
  },
}
</script>

<style>
#app {
  font-family: Poppins, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  
}
</style>
