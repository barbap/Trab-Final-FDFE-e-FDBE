<template>
    <div id="myListContainer">
      <div id="myListContent">
        <div :key="treino.id" v-for="treino in this.$store.state.list" id="moviesSaved">
          <div @click="showDetail(treino.id)" id="changeColorImage" v-if="treinos.includes(treino.id)">
            <img :src="treino.Poster" id="movieSaveImage" />
          </div>
          <div @click="showDetail(treino.id)" id="normalColorImage" v-else>
            <img :src="treino.Poster" id="movieSaveImage" />
          </div>

          <div id="buttonsMyList">
            <button
              id="checkedButton"
              title="Já assistido"
              v-if="treinos.includes(treino.id)"
              @click="removeWatched(treino)"
            >
              <v-icon name="check" scale="1.2" color="#010" />
            </button>
            <button
              id="checkAsWatched"
              @click="markAsWatched(treino), checkIfWatched()"
              title="Marcar como assistido"
              v-else
            >
              <v-icon name="check" scale="1.2" color="#00e500" />
            </button>
            <button
              id="markToRemove"
              title="Remover da minha lista"
              @click="$store.commit('removeData', treino), removeToast()"
            >
              <v-icon name="trash" scale="1.2" color="#e50931" />
            </button>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import Icon from "vue-awesome/components/Icon";
export default {
  name: "MyList",
  data() {
    return {
      booleanMovie: true,
      treinos: []
    };
  },
  components: {
    "v-icon": Icon
  },
  mounted() {
    this.checkIfWatched();
  },
  methods: {
    showDetail(_id) {
      this.$router.push({ name: "Detail", params: { id: _id } });
    },
    markAsWatched(movie) {
      this.$store.commit("markAsWatched", movie);
      this.markAsWatchedToast();
    },
    removeWatched(movie) {
      this.$store.commit('removeWatched', movie);
      window.location.reload();
    },
    removeToast() {
      this.$toast.open({
        message: "Removido de minha lista",
        type: "error",
        duration: 3000,
        dismissible: true,
        queue: true,
        position: "top-right"
      });
    },
    markAsWatchedToast() {
      this.$toast.open({
        message: "Marcado como assistido",
        type: "success",
        duration: 3000,
        dismissible: true,
        queue: true,
        position: "top-right"
      });
    },
    checkIfWatched() {
      this.$store.state.workoutWatched.map(current => {
        this.treinos.push(current.id);
      });
    },
  }
};
</script>

<style>
#myListContainer {
  display: flex;
  justify-content: center;
  align-items: center;
}
#myListContent {
  width: 90%;
  height: 100%;
  margin-top: 20px;
  display: flex;
}
#moviesSaved {
  display: flex;
  flex-direction: column;
  width: 360px;
  height: auto;
  margin-right: 30px;
  transition: 0.5s;
  cursor: pointer;
}
#normalColorImage {
  width: 360px;
  height: 202px;
  position: relative;
}
#changeColorImage {
  width: 360px;
  height: 202px;
  position: relative;
  background: #414040be;
}
#movieSaveImage {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 360px;
  height: 202px;
}

#moviesSaved:hover {
  transform: scale(1.05);
}
#buttonsMyList {
  display: flex;
  margin-top: 10px;
}
#buttonsMyList button {
  border: none;
  background: rgba(78, 78, 78, 0.562);
  font-size: 15px;
  text-align: center;
  transition: transform 0.5s;
  height: 30px;
}
#buttonsMyList button:hover {
  border: none;
  background: rgba(250, 250, 250, 0.26);
  color: #141414;
  transform: scale(1.1);
  cursor: pointer;
}
#checkedButton {
  width: 50%;
  margin-right: 2px;
}
#checkedButton:hover {
  width: 50%;
  margin-right: 2px;
}
#checkAsWatched {
  width: 50%;
  margin-right: 2px;
}
#markToRemove {
  width: 50%;
  margin-left: 2px;
}
@media only screen and (max-width: 730px) {
  #myListContent {
    width: 90%;
    display: flex;
  }
}
@media only screen and (max-width: 600px) {
  #myListContent {
    width: 50%;
    display: flex;
    flex-direction: column;
  }
}
</style>
