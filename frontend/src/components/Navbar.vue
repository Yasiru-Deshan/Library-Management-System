<template>

  <nav>
    <div class="navbar-container">
      <a class="nav-logo" href="/">BookWise</a>

      <div class="mobile-icon">
        <!-- Insert your mobile icon here, e.g., Hamburger icon -->
      </div>

      <ul class="nav-menu">
        <li class="nav-item">
          <a class="nav-links" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-links" href="/myCollection">My Collection</a>
        </li>
      </ul>

      <div class="nav-btn">
        <a class="nav-btn-link" href="/signin">Sign In</a>
      </div>
      <div class="nav-btn">
        <!-- Insert your organization name here dynamically -->
      </div>

      
    </div>
  </nav>

 

</template>

<script>
export default {
  name: "NavBar",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

 h1, h2, h3, p, ul, li {
  margin: 0;
  padding: 0;
  list-style: none;
}


nav {
  background: #000;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  position: relative;
  top: 0;
  z-index: 10;
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 8px;
  z-index: 1;
  width: 100%;
  padding: 0 24px;
  max-width: 1100px;
}

.nav-logo {
  color: #fff;
  justify-self: flex-start;
  cursor: pointer;
  font-size: 1.5rem;
  display: flex;
  align-items: center;
  margin-left: 24px;
  font-weight: bold;
  text-decoration: none;
}

.mobile-icon {
  display: none;
}

/* Add your mobile icon styling here */

@media screen and (max-width: 768px) {
  .mobile-icon {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(-100%, 60%);
    font-size: 1.8rem;
    cursor: pointer;
    color: #fff;
  }

  .nav-logo {
    margin-top: 16px;
  }

  .nav-menu {
    display: none;
  }

  .nav-btn {
    display: none;
  }
}

.nav-menu {
  display: flex;
  align-items: center;
  margin-right: -22px;
}

.nav-item {
  height: 80px;
}

.nav-links {
  color: #fff;
  display: flex;
  align-items: center;
  text-decoration: none;
  padding: 0 1rem;
  height: 100%;
  cursor: pointer;
}

.nav-links.active {
  border-bottom: 5px solid #01bf71;
}

.nav-btn {
  display: flex;
  align-items: center;
}

.nav-btn-link {
  border-radius: 50px;
  background: #01bf71;
  white-space: nowrap;
  padding: 10px 22px;
  color: #010606;
  font-size: 16px;
  outline: none;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  text-decoration: none;
}

.nav-btn-link:hover {
  background: #fff;
  color: #010606;
}

.logout-btn {
  /* Your logout button styling here */
  margin: 0 10px;
}

</style>
