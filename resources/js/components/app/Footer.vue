<template>
  <div id="footer">
    <nav role="navigation">
      <ul>
        <li id="selections">
          <ul class="dropdown">
            <li>
              <a>Política de privacidade</a>
            </li>
            <li>
              <a>Termos de uso</a>
            </li>
            <li>
              <a>Contato</a>
            </li>
            <li>
              <a>Blog</a>
            </li>
          </ul>
        </li>
        <li class="items">Política de privacidade</li>
        <li class="items">Termos de uso</li>
        <li class="items">Contato</li>
        <li class="items">Blog</li>
      </ul>
    </nav>
  </div>
</template>

<script>
const image = require("/images/logo-small.png");

export default {
  name: "Footer",
  data() {
    return {
      image,
      inputSearch: ""
    };
  },
  methods: {
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
#footer {
  width: 100%;
  height: 40px;
  background: #FFFFF8;
  display: flex;
  align-items: center;
  border-top: solid #C4C4C4 1px;
  border-bottom: solid #C4C4C4 1px;
  box-shadow: 0px 4px 7px 1px #888888;
}
nav {
  width: 70vw;
  color: white;
  display: flex;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
}
#footer ul {
  list-style: none;
  margin: auto;
  padding-left: 0;
}
#footer  li {
  color: #282727;
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
  .logoFooter {
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
  .logoFooter {
    margin-left: 0px;
  }
  #selections {
    padding-top: 60px;
  }
}
</style>
