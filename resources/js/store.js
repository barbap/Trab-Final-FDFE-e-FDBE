import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

let list = window.localStorage.getItem("list");
let workoutWatched = window.localStorage.getItem("workoutWatched");

export default new Vuex.Store({
  state: {
    list: list ? JSON.parse(list) : [],
    workoutWatched: workoutWatched ? JSON.parse(workoutWatched) : []
  },

  mutations: {
    addToMyList(state, treino) {
      let existTreino = state.list.find(
        current => current.id == treino.id
      );
      if (!existTreino) {
        state.list.push(treino);
      }
      this.commit("saveData");
    },
    saveData(state) {
      window.localStorage.setItem("list", JSON.stringify(state.list));
    },
    removeData(state, treino) {
      let index = state.list.indexOf(treino);
      state.list.splice(index, 1);
      this.commit("saveData");
    },
    markAsWatched(state, treino) {
      let treinoMarked = state.workoutWatched.find(
        current => current.id == treino.id
      );

      if (!treinoMarked) {
        state.workoutWatched.push(treino);
      }

      this.commit("markWorkout");
    },
    markWorkout(state) {
      window.localStorage.setItem(
        "workoutWatched",
        JSON.stringify(state.workoutWatched)
      );
    },
    removeWatched(state, movie) {
      let WatchedRemove = state.workoutWatched.indexOf(movie);
      state.workoutWatched.splice(WatchedRemove, 1);
      this.commit("markWorkout");
    }
  }
});
