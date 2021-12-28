<template>
    <section class="pictures">
        <h1>Foco nos resultados</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <div class="row">
            <div class="pictures-col">
                <img v-bind:src="image">
                <div class="layer">
                    <h3>Superiores</h3>
                </div>
            </div>
            <div class="pictures-col">
                <img v-bind:src="image">
                <div class="layer">
                    <h3>Inferiores</h3>
                </div>
            </div>
            <div class="pictures-col">
                <img v-bind:src="image">
                <div class="layer">
                    <h3>Aeróbico</h3>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('Picture mounted.')
        },
        props: {
            image: {
                type: String,
                required: true
            }
        }
    }
</script>