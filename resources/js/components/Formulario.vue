<template>
    <section class="form">
        <div class="row">
            <div class="contact-col">
                <form method="post" v-bind:action="route">
                    <input type="text" name="Nome" placeholder="Nome Completo">
                    <input type="text" name="CPF" placeholder="CPF">
                    <input type="text" name="Celular" placeholder="Celular">
                    <input type="email" name="Email" placeholder="E-mail">
                    <input type="password" name="Senha" placeholder="Senha">
                    <button type="submit" class="hero-btn red-btn">Enviar</button>
                </form>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('Formulario mounted.')
        },
        props: {
            route: {
                type: String,
                required: true
            },
        },
    }
</script>