<template>
  <div id="newMovies">
    <div id="slide">
      <carousel
        :per-page="4"
        :navigate-to="0"
        :mouse-drag="true"
        :paginationEnabled="false"
        :navigationEnabled="true"
        :navigationClickTargetSize="9"
      >
        <slide
          id="movieDiv"
          :key="treino.id + Math.random()"
          v-for="treino in treinos"
        >
          <div @click="showDetail(treino.id)">
            <img :src="treino.Poster" id="imagemPosterSlide" loading="lazy"/>
          </div>
        </slide>
      </carousel>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
import Spinner from "./Spinner";
import { Treinos } from "/js/api";

export default {
  name: "Treinos",
  data() {
    return {
      treinos: []
    };
  },
  components: {
    Carousel,
    Slide,
    Spinner
  },
  mounted() {
    this.getWorkoutDetails();
  },
  methods: {
    getWorkoutDetails(){
      const treinos = Treinos();
      this.treinos = treinos;
    },
    showDetail(_id) {
      this.$router.push({ name: "Detail", params: { id: _id } });
    },
  }
};
</script>
<style>
#slide {
  width: 90%;
  height: 100%;
  text-align: center;
  margin: auto;
}
#newMovies {
  padding-top: 15px;
  width: 100%;
  height: 100%;
  text-align: center;
  margin: auto;
}
#buttonNexts {
  color: #f1f;
}
#newMovies h1 {
  color: #cacaca;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 10px;
  margin-top: 15px;
  padding-left: 20px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
#loadingMovie {
  display: flex;
  justify-content: center;
  align-items: center;
}
#movieDiv {
  margin-top: 23px;
  padding-left: 20px;
  flex: 1;
}
#imagemPosterSlide {
  border-radius: 15px;
  transition: 0.5s;
  height: 202px;
  margin-bottom: 20px;
  width: 360px;
}
#imagemPosterSlide:hover {
  transform: scale(1.1);
  cursor: pointer;
}
.VueCarousel-navigation-button[data-v-453ad8cd] {
  color: #e9e9e9 !important;
  outline: none !important;
}

@media only screen and (max-width: 599px) {
  #imagemPosterSlide {
    height: 150px;
    width: 100px;
  }
  #newMovies h1 {
    font-size: 15px;
    margin-bottom: 5px;
    margin-top: 5px;
  }
}
</style>
