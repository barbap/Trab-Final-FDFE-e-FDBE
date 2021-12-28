<template>
  <div id="app">
    <header-app/>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App"
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  outline: 0;
  box-sizing: border-box;
}
body {
  background-color: #FFFFF8;
  height: 100vh;
}
</style>
