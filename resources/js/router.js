import VueRouter from "vue-router";
import Main from "./pages/Main.vue";
import Detail from "./pages/Detail.vue";
import MyList from "./pages/MyList.vue";

export default new VueRouter({
  mode: "history",
  routes: [
    { path: "/Main", name: "Main", component: Main },
    { path: "/Detail/:id", name: "Detail", component: Detail },
    { path: "/MyList", name: "MyList", component: MyList }
  ]
});
