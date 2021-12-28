<template>
  <div id="header">
    <img class="logoHeader" src="/images/logo-small.png" @click="navigateMain" />
    <nav role="navigation">
      <ul>
        <li id="selections">
          <a id="navigate">
            Navegar
            <v-icon name="sort-down" scale="1" color="#e5e5e5" />
          </a>
          <ul class="dropdown">
            <li>
              <a href="/app">Início</a>
            </li>
            <li @click="navigateMain">
              <a>Treinos</a>
            </li>
            <li @click="navigateMain">
              <a>Meus Treinos</a>
            </li>
          </ul>
        </li>
        <li class="items"><a href="/app">Início</a></li>
        <li class="items" @click="navigateMain">Treinos</li>
        <li class="items" @click="navigateMyList">Meus Treinos</li>
        <li></li>
      </ul>
    </nav>
    <div id="textForm">
      <form>
        <input type="text" name="text" placeholder="Pesquisar" />
      </form>
    </div>
    <div id="icons">
      <form ref="form" method="POST" action="/logout">
        <input type="hidden" name="_token" :value="csrf">
        <v-icon name="user-circle" scale="2" @click="logout" color="#FFFFFF" />
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      inputSearch: "",
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
  },
  methods: {
    logout() {
      this.$refs.form.submit();
    },
    navigateMain() {
      this.$router.push({ name: "Main" });
    },
    navigateMyList() {
      this.$router.push({ name: "MyList" });
    }
  }
};
</script>

<style>
#header {
  width: 100%;
  height: 65px;
  background: #D67A99;
  display: flex;
  align-items: center;
}

.logoHeader {
  margin-left: 35px;
  max-width: 110px;
}
.logoHeader:hover {
  cursor: pointer;
}
nav {
  width: 70vw;
  color: white;
  display: flex;
  align-items: center;
}
ul {
  list-style: none;
  margin: 0;
  padding-left: 0;
}
li {
  color: #fff;
  display: block;
  float: left;
  padding: 1rem;
  position: relative;
  text-decoration: none;
  transition-duration: 0.5s;
  font-family: "Noto Sans Buhid", sans-serif;
  font-size: 13.5px;
}
li a {
  color: #fff;
  cursor: default;
}
li:hover {
  cursor: pointer;
}
.items:hover {
  color: #ccc;
}
ul li ul {
  visibility: hidden;
  opacity: 0;
  min-width: 5rem;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
}
ul li ul li {
  clear: both;
  width: 100%;
}
.dropdown {
  background: #141414c7;
}
#navigate {
  opacity: 0;
  height: 0;
}
#options {
  font-size: 14px;
  color: #e5e5e5;
  cursor: pointer;
  width: 60%;
}
#eachOptions {
  list-style: none;
  display: flex;
  justify-content: space-around;
  width: 50%;
}
input[type="text"] {
  border: none;
  color: #FFFF;

  font-size: 15px;
  background-color: #D67A99;
  background-image: url("/images/carbon_search.png");
  background-position: 10px 10px;
  background-size: 25px;
  background-repeat: no-repeat;
  padding: 14px 7px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

::placeholder {
  color: #FFFF;
}

input[type="text"]:focus {
  width: 100%;
}
#textForm {
  width: 15%;
}

#icons {
  width: 10%;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
@media only screen and (max-width: 906px) {
  nav {
    width: 80vw;
  }
}
@media only screen and (max-width: 900px) {
  ul li:hover > ul,
  ul li:focus-within > ul,
  ul li ul:hover {
    visibility: visible;
    opacity: 1;
    display: block;
    font-size: 15px;
    position: absolute;
    z-index: 9999;
  }
  li :hover {
    color: #ccc;
  }
  #navigate {
    color: white;
    opacity: 10;
    height: auto;
    margin-left: -10px;
  }
  .items {
    opacity: 0;
    height: 0;
    font-size: 0;
  }

  li a {
    cursor: pointer;
  }
  nav {
    width: 30%;
    height: 30px;
    padding-top: 3px;
  }
  #textForm {
    width: 30%;
  }
  #icons {
    width: 20%;
  }
}
@media only screen and (max-width: 626px) {
  #selections {
    padding-top: 30px;
  }
}
@media only screen and (max-width: 541px) {
  #selections {
    padding-top: 50px;
  }
}
@media only screen and (max-width: 500px) {
  .logoHeader {
    width: 80px;
  }
  nav {
    width: 30%;
    padding-top: 40px;
  }
  #selections {
    padding-top: 30px;
  }
}
@media only screen and (max-width: 320px) {
  .logoHeader {
    margin-left: 0px;
  }
  #selections {
    padding-top: 60px;
  }
}
</style>
