<template>
    <section class="course">
        <h1>Treinos que oferecemos</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <div class="row" id="cursos">
            <div class="course-col" v-for="curso in cursos" :key="curso.Nome">
                <h3>{{curso.Nome}}</h3>
                <p>{{curso.Descricao}}</p>
            </div>
        </div>
    </section>
</template>
<script>
    import { get } from 'axios';
    export default {
        mounted() {
            get("/app/curso")
            .then(response => {
                console.log(response);
                this.cursos = response.data;
            });
        },
        data() {
            return {
                cursos: [],
            }
        }
    }
</script>