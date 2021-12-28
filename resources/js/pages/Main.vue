<template>
  <div id="app">
    <Treinos/>
    <Footer />
    <div id="note">
      <p>Consulte o seu médico e siga todas as instruções de segurança antes de iniciar qualquer programa de exercício especialmente se você estiver grávida, amamentando, tem qualquer cuidado médico ou está tomando qualquer tipo de medicamento.</p>
      <p>2021 Natália Andreato - Treinos Online®️. Todos os direitos reservados</p>
    </div>
  </div>
</template>

<script>
import Treinos from "../components/app/Treinos";
import Footer from '../components/app/Footer';

export default {
  name: "App",
  components: {
    Treinos,
    Footer
  }
};
</script>

<style>
#title {
  font-family: "Noto Sans", sans-serif; 
  margin-top: 60px;
  margin-left: 130px;
}
#note {
  width: 60%;
  margin-left: auto;
  margin-right: auto; 
  padding-top: 50px;
}
#app p {
  color: #282727;
  text-align: center;
  font-family: "Noto Sans Buhid", sans-serif;
  font-size: 13px;
}
</style>
