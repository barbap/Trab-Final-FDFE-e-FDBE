require('./bootstrap');

window.Vue = require('vue').default;
import Router from 'vue-router';
import Icon from 'vue-awesome/components/Icon';

import "vue-toast-notification/dist/index.css";
import "vue-awesome/icons/flag";
import "vue-awesome/icons";

import Main from "./pages/Main.vue";
import Detail from "./pages/Detail.vue";
import MyList from "./pages/MyList.vue";

import store from "./store";
import VueYoutube from "vue-youtube";
import VueToast from "vue-toast-notification";

Vue.component('app', require('./components/App.vue').default);
Vue.component('footer-app', require('./components/app/Footer.vue').default);
Vue.component('header-app', require('./components/app/Header.vue').default);
Vue.component('treinos', require('./components/app/Treinos.vue').default);
Vue.component('spinner', require('./components/app/Spinner.vue').default);

Vue.component('detail', require('./pages/Detail.vue').default);
Vue.component('home', require('./pages/Main.vue').default);
Vue.component('mylist', require('./pages/MyList.vue').default);
Vue.component('v-icon', Icon);

Vue.use(VueToast);
Vue.use(VueYoutube);
Vue.use(Router);

const router = new Router({
  mode: "history",
  routes: [
    { path: "/Main", name: "Main", component: Main },
    { path: "/Detail/:id", name: "Detail", component: Detail },
    { path: "/MyList", name: "MyList", component: MyList }
  ]
});


Vue.config.productionTip = false;
const app = new Vue({
  router,
  store,
  el: '#app',
});
